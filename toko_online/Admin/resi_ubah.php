<?php session_start();
include '../config.php';                // Panggil koneksi ke database
include '../fungsi/cek_login.php';      // Panggil fungsi cek sudah login/belum
include '../fungsi/cek_session.php';    // Panggil fungsi cek session
include '../fungsi/cek_aksi_ubah.php';  // Panggil fungsi boleh ubah data atau tidak
include '../fungsi/setting.php';        // Panggil data setting
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ubah Data Resi | <?php include "title.php" ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/fav.ico" />
    <!-- JS -->
    <?php include 'js.php'; ?>
    <link href="template/plugins/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="template/plugins/datepicker/js/jquery.js"></script>
    <script src="template/plugins/datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
    $(function()
    {
      $('#tgl').datepicker({autoclose: true,todayHighlight: true,format: 'yyyy-mm-dd'})
    });
    </script>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <?php include 'header.php'; ?>
      
      <div class="content-wrapper">
        <section class="content-header">
          <h1>Ubah Data Resi</h1>
          <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Resi</li>
            <li class="active"><a href="#">Ubah Data Resi</a></li>
          </ol>
        </section>

        <section class="content">
          <?php include "resi_ubah_form.php" ?>
        </section>
      </div>

      <?php include "footer.php" ?>

    </div>
    
  </body>
</html>