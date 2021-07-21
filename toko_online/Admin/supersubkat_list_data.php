<div class="box">
  <div class="box-body table-responsive padding">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="text-align: center">No.</th>
          <th style="text-align: center">Nama Supersub Kategori</th>
          <th style="text-align: center">Nama Sub Kategori</th>
          <th style="text-align: center">Nama Kategori</th>
          <th style="text-align: center">Aksi</th>
        </tr>
      </thead>
      <tbody>

      <?php
      $sql  = "SELECT a.id_supersubkat,a.judul_supersubkat, b.judul_subkat AS judul_subkat, c.judul_kat as judul_kat
                FROM supersubkat a 
                LEFT JOIN subkat b on b.id_subkat = a.id_subkat 
                LEFT JOIN kategori c ON c.id_kat = b.id_kat 
                ORDER BY a.id_supersubkat ASC ";
      $result = mysqli_query($conn, $sql);
      $no = 1;
      if (mysqli_num_rows($result) > 0)
      {
        while ($data = mysqli_fetch_array($result))
        {
          echo "
          <tr>
            <td valign='top' align='center'>".$no."</td>
            <td style='text-align: left'>".$data['judul_supersubkat']."</td>
            <td style='text-align: center'>".$data['judul_subkat']."</td>
            <td style='text-align: center'>".$data['judul_kat']."</td>
            <td style='text-align: center'>
              <a href='supersubkat_ubah.php?id_supersubkat=$data[id_supersubkat]'>
                <button type='submit' class='btn btn-primary'>Ubah</button>
              </a>
              <a href='supersubkat_hapus.php?id_supersubkat=$data[id_supersubkat]'>
                <button type='submit' class='btn btn-danger' OnClick=\"return confirm('Apakah Anda yakin?');\">Hapus</button>
              </a>
            </td>
          </tr>";
          $no++;
        }
      }
      else{echo "Belum ada data";}
      ?>
    </tbody>
  </table>
  </div>
</div>