<?php session_start();
include '../config.php';                  // Panggil koneksi ke database
include '../fungsi/cek_login.php';        // Panggil fungsi cek sudah login/belum
include '../fungsi/cek_aksi_ubah.php';    // Panggil fungsi boleh ubah data atau tidak

if(isset($_POST['submit']))
{
  $id_resi  = mysqli_real_escape_string($conn, $_POST['id_resi']);
  $tgl      = mysqli_real_escape_string($conn, $_POST['tgl']);
  $isi      = mysqli_real_escape_string($conn, $_POST['isi']);

  $sql = "UPDATE resi SET id_resi     = '$id_resi',
                          isi         = '$isi',
                          updater     = '$sesen_username',
                          jam_update  = now(),
                          tgl_update  = now() 
                    WHERE id_resi     = '$id_resi' ";
                            
  if(mysqli_query($conn, $sql)) 
  {
    echo "<script>alert('Update data berhasil! Klik ok untuk melanjutkan');location.replace('resi_list.php')</script>";
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