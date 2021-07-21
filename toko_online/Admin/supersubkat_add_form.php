<form action="supersubkat_add_proses.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-body">
          <div class="form-group"><label>Kategori</label><br/>
            <select name="cmbkat" id="cmbkat" class="form-control" required>
            <option value="">-Pilih-</option>
            <?php
            $query = "SELECT * FROM kategori ORDER BY judul_kat";
            $sql = mysqli_query($conn, $query);
            while($data = mysqli_fetch_array($sql))
            {
              echo '<option value="'.$data['id_kat'].'">'.$data['judul_kat'].'</option>';
            }
            ?>
            </select>
            <img src="../images/loading.gif" width="18" id="imgLoad" style="display:none;" />
          </div>
          <div class="form-group"><label>Sub Kategori</label><br/>
            <select name="cmbsubkat" id="cmbsubkat" class="form-control">
              <option>--Pilih Kategori Terlebih Dahulu--</option>
            </select>
            <img src="../images/loading.gif" width="18" id="imgLoad" style="display:none;" />
          </div>
          <div class="form-group"><label>Judul Sub Kategori</label>
            <input type="text" class="form-control" name="judul_supersubkat" id="judul_supersubkat">
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