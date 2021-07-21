<?php
$id_supersubkat = mysqli_real_escape_string($conn,$_GET['id_supersubkat']);
$sql            = "SELECT * FROM supersubkat WHERE id_supersubkat = '$id_supersubkat' ";
$result         = mysqli_query($conn, $sql);
$data           = mysqli_fetch_array($result);
?>

<form action="supersubkat_ubah_proses.php" method="post">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-body">
          <input type="hidden" class="form-control" name="id_supersubkat" id="id_supersubkat" value="<?php echo $data['id_supersubkat'] ?>">
          <div class="form-group"><label>Kategori</label>
            <select name="cmbkat" id="cmbkat" class="form-control" required>
            <option value="">--Pilih Kategori--</option>
              <?php
              $kategori       = "SELECT * FROM kategori ORDER BY judul_kat ASC";
              $result         = mysqli_query($conn, $kategori);
              while($datakat  = mysqli_fetch_array($result))
              {
                echo "<option value='$datakat[id_kat]'".($data['id_kat']==$datakat['id_kat']?' selected':'').">$datakat[judul_kat]</option>\n";
              }
              ?>
            </select>
          </div>
          <div class="form-group"><label>Sub Kategori</label>
            <select name="cmbsubkat" id="cmbsubkat" class="form-control" required>
            <option value="">--Pilih Kategori--</option>
              <?php
              $subkat           = "SELECT * FROM subkat ORDER BY judul_subkat ASC";
              $result           = mysqli_query($conn, $subkat);
              while($datasubkat = mysqli_fetch_array($result))
              {
                echo "<option value='$datasubkat[id_subkat]'".($data['id_subkat']==$datasubkat['id_subkat']?' selected':'').">$datasubkat[judul_subkat]</option>\n";
              }
              ?>
            </select>
          </div>
          <div class="form-group"><label>Judul Supersub Kategori</label>
            <input type="text" class="form-control" name="judul_supersubkat" id="judul_supersubkat" value="<?php echo $data['judul_supersubkat'] ?>">
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