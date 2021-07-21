<?php session_start();
include '../config.php';                  // Panggil koneksi ke database
include '../fungsi/cek_login.php';        // Panggil fungsi cek sudah login/belum
include '../fungsi/cek_session.php';      // Panggil fungsi cek session
include '../fungsi/setting.php';          // Panggil data setting
include '../fungsi/tgl_indo.php';         // Panggil fungsi merubah tanggal menjadi format seperti 2 Mei 2015
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Daftar Konfirmasi Pembayaran | <?php include "title.php" ?></title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Favicon -->
  <link rel="shortcut icon" href="../images/fav.ico" />
  <!-- JS -->
  <?php include 'js.php'; ?>
  <!-- Data Tables -->
  <link href="template/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
  <script src="template/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="template/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
  <!-- Skrip Datatables -->
  <script type="text/javascript">
    $(function () {
      $("#example1").dataTable();
      $('#example2').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": false,
      });
    });
  </script>
</head>
<body class="skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include 'header.php'; ?>

    <div class="content-wrapper">
      <section class="content-header">
        <h1>Daftar Konfirmasi Pembayaran</h1>
        <ol class="breadcrumb">
          <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li>Konfirmasi Pembayaran</li>
          <li class="active"><a href="kategori_list.php">Daftar Konfirmasi Pembayaran</a></li>
        </ol>
      </section>

      <section class="content">
        <div class="box">
          <div class="box-body table-responsive padding">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align: center">No.</th>
                  <th style="text-align: center">No. Invoice</th>
                  <th style="text-align: center">Tanggal Transfer</th>
                  <th style="text-align: center">Nama Pengirim</th>
                  <th style="text-align: center">Email</th>
                  <th style="text-align: center">Transfer ke</th>
                  <th style="text-align: center">Jml Transfer</th>
                  <th style="text-align: center">Catatan</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $sql = "SELECT * FROM konfirmasi_pembayaran ORDER BY kp_id ASC";
                $result = mysqli_query($conn, $sql);
                $no = 1;
                ?>
                <?php if (mysqli_num_rows($result) > 0): ?>
                  <?php while ($data = mysqli_fetch_array($result)) : ?>
                    <tr>
                    <td valign='top' align='center'><?php echo $no?></td>
                    <td style='text-align: left'><?php echo $data['no_invoice']?></td>
                    <td style='text-align: left'><?php echo $data['tgl_transfer']?></td>
                    <td style='text-align: left'><?php echo $data['nama_pengirim']?></td>
                    <td style='text-align: left'><?php echo $data['email']?></td>
                    <td style='text-align: left'><?php echo $data['transfer_ke']?></td>
                    <td style='text-align: left'><?php echo $data['jml_transfer']?></td>
                    <td style='text-align: left'><?php echo $data['catatan']?></td>
                  </tr>
                  <?php $no++; ?>
                <?php endwhile; ?>
              <?php endif ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

  <?php include "footer.php" ?>

</div>

</body>
</html>