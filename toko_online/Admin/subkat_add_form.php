<form action="subkat_add_proses.php" method="post">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-body">
          <div class="form-group"><label>Kategori</label>
            <br/>
            <select name="id_kat" id="id_kat" class="form-control" required>
            <option value="">--Pilih Kategori--</option>
              <?php
              $kat            = "SELECT * FROM kategori ORDER BY judul_kat";
              $result         = mysqli_query($conn, $kat);
              while($datakat  = mysqli_fetch_array($result))
              {
                echo "<option value='$datakat[id_kat]'>$datakat[judul_kat]</option>\n";
              }
              ?>
            </select>
          </div>
          <div class="form-group"><label>Judul Sub Kategori</label>
            <input type="text" class="form-control" name="judul_subkat" id="judul_subkat">
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