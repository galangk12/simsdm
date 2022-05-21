<?php
require_once("../../config/database.php");
require_once("../../config/databaseabsen.php");
$page=isset($_GET['page']) ? ($_GET['page']) : "";

// ------------------------- MASTER TENDIK CONTROLLER ----------------------//

//--------------- SETTINGS -------------------//
if($page=='setting_user') {
  $username = $_POST['username'];
  $pass_old = md5($_POST['password_old']);
  $pass_new = md5($_POST['password_new']);
  $query1 = mysqli_query($koneksi,"SELECT * FROM tb_users where username='$username'");
  $dt = mysqli_fetch_array($query1);
  if ($dt['password'] == $pass_old) {
    $query2 = "UPDATE tb_users SET password='$pass_new' where username='$username' "; //Melakukan Query Hapus Data
    if (mysqli_query($koneksi,$query2)) {
      echo "<script> alert('Password Berhasil Di Ubah')
          window.location.href='index?page=settings'
          </script>
        ";
    
        }
        else
        {
        echo "<script> alert('Password Gagal Di Ubah')
          window.location.href='index?page=settings'
          </script>
        ";
        }
  } else {
    echo "<script> alert('Maaf Password Anda Salah')
          window.location.href='index?page=settings'
          </script>
        ";
  }
  }
  if($page=='absenmasuktendik') {
    date_default_timezone_set("Asia/Jakarta");
    $nik=$_GET['nik'];
    $code=$_GET['code'];
    $tanggal = date("Y-m-d",strtotime('now'));
    $waktu = date("H:i:s",strtotime('now'));
    $qr=mysqli_query($conn,"SELECT * FROM portalcode");
    $dr=mysqli_fetch_array($qr);
    $kode=$dr['id_code'];
    $query = "INSERT INTO absen_tendik (nik,tanggal,jam_masuk) VALUES ('$nik','$tanggal','$waktu')";
    if(mysqli_query($conn,$query)) {
        echo "<script> alert('Berhasil Melakukan Absensi Masuk')
        window.location.href='index?page=portalabsen&code=$kode'
        </script>";
    } else {
        echo "<script> alert('Gagal Melakukan Absensi Masuk')
        window.location.href='index?page=portalabsen&code=$kode'
        </script>";
    }

}elseif($page=='absenpulangtendik') {
    date_default_timezone_set("Asia/Jakarta");
    $nik=$_GET['nik'];
    $code=$_GET['code'];
    $qq=mysqli_query($conn,"SELECT * FROM absen_tendik where nik='$nik'");
    $qr=mysqli_query($conn,"SELECT * FROM portalcode");
    $dt=mysqli_fetch_array($qq);
    $dr=mysqli_fetch_array($qr);
    $kode=$dr['id_code'];
    $tanggal = date("Y-m-d",strtotime('now'));
    $waktu = date("H:i:s",strtotime('now'));
    $query = "UPDATE absen_tendik SET jam_pulang = '$waktu' WHERE nik='$nik' and tanggal='$tanggal' ";
    if(mysqli_query($conn,$query)) {
        echo "<script> alert('Berhasil Melakukan Absensi Pulang')
        window.location.href='index?page=portalabsen&code=$kode'
        </script>";
    } else {
        echo "<script> alert('Gagal Melakukan Absensi Pulang')
        window.location.href='index?page=portalabsen&code=$kode'
        </script>";
    }

}

  ?>
