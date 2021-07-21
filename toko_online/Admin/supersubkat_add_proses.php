<?php session_start();
include '../config.php';                  // Panggil koneksi ke database
include '../fungsi/cek_login.php';        // Panggil fungsi cek sudah login/belum
include '../fungsi/cek_aksi_tambah.php';  // Panggil fungsi boleh tamabah data atau tidak
include "../fungsi/judul_seo.php";        // Panggil fungsi judul_seo untuk merubah teks dalam format tanpa spasi dan simbol

if(isset($_POST['submit']))
{
  $cmbkat            = mysqli_real_escape_string($conn, $_POST['cmbkat']);
  $cmbsubkat         = mysqli_real_escape_string($conn, $_POST['cmbsubkat']);
  $judul_supersubkat = mysqli_real_escape_string($conn, $_POST['judul_supersubkat']);
  $kategori_seo      = judul_seo($judul_supersubkat);

  $cekdata = "SELECT judul_supersubkat FROM supersubkat WHERE judul_supersubkat = '$judul_supersubkat' ";
  $ada     = mysqli_query($conn, $cekdata);
  if(mysqli_num_rows($ada) > 0)
  { 
    echo "<script>alert('ERROR: Judul telah terdaftar, silahkan pakai Judul lain!');history.go(-1)</script>";
  }
    else
    {
      // Proses insert data dari form ke db
      $sql = "INSERT INTO supersubkat ( id_kat,
                                        id_subkat,
                                        judul_supersubkat,
                                        kategori_seo) 
                              VALUES (  '$cmbkat',
                                        '$cmbsubkat',
                                        '$judul_supersubkat',
                                        '$kategori_seo')";

      if(mysqli_query($conn, $sql)) 
      {
        echo "<script>alert('Insert data berhasil! Klik ok untuk melanjutkan');location.replace('supersubkat_list.php')</script>";
      } 
        else 
        {
          echo "Error updating record: " . mysqli_error($conn);
        }
    }
}
  else
  {
    echo "<script>alert('Gak boleh tembak langsung ya, pencet dulu tombolnya!');history.go(-1)</script>";
  }
?>