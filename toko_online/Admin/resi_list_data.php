<div class="box">
  <div class="box-body table-responsive padding">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="text-align: center">No.</th>
          <th style="text-align: center">Tanggal Kirim</th>
          <th style="text-align: center">Resi</th>
          <th style="text-align: center">Jam Upload</th>
          <th style="text-align: center">Tgl Upload</th>
          <th style="text-align: center">Uploader</th>
          <th style="text-align: center">Aksi</th>
        </tr>
      </thead>
      <tbody>

      <?php
      $sql = "SELECT * FROM resi ORDER BY id_resi ASC";
      $result = mysqli_query($conn, $sql);
      $no = 1;
      if (mysqli_num_rows($result) > 0)
      {
        while ($data = mysqli_fetch_array($result))
        {
          echo "<tr>
                  <td valign='top' align='center'>".$no."</td>
                  <td style='text-align: left'>".tgl_indo($data['tgl'])."</td>
                  <td style='text-align: left'>".$data['isi']."</td>
                  <td style='text-align: center'>".$data['jam_upload']."</td>
                  <td style='text-align: center'>".tgl_indo($data['tgl_upload'])."</td>
                  <td style='text-align: center'>".$data['uploader']."</td>
                  <td style='text-align: center'>
                    <a href='resi_ubah.php?id_resi=".$data['id_resi']."' '>
                      <button type='submit' class='btn btn-primary'>Ubah</button>
                    </a>
                    <a href='resi_hapus.php?id_resi=$data[id_resi]'>
                      <button type='submit' class='btn btn-danger' OnClick=\"return confirm('Apakah Anda yakin?');\">Hapus</button>
                    </a>
                  </td>
                </tr>";
                $no++;
        }
      }
      else
      {
        echo "Belum ada data";
      }
    ?>
    </tbody>
  </table>
  </div>
</div>