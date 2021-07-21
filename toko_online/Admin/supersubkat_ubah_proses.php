<?php session_start();
include '../config.php';                  // Panggil koneksi ke database
include '../fungsi/cek_login.php';        // Panggil fungsi cek sudah login/belum
include '../fungsi/cek_aksi_ubah.php';    // Panggil fungsi boleh ubah data atau tidak
include '../fungsi/judul_seo.php';        // Panggil fungsi merubah teks menjadi tanpa spasi dan simbol

if(isset($_POST['submit']))
{
  $id_supersubkat     = mysqli_real_escape_string($conn, $_POST['id_supersubkat']);
  $cmbsubkat          = mysqli_real_escape_string($conn, $_POST['cmbsubkat']);
  $cmbkat             = mysqli_real_escape_string($conn, $_POST['cmbkat']);
  $judul_supersubkat  = mysqli_real_escape_string($conn, $_POST['judul_supersubkat']);
  $kategori_seo       = judul_seo($judul_supersubkat);

  $sql = "UPDATE supersubkat SET  id_supersubkat    = '$id_supersubkat', 
                                  id_subkat         = '$cmbsubkat', 
                                  id_kat            = '$cmbkat', 
                                  judul_supersubkat = '$judul_supersubkat',
                                  kategori_seo      = '$kategori_seo'
                            WHERE id_supersubkat    = '$id_supersubkat' ";
                            
  if(mysqli_query($conn, $sql)) 
  {
    echo "<script>alert('Update data berhasil! Klik ok untuk melanjutkan');location.replace('supersubkat_list.php')</script>";
  } 
    else 
    {
      echo "Error updating record: " . mysqli_error($conn);
    }
}    
  else
  {
    echo "<script>alert('Gak boleh tembak langsung ya, pencet dulu tombolnya!');history.go(-1)</script>";
  } 
?>