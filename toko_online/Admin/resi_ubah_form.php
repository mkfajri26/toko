<?php
$id_resi    = mysqli_real_escape_string($conn, $_GET['id_resi']);
$sql        = "SELECT * FROM resi WHERE id_resi = '$id_resi' ";
$result     = mysqli_query($conn, $sql);
$data       = mysqli_fetch_array($result);
$tampil_isi = str_replace("<br>","\r\n",$data['isi']);
?>

<form action="resi_ubah_proses.php" method="post">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-body">
          <input type="hidden" name="id_resi" id="id_resi" class="form-control" value="<?php echo $data['id_resi'] ?>">
          <div class="form-group"><label>Tanggal Kirim</label>
            <input type="text" name="tgl" id="tgl" class="form-control" value="<?php echo $data['tgl'] ?>">
          </div>
          <div class="form-group"><label>Detail Resi</label>
            <textarea rows="10" id="isi" name="isi"><?php echo "$tampil_isi" ?></textarea>
            <script type="text/javascript">var editor = CKEDITOR.replace('isi');</script>
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
include "../fungsi/tinymce.php";    // Editor teks Tinymce + Ajax File/ Photo Manager
?>