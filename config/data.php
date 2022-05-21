<?php
require_once 'database.php';
$page=isset($_GET['page']) ? ($_GET['page']) : "";
if($page=='registrasi') {
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$instansi = $_POST['instansi'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$password = $_POST['password'];

$query=mysqli_query($koneksi,"INSERT INTO users (nama_lengkap,jabatan,instansi,email,nohp,password,level)
        VALUES ('$nama','$jabatan','$instansi','$email','$nohp','$password','user')");
if($query) {
  echo "<script> alert('Terimakasih Telah Melakukan Registrasi, Dimohon Login Menggunakan Email dan Password Yang Telah Didaftarkan.')
          window.location.href='../index.php' </script>";
}
else {
  echo "<script> alert('Maaf Proses Registrasi Gagal.')
          window.location.href='../index.php' </script>";
}

}
elseif ($page=='edit_user_admin') {
  $id=$_POST['id_user'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $nohp = $_POST['nohp'];
  $password = $_POST['password'];
  $query=mysqli_query($koneksi,"UPDATE users SET nama_lengkap='$nama',email='$email',
  nohp='$nohp',password='$password' WHERE id_user='$id'");
  if($query) {
    echo "<script> alert('Data Berhasil Diubah')
            window.location.href='../admin/index.php' </script>";
  }
  else {
    echo "<script> alert('Maaf Data Gagal Diubah.')
            window.location.href='../admin/index.php' </script>";
  }
}
elseif ($page=='edit_user') {
  $id=$_POST['id_user'];
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $instansi = $_POST['instansi'];
  $email = $_POST['email'];
  $nohp = $_POST['nohp'];
  $password = $_POST['password'];
  $query=mysqli_query($koneksi,"UPDATE users SET nama_lengkap='$nama',jabatan='$jabatan',instansi='$instansi',email='$email',
  nohp='$nohp',password='$password' WHERE id_user='$id'");
  if($query) {
    echo "<script> alert('Data Berhasil Diubah')
            window.location.href='../user/index.php' </script>";
  }
  else {
    echo "<script> alert('Maaf Data Gagal Diubah.')
            window.location.href='../user/index.php' </script>";
  }
}
elseif($page=='hapus_user') {
$id=$_GET['id'];
$query=mysqli_query($koneksi,"DELETE FROM users where id_user='$id'");
if($query) {
  echo "<script> alert('User Berhasil Dihapus')
          window.location.href='../admin/index.php' </script>";
}
else {
  echo "<script> alert('User Gagal Dihapus')
          window.location.href='../admin/index.php' </script>";
}
}
 ?>
