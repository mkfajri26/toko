<?php session_start();
include '../config.php';                  // Panggil koneksi ke database
include '../fungsi/cek_login.php';        // Panggil fungsi cek sudah login/belum
include '../fungsi/cek_aksi_ubah.php';    // Panggil fungsi boleh ubah data atau tidak

if(isset($_POST['submit']))
{
  $id_kabkot    = mysqli_real_escape_string($conn, $_POST['id_kabkot']);
  $nama_kabkot  = mysqli_real_escape_string($conn, $_POST['nama_kabkot']);
  $jne_reg      = mysqli_real_escape_string($conn, $_POST['jne_reg']);

  $sql = "UPDATE kabkot SET id_kabkot   = '$id_kabkot', 
                            nama_kabkot = '$nama_kabkot', 
                            jne_reg     = '$jne_reg' 
                      WHERE id_kabkot   = '$id_kabkot' ";
                            
  if(mysqli_query($conn, $sql)) 
  {
    echo "<script>alert('Update data berhasil! Klik ok untuk melanjutkan');location.replace('ongkir_list.php')</script>";
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