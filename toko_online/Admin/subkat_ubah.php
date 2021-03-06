<?php session_start();
require "../config.php";                // Panggil koneksi ke database
require "../fungsi/cek_login.php";      // Panggil fungsi cek sudah login/belum
require "../fungsi/cek_session.php";    // Panggil fungsi cek session
require "../fungsi/cek_aksi_ubah.php";  // Panggil fungsi boleh ubah data atau tidak
require "../fungsi/setting.php";        // Panggil data setting
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ubah Data Sub Kategori | <?php include "title.php" ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/fav.ico" />
    <!-- JS -->
    <?php include 'js.php'; ?>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <?php include 'header.php'; ?>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>Ubah Data Sub Kategori</h1>
          <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Sub Kategori</li>
            <li class="active"><a href="#">Ubah Data Sub Kategori</a></li>
          </ol>
        </section>

        <section class="content">
          <?php include "subkat_ubah_form.php" ?>
        </section>
      </div>

      <?php include "footer.php" ?>
      
    </div>

  </body>
</html>