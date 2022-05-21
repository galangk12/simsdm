<?php
require_once("../../config/database.php");
require_once("session.php");
$idfak=$_SESSION['id_fak'];

if($_SESSION['status']=="a2") {
  $q1 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where id_fak = $idfak");
  $r1 = mysqli_fetch_array($q1);
  $q2 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_aktif ='Aktif' && id_fak =$idfak");
  $r2 = mysqli_fetch_array($q2);
  $q3 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_aktif ='NIDK' && id_fak =$idfak");
  $r3 = mysqli_fetch_array($q3);
  $q4 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_aktif ='Pensiun' && id_fak =$idfak");
  $r4 = mysqli_fetch_array($q4);
  $q5 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_aktif ='MD' && id_fak =$idfak");
  $r5 = mysqli_fetch_array($q5);
  $q6 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_pegawai ='PNS' && id_fak =$idfak");
  $r6 = mysqli_fetch_array($q6);
  $q7 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_pegawai ='YPP' && id_fak =$idfak");
  $r7 = mysqli_fetch_array($q7);
} else {
//Status Dosen
$q1 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen");
$r1 = mysqli_fetch_array($q1);
$q2 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_aktif ='Aktif'");
$r2 = mysqli_fetch_array($q2);
$q3 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_aktif ='NIDK'");
$r3 = mysqli_fetch_array($q3);
$q4 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_aktif ='Pensiun'");
$r4 = mysqli_fetch_array($q4);
$q5 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_aktif ='MD'");
$r5 = mysqli_fetch_array($q5);
$q6 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_pegawai ='PNS'");
$r6 = mysqli_fetch_array($q6);
$q7 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen where status_pegawai ='YPP'");
$r7 = mysqli_fetch_array($q7);
}
//JENJANG
$t1 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE pt='Profesi'");
$td1 = mysqli_fetch_array($t1);
$t2 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE pt='SP1'");
$td2 = mysqli_fetch_array($t2);
$t3 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE pt='SP2'");
$td3 = mysqli_fetch_array($t3);
$t4 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE pt='D3'");
$td4 = mysqli_fetch_array($t4);
$t5 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE pt='D4'");
$td5 = mysqli_fetch_array($t5);
$t6 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE pt='S1'");
$td6 = mysqli_fetch_array($t6);
$t7 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE pt='S2'");
$td7 = mysqli_fetch_array($t7);
$t8 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE pt='S3'");
$td8 = mysqli_fetch_array($t8);
$t9 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE pt='-'");
$td9 = mysqli_fetch_array($t9);



$j1 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE jabatan=1");
$jd1 = mysqli_fetch_array($j1);
$j2 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE jabatan=2");
$jd2 = mysqli_fetch_array($j2);
$j3 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE jabatan=3");
$jd3 = mysqli_fetch_array($j3);
$j4 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE jabatan=4");
$jd4 = mysqli_fetch_array($j4);
$j5 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_dosen WHERE jabatan=5");
$jd5 = mysqli_fetch_array($j5);

//Tendik
$qe1 = mysqli_query($koneksi,"SELECT COUNT(*) FROM tb_mdo_tendik");
$te1 = mysqli_fetch_array($qe1);
 ?>
