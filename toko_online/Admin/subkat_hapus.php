<?php session_start();
include '../config.php';                  // Panggil koneksi ke database
include '../fungsi/cek_login.php';        // Panggil fungsi cek sudah login/belum
include '../fungsi/cek_aksi_hapus.php'; 	// Panggil fungsi boleh hapus data atau tidak

$id_subkat   = mysqli_real_escape_string($conn, $_GET['id_subkat']);

$sql = "DELETE FROM subkat WHERE id_subkat = '$id_subkat' ";
if (mysqli_query($conn, $sql)) 
{
  echo "<script>alert('Hapus data berhasil! Klik ok untuk melanjutkan');location.replace('subkat_list.php')</script>"; 
}
  else 
  {
    echo "Error updating record: " . mysqli_error($conn);
  }
?>