<div class="box">
  <div class="box-body table-responsive padding">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="text-align: center">No.</th>
          <th style="text-align: center">Nama Sub Kategori</th>
          <th style="text-align: center">Nama Kategori</th>
          <th style="text-align: center">Aksi</th>
        </tr>
      </thead>
      <tbody>

      <?php
      $sql = "SELECT a.id_subkat, a.judul_subkat, b.judul_kat as id_kat FROM subkat 
              a LEFT JOIN kategori b ON b.id_kat = a.id_kat ORDER BY a.id_subkat ASC";
      $result = mysqli_query($conn, $sql);
      $no = 1;
      if (mysqli_num_rows($result) > 0)
      {
        while ($data = mysqli_fetch_array($result))
        {
          echo "
          <tr>
            <td valign='top' align='center'>".$no."</td>
            <td style='text-align: left'>".$data['judul_subkat']."</td>
            <td style='text-align: left'>".$data['id_kat']."</td>
            <td style='text-align: center'>
              <a href='subkat_ubah.php?id_subkat=$data[id_subkat]'>
                <button type='submit' class='btn btn-primary'>Ubah</button>
              </a>
              <a href='subkat_hapus.php?id_subkat=$data[id_subkat]'>
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