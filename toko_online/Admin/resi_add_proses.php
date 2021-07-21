<?php session_start();
include '../config.php';                  // Panggil koneksi ke database
include '../fungsi/cek_login.php';        // Panggil fungsi cek sudah login/belum
include '../fungsi/cek_session.php';      // Panggil fungsi cek session
include '../fungsi/cek_aksi_tambah.php';  // Panggil fungsi boleh tamabah data atau tidak

if(isset($_POST['submit']))
{
  $tgl  = mysqli_real_escape_string($conn, $_POST['tgl']);
  $isi  = mysqli_real_escape_string($conn, $_POST['isi']);

  // Proses insert data dari form ke db
  $sql = "INSERT INTO resi (tgl,
                            isi,
                            uploader,
                            jam_upload,
                            tgl_upload)
                    VALUES ('$tgl',
                            '$isi',
                            '$sesen_username',
                            now(),
                            now() )";
  if(mysqli_query($conn, $sql)) 
  {
    echo "<script>alert('Insert data berhasil! Klik ok untuk melanjutkan');location.replace('resi_list.php')</script>";
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