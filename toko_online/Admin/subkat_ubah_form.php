<?php
$id_subkat  = mysqli_real_escape_string($conn,$_GET['id_subkat']);
$sql        = "SELECT * FROM subkat WHERE id_subkat = '$id_subkat' ";
$result     = mysqli_query($conn, $sql);
$data       = mysqli_fetch_array($result);
?>

<form action="subkat_ubah_proses.php" method="post">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-body">
          <input type="hidden" class="form-control" name="id_subkat" id="id_subkat" value="<?php echo $data['id_subkat'] ?>">
          <div class="form-group"><label>Kategori</label>
            <select name="id_kat" id="id_kat" class="form-control" required>
            <option value="">--Pilih Kategori--</option>
              <?php
              $kat            = "SELECT * FROM kategori ORDER BY judul_kat ASC";
              $result         = mysqli_query($conn, $kat);
              while($datakat  = mysqli_fetch_array($result))
              {
                echo "<option value='$datakat[id_kat]'".($data['id_kat']==$datakat['id_kat']?' selected':'').">$datakat[judul_kat]</option>\n";
              }
              ?>
            </select>
          </div>
          <div class="form-group"><label>Judul Sub Kategori</label>
            <input type="text" class="form-control" name="judul_subkat" id="judul_subkat" value="<?php echo $data['judul_subkat'] ?>">
          </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" name="submit" class="btn btn-success">Submit</button>
          <button type="reset" name="reset" class="btn btn-danger">Reset</button>
        </div>
      </div><!-- /.box -->
      <!-- left column -->
    </div>
  </div>
</form>