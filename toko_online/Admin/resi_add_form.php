<form action="resi_add_proses.php" method="post">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-body">
          <div class="form-group"><label>Tanggal Kirim</label>
            <input type="text" name="tgl" id="tgl" class="form-control" >
          </div>
          <div class="form-group"><label>Detail Resi</label>
            <textarea class="tinymce" rows="10" id="isi" name="isi"></textarea>
            <!-- <textarea class="form-control" rows="10" id="isi" name="isi"></textarea> -->
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

<?php 
include "../fungsi/tinymce.php";    // Editor teks Tinymce
?>