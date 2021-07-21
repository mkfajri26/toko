<?php session_start();
include '../config.php';                  // Panggil koneksi ke database
include '../fungsi/cek_login.php';        // Panggil fungsi cek sudah login/belum
include '../fungsi/cek_session.php';      // Panggil fungsi cek session
include '../fungsi/cek_aksi_tambah.php';  // Panggil fungsi boleh tambah data atau tidak
include '../fungsi/setting.php';          // Panggil data setting

$sql          = "SELECT * FROM kategori ORDER BY judul_kat";
$getComboKat  = mysqli_query($conn, $sql) or die ('Query Gagal'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tambah Supersub Kategori Baru | <?php include "title.php" ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/fav.ico" />
    <!-- JS -->
    <?php include 'js.php'; ?>
    <!-- Script Menampilkan Select Box/ Dropdown Berantai atau Chained Select Box/ Dropdown -->
    <script type="text/javascript">
    $(function() {
      $("#cmbkat").change(function(){
        $("sbox#tampil").show();
        var id_kat = $(this).val();
        $.ajax({
          type: "POST",
          dataType: "html",
          url: "../fungsi/getsubkat.php",
          data: "id_kat="+id_kat,
          success: function(msg){
          if(msg == '')
          {
            $("select#cmbsubkat").html('<option value="">--Pilih Kategori Terlebih Dahulu--</option>');
            $("select#cmbsupersubkat").html('<option value="">--Belum ada data--</option>');
          }
            else{$("select#cmbsubkat").html(msg);                                                      
          }
          $("img#tampil").hide();
          getAjaxAlamat();                                                       
        }
      });                   
    });
    $("#cmbsubkat").change(getAjaxAlamat);
    function getAjaxAlamat(){
      $("sbox#tampil").show();
      var id_subkat = $("#cmbsubkat").val();
      $.ajax({
        type: "POST",
        dataType: "html",
        url: "../fungsi/getsupersubkat.php",
        data: "id_subkat="+id_subkat,
        success: function(msg){
        if(msg == '')
        {
          $("select#cmbsupersubkat").html('<option value="">--Belum ada data--</option>');                                                                                 
        }else{$("select#cmbsupersubkat").html(msg);                             
      }
      $("sbox#tampil").hide();                                                       
        }
      });
      }    
    });
    </script>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <?php include 'header.php'; ?>
      
      <div class="content-wrapper">
        <section class="content-header">
          <h1>Form Entry Supersub Kategori Baru</h1>
          <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Supersub Kategori</li>
            <li class="active"><a href="supersubkat_add.php">Entry Supersub Kategori Baru</a></li>
          </ol>
        </section>

        <section class="content">
          <?php include "supersubkat_add_form.php" ?>
        </section>
      </div>

      <?php include "footer.php" ?>

    </div>

  </body>
</html>