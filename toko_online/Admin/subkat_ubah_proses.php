<?php session_start();
include '../config.php';                  // Panggil koneksi ke database
include '../fungsi/cek_login.php';        // Panggil fungsi cek sudah login/belum
include '../fungsi/cek_aksi_ubah.php';    // Panggil fungsi boleh ubah data atau tidak

if(isset($_POST['submit']))
{
  $id_subkat    = mysqli_real_escape_string($conn, $_POST['id_subkat']);
  $id_kat       = mysqli_real_escape_string($conn, $_POST['id_kat']);
  $judul_subkat = mysqli_real_escape_string($conn, $_POST['judul_subkat']);

  $sql = "UPDATE subkat SET id_subkat     = '$id_subkat', 
                            id_kat        = '$id_kat', 
                            judul_subkat  = '$judul_subkat' 
                      WHERE id_subkat     = '$id_subkat' ";
                            
  if(mysqli_query($conn, $sql)) 
  {
    echo "<script>alert('Update data berhasil! Klik ok untuk melanjutkan');location.replace('subkat_list.php')</script>";
  } 
    else 
    {
      echo "Error updating record: " . mysqli_error($conn);
    }
}    
  else
  {
    echo "<script>alert('Gak boleh tembak langsung ya, pencet dulu tombol uploadnya!');history.go(-1)</script>";
  } 
?>