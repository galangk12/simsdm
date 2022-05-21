<?php
require_once("../../config/database.php");
require_once("../../config/databaseabsen.php");
$page=isset($_GET['page']) ? ($_GET['page']) : "";

// ------------------------- MASTER DOSEN CONTROLLER ----------------------//
if($page=='tambah_dosen') {
$nidn=$_POST['nidn'];
$nip=$_POST['nip'];
$nik=$_POST['nik'];
$noserdik=$_POST['noserdik'];
$nama_dosen=$_POST['nama_dosen'];
$jk=$_POST['jk'];
$tmp_lahir=$_POST['tmp_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$pt=$_POST['pt'];
$status_pegawai=$_POST['status_pegawai'];
$status_aktif=$_POST['status_aktif'];
$tmtdt=$_POST['tmtdt'];
$fak=$_POST['fak'];
$prod=$_POST['prod'];
$email=$_POST['email'];
$nohp=$_POST['nohp'];
$npwp=$_POST['npwp'];
$namabank=$_POST['namabank'];
$norekening=$_POST['norekening'];
$prekening=$_POST['prekening'];
$passlhkasn=$_POST['passlhkasn'];
//UP
$namabank1 = strtoupper($namabank);
$prekening1 = strtoupper($prekening);
$passe = md5('untagsemarang');

$q = "INSERT INTO tb_mdo_dosen (nidn,nip,nik,noserdik,nama_dosen,jk,tmp_lahir,tgl_lahir,alamat,pt,status_pegawai,status_aktif,tmtdt,id_fak,id_prod,email,nohp,npwp,namabank,norekening,prekening,passlhkasn)
VALUES ('$nidn','$nip','$nik','$noserdik','$nama_dosen','$jk','$tmp_lahir','$tgl_lahir','$alamat','$pt','$status_pegawai','$status_aktif','$tmtdt','$fak','$prod','$email','$nohp',
  '$npwp','$namabank1','$norekening','$prekening1','$passlhkasn')";
$us = (mysqli_query($koneksi,"INSERT INTO tb_users (nidn,password,id_fak,status) VALUES ('$nidn','$passe','$fak','d')"));

if (mysqli_query($koneksi,$q)) {
             echo "<script> alert('Data Berhasil Di Unggah')
                     window.location.href='index'
                     </script>
                 ";

                 }
                 else
                 {
                   echo "<script> alert('Data Gagal Di Unggah')
                     window.location.href='index'
                     </script>
                 ";
                 }

}
elseif($page=='edit_dosen') {
  $nidn=$_POST['nidn'];
  $nip=$_POST['nip'];
  $nik=$_POST['nik'];
  $noserdik=$_POST['noserdik'];
  $nama_dosen=$_POST['nama_dosen'];
  $jk=$_POST['jk'];
  $tmp_lahir=$_POST['tmp_lahir'];
  $tgl_lahir=$_POST['tgl_lahir'];
  $alamat=$_POST['alamat'];
  $pt=$_POST['pt'];
  $status_pegawai=$_POST['status_pegawai'];
  $status_aktif=$_POST['status_aktif'];
  $tmtdt=$_POST['tmtdt'];
  $fak=$_POST['fak'];
  $prod=$_POST['prod'];
  $email=$_POST['email'];
  $nohp=$_POST['nohp'];
  $npwp=$_POST['npwp'];
  $namabank=$_POST['namabank'];
  $norekening=$_POST['norekening'];
  $prekening=$_POST['prekening'];
  $passlhkasn=$_POST['passlhkasn'];


$q = "UPDATE tb_mdo_dosen SET nip ='$nip',nik='$nik',noserdik='$noserdik',nama_dosen='$nama_dosen',jk='$jk',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',alamat='$alamat',
pt='$pt',status_pegawai='$status_pegawai',status_aktif='$status_aktif',tmtdt='$tmtdt',id_fak='$fak',id_prod='$prod',email='$email',nohp='$nohp',npwp='$npwp',namabank='$namabank',
norekening='$norekening',prekening='$prekening', passlhkasn='$passlhkasn' WHERE nidn='$nidn'";

if (mysqli_query($koneksi,$q)) {
             echo "<script> alert('Data Berhasil Di Perbaharui')
                     window.location.href='index'
                     </script>
                 ";

                 }
                 else
                 {
                   echo "<script> alert('Data Gagal Di Perbaharui')
                     window.location.href='index'
                     </script>
                 ";
                 }

}
elseif($page=='hapus_mdosen') {
$id = $_GET['id'];
$query = "DELETE FROM tb_mdo_dosen WHERE nidn=$id"; //Melakukan Query Hapus Data
$query2 = mysqli_query($koneksi,"DELETE FROM tb_users WHERE username=$id");
if (mysqli_query($koneksi,$query)) {
  echo "<script> alert('Data Berhasil Di Dihapus')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Hapus')
          window.location.href='index'
          </script>
      ";
      }
}

// ------------------------- TAMBAH PENDIDIKAN ----------------------//
elseif($page=='tambah_mdosen_pendidikan') {
$nidn=$_POST['nidn'];
$jenjang=$_POST['jenjang'];
$prodi=$_POST['prodi'];
$akreditasi=$_POST['akreditasi'];
$pt=$_POST['pt'];
$tgl_ijazah= $_POST['tgl_ijazah'];
$scan_ijazah= $_FILES['scan_ijazah']['name'];
$filetmp_scan_ijazah=$_FILES['scan_ijazah']['tmp_name'];
$tempat = "../../berkas/pendidikan/";
$temp = explode(".", $scan_ijazah);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
$nama_baru = round(microtime(true)) . '.' . end($temp);//fungsi untuk membuat nama acak
$query = "INSERT INTO tb_mdo_pendidikan (nidn,jenjang,prodi,akreditasi,pt,tgl_ijazah,scan_ijazah) VALUES
('$nidn','$jenjang','$prodi','$akreditasi','$pt','$tgl_ijazah','$nama_baru')"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  move_uploaded_file($filetmp_scan_ijazah,$tempat.$nama_baru);
  echo "<script> alert('Data Berhasil Di Unggah')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Unggah')
          window.location.href='index'
          </script>
      ";
      }
}
elseif($page=='hapus_pendidikan') {
$id = $_GET['id'];
$hp= mysqli_query($koneksi,"SELECT * FROM tb_mdo_pendidikan WHERE id_pd='$id'");
$qhp= mysqli_fetch_array($hp);
$tempat="../../berkas/pendidikan/$qhp[scan_ijazah]";
$query = "DELETE FROM tb_mdo_pendidikan WHERE id_pd=$id"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  unlink($tempat);
  echo "<script> alert('Data Berhasil Di Dihapus')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Hapus')
          window.location.href='index'
          </script>
      ";
      }
}


// ------------------------- TAMBAH JABATAN ----------------------//

elseif($page=='tambah_mdosen_jabatan') {
$nidn=$_POST['nidn'];
$no_sk=$_POST['no_sk'];
$tgl_sk=$_POST['tgl_sk'];
$tmt=$_POST['tmt'];
$kum=$_POST['kum'];
$scan_sk= $_FILES['scan_sk']['name'];
$filetmp_scan_sk=$_FILES['scan_sk']['tmp_name'];
$tempat = "../../berkas/jabatan/";
$temp = explode(".", $scan_sk);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
$nama_baru = round(microtime(true)) . '.' . end($temp);//fungsi untuk membuat nama acak
$query = "INSERT INTO tb_mdo_jabatan (nidn,no_sk,tgl_sk,tmt,kum,scan_sk) VALUES
('$nidn','$no_sk','$tgl_sk','$tmt','$kum','$nama_baru')"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  move_uploaded_file($filetmp_scan_sk,$tempat.$nama_baru);
  echo "<script> alert('Data Berhasil Di Unggah')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Unggah')
          window.location.href='index'
          </script>
      ";
      }
}
elseif($page=='hapus_jabatan') {
$id = $_GET['id'];
$hp= mysqli_query($koneksi,"SELECT * FROM tb_mdo_jabatan WHERE id_jb='$id'");
$qhp= mysqli_fetch_array($hp);
$tempat="../../berkas/jabatan/$qhp[scan_sk]";
$query = "DELETE FROM tb_mdo_jabatan WHERE id_jb=$id"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  unlink($tempat);
  echo "<script> alert('Data Berhasil Di Dihapus')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Hapus')
          window.location.href='index'
          </script>
      ";
      }
}
// ------------------------- TAMBAH PANGKAT ----------------------//

elseif($page=='tambah_mdosen_pangkat') {
$nidn=$_POST['nidn'];
$no_sk=$_POST['no_sk'];
$tgl_sk=$_POST['tgl_sk'];
$tmt=$_POST['tmt'];
$scan_sk= $_FILES['scan_sk']['name'];
$filetmp_scan_sk=$_FILES['scan_sk']['tmp_name'];
$tempat = "../../berkas/pangkat/";
$temp = explode(".", $scan_sk);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
$nama_baru = round(microtime(true)) . '.' . end($temp);//fungsi untuk membuat nama acak
$query = "INSERT INTO tb_mdo_pangkat (nidn,no_sk,tgl_sk,tmt,scan_sk) VALUES
('$nidn','$no_sk','$tgl_sk','$tmt','$nama_baru')"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  move_uploaded_file($filetmp_scan_sk,$tempat.$nama_baru);
  echo "<script> alert('Data Berhasil Di Unggah')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Unggah')
          window.location.href='index'
          </script>
      ";
      }
}
elseif($page=='hapus_pangkat') {
$id = $_GET['id'];
$hp= mysqli_query($koneksi,"SELECT * FROM tb_mdo_pangkat WHERE id_pk='$id'");
$qhp= mysqli_fetch_array($hp);
$tempat="../../berkas/pangkat/$qhp[scan_sk]";
$query = "DELETE FROM tb_mdo_pangkat WHERE id_pk=$id"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  unlink($tempat);
  echo "<script> alert('Data Berhasil Di Dihapus')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Hapus')
          window.location.href='index'
          </script>
      ";
      }
}
// ------------------------- TAMBAH SKP----------------------//

elseif($page=='tambah_mdosen_skp') {
$nidn=$_POST['nidn'];
$tahun=$_POST['tahun'];
$berkas_skp= $_FILES['berkas_skp']['name'];
$filetmp_berkas_skp=$_FILES['berkas_skp']['tmp_name'];
$tempat = "../../berkas/skp/";
$temp = explode(".", $berkas_skp);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
$nama_baru = round(microtime(true)) . '.' . end($temp);//fungsi untuk membuat nama acak
$query = "INSERT INTO tb_mdo_skp (nidn,tahun,berkas_skp) VALUES
('$nidn','$tahun','$nama_baru')"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  move_uploaded_file($filetmp_berkas_skp,$tempat.$nama_baru);
  echo "<script> alert('Data Berhasil Di Unggah')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Unggah')
          window.location.href='index'
          </script>
      ";
      }
}
elseif($page=='hapus_skp') {
$id = $_GET['id'];
$hp= mysqli_query($koneksi,"SELECT * FROM tb_mdo_skp WHERE id_skp='$id'");
$qhp= mysqli_fetch_array($hp);
$tempat="../../berkas/skp/$qhp[berkas_skp]";
$query = "DELETE FROM tb_mdo_skp WHERE id_skp=$id"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  unlink($tempat);
  echo "<script> alert('Data Berhasil Di Dihapus')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Hapus')
          window.location.href='index'
          </script>
      ";
      }
}
// ------------------------- TAMBAH KGB----------------------//

elseif($page=='tambah_mdosen_kgb') {
$nidn=$_POST['nidn'];
$no_surat=$_POST['no_surat'];
$tgl_surat=$_POST['tgl_surat'];
$tmt=$_POST['tmt'];
$berkas_kgb= $_FILES['berkas_kgb']['name'];
$filetmp_berkas_kgb=$_FILES['berkas_kgb']['tmp_name'];
$tempat = "../../berkas/kgb/";
$temp = explode(".", $berkas_kgb);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
$nama_baru = round(microtime(true)) . '.' . end($temp);//fungsi untuk membuat nama acak
$query = "INSERT INTO tb_mdo_kgb (nidn,no_surat,tgl_surat,tmt,berkas_kgb) VALUES
('$nidn','$no_surat','$tgl_surat','$tmt','$nama_baru')"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  move_uploaded_file($filetmp_berkas_kgb,$tempat.$nama_baru);
  echo "<script> alert('Data Berhasil Di Unggah')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Unggah')
          window.location.href='index'
          </script>
      ";
      }
}
elseif($page=='hapus_kgb') {
$id = $_GET['id'];
$hp= mysqli_query($koneksi,"SELECT * FROM tb_mdo_kgb WHERE id_kgb='$id'");
$qhp= mysqli_fetch_array($hp);
$tempat="../../berkas/kgb/$qhp[berkas_kgb]";
$query = "DELETE FROM tb_mdo_kgb WHERE id_kgb=$id"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  unlink($tempat);
  echo "<script> alert('Data Berhasil Di Dihapus')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Hapus')
          window.location.href='index'
          </script>
      ";
      }
}

// ------------------------- TAMBAH LHKASN----------------------//

elseif($page=='tambah_mdosen_lh') {
$nidn=$_POST['nidn'];
$tahun=$_POST['tahun'];
$berkas_lh= $_FILES['berkas_lh']['name'];
$filetmp_berkas_lh=$_FILES['berkas_lh']['tmp_name'];
$tempat = "../../berkas/lhkasn/";
$temp = explode(".", $berkas_lh);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
$nama_baru = round(microtime(true)) . '.' . end($temp);//fungsi untuk membuat nama acak
$query = "INSERT INTO tb_mdo_lh (nidn,tahun,berkas_lh) VALUES
('$nidn','$tahun','$nama_baru')"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  move_uploaded_file($filetmp_berkas_lh,$tempat.$nama_baru);
  echo "<script> alert('Data Berhasil Di Unggah')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Unggah')
          window.location.href='index'
          </script>
      ";
      }
}
elseif($page=='hapus_lh') {
$id = $_GET['id'];
$hp= mysqli_query($koneksi,"SELECT * FROM tb_mdo_lh WHERE id_lh='$id'");
$qhp= mysqli_fetch_array($hp);
$tempat="../../berkas/lhkasn/$qhp[berkas_lh]";
$query = "DELETE FROM tb_mdo_lh WHERE id_lh=$id"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  unlink($tempat);
  echo "<script> alert('Data Berhasil Di Dihapus')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Hapus')
          window.location.href='index'
          </script>
      ";
      }
}

// ------------------------- TAMBAH DP----------------------//

elseif($page=='tambah_mdosen_dp') {

$nidn=$_POST['nidn'];
$ktp= $_FILES['ktp']['name'];
$karpeg= $_FILES['karpeg']['name'];
$sp= $_FILES['sp']['name'];
$npwp= $_FILES['npwp']['name'];
$br= $_FILES['br']['name'];
$filetmp_ktp=$_FILES['ktp']['tmp_name'];
$filetmp_karpeg=$_FILES['karpeg']['tmp_name'];
$filetmp_sp=$_FILES['sp']['tmp_name'];
$filetmp_npwp=$_FILES['npwp']['tmp_name'];
$filetmp_br=$_FILES['br']['tmp_name'];

$tempat = "../../berkas/dp/";

$query = "INSERT INTO tb_mdo_dp (nidn,ktp,karpeg,sp,npwp,br) VALUES
('$nidn','$ktp','$karpeg','$sp','$npwp','$br')"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  move_uploaded_file($filetmp_ktp,$tempat.$ktp);
  move_uploaded_file($filetmp_karpeg,$tempat.$karpeg);
  move_uploaded_file($filetmp_sp,$tempat.$sp);
  move_uploaded_file($filetmp_npwp,$tempat.$npwp);
  move_uploaded_file($filetmp_br,$tempat.$br);
  echo "<script> alert('Data Berhasil Di Unggah')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Unggah')
          window.location.href='index'
          </script>
      ";
      }
}
elseif($page=='hapus_dp') {
$id = $_GET['id'];
$hp= mysqli_query($koneksi,"SELECT * FROM tb_mdo_dp WHERE id_dp='$id'");
$qhp= mysqli_fetch_array($hp);
$tempat1="../../berkas/dp/$qhp[ktp]";
$tempat2="../../berkas/dp/$qhp[karpeg]";
$tempat3="../../berkas/dp/$qhp[sp]";
$tempat4="../../berkas/dp/$qhp[npwp]";
$tempat5="../../berkas/dp/$qhp[br]";
$query = "DELETE FROM tb_mdo_dp WHERE id_dp = $id"; //Melakukan Query Hapus Data
if (mysqli_query($koneksi,$query)) {
  unlink($tempat1);
  unlink($tempat2);
  unlink($tempat3);
  unlink($tempat4);
  unlink($tempat5);
  echo "<script> alert('Data Berhasil Di Dihapus')
          window.location.href='index'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Hapus')
          window.location.href='index'
          </script>
      ";
      }
}

//--------------- SETTINGS -------------------//
elseif($page=='setting_user') {
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
  if($page=='absenmasuk') {
    date_default_timezone_set("Asia/Jakarta");
    $nidn=$_GET['nidn'];
    $code=$_GET['code'];
    $tanggal = date("Y-m-d",strtotime('now'));
    $waktu = date("H:i:s",strtotime('now'));
    $qr=mysqli_query($conn,"SELECT * FROM portalcode");
    $dr=mysqli_fetch_array($qr);
    $kode=$dr['id_code'];
    $query = "INSERT INTO absen (nidn,tanggal,jam_masuk) VALUES ('$nidn','$tanggal','$waktu')";
    if(mysqli_query($conn,$query)) {
        echo "<script> alert('Berhasil Melakukan Absensi Masuk')
        window.location.href='index?page=portalabsen&code=$code'
        </script>";
    } else {
        echo "<script> alert('Gagal Melakukan Absensi Masuk')
        window.location.href='index?page=portalabsen&code=$code'
        </script>";
    }

}elseif($page=='absenpulang') {
    date_default_timezone_set("Asia/Jakarta");
    $nidn=$_GET['nidn'];
    $code=$_GET['code'];
    $qq=mysqli_query($conn,"SELECT * FROM absen where nidn='$nidn'");
    $qr=mysqli_query($conn,"SELECT * FROM portalcode");
    $dt=mysqli_fetch_array($qq);
    $dr=mysqli_fetch_array($qr);
    $kode=$dr['id_code'];
    $tanggal = date("Y-m-d",strtotime('now'));
    $waktu = date("H:i:s",strtotime('now'));
    $query = "UPDATE absen SET jam_pulang = '$waktu' WHERE nidn='$nidn' and tanggal='$tanggal' ";
    if(mysqli_query($conn,$query)) {
        echo "<script> alert('Berhasil Melakukan Absensi Pulang')
        window.location.href='index?page=portalabsen&code=$code'
        </script>";
    } else {
        echo "<script> alert('Gagal Melakukan Absensi Pulang')
        window.location.href='index?page=portalabsen&code=$code'
        </script>";
    }

}

  ?>
