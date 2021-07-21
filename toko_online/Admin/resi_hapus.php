<?php session_start();
include '../config.php';                  // Panggil koneksi ke database
include '../fungsi/cek_login.php';        // Panggil fungsi cek sudah login/belum
include '../fungsi/cek_aksi_hapus.php'; 	// Panggil fungsi boleh hapus data atau tidak

$id_resi   = mysqli_real_escape_string($conn, $_GET['id_resi']);

$sql = "DELETE FROM resi WHERE id_resi = $id_resi";
if (mysqli_query($conn, $sql)) 
{
  echo "<script>alert('Hapus data berhasil! Klik ok untuk melanjutkan');location.replace('resi_list.php')</script>"; 
}
  else 
  {
      echo "Error updating record: " . mysqli_error($conn);
  }
?>