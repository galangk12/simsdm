<?php
require_once("../../../config/database.php");
require_once("../../../config/databaseabsen.php");
require_once '../session.php';
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Rekap_absen_tendik.xls");
$nik = $_GET['nik'];
$queryne = "SELECT * FROM tb_mdo_tendik a JOIN tb_mda_fak b ON a.fak=b.id_fak WHERE nik='$nik'";
$dt1 = mysqli_query($koneksi,$queryne);
$data1 = mysqli_fetch_array($dt1);
?>
<style> .str{ mso-number-format:\@; } </style>
<h3>Rekap Absensi</h3>
<table>
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><?php echo $data1['nama_tendik'] ?></td>
</tr>
<tr>
    <td>Unit Kerja</td>
    <td>:</td>
    <td><?php echo $data1['nama_fak'] ?></td>
</tr>
<tr>
    <td>Jabatan</td></td>
    <td>:</td>
    <td><?php echo $data1['jabatan'] ?></td>
</tr>
</table>
<table border="1">
  <tr>
    <th>No</th>
    <th>Tanggal</th>
    <th>Absen Masuk</th>
    <th>Absen Pulang</th>
    <th>Status</th>

  </tr>
    <?php

      $query1 = "SELECT * FROM absen_tendik WHERE nik='$nik'";
      $dt = mysqli_query($conn, $query1);

        if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
             echo "<h6><center>Maaf Data Tidak Ada</center></h6>";
                  }
        else {

      $no = 1;
      while ($data = mysqli_fetch_assoc($dt))
      {

     ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo date("d-m-Y",strtotime($data['tanggal'])) ?></td>
    <td><?php echo date("H:i:s",strtotime($data['jam_masuk'])) ?></td>
    <td><?php if ($data['jam_pulang'] == null) {
        echo "-";
        }
        else {
            echo date("H:i:s",strtotime($data['jam_pulang']));
         } ?></td>
        <td><?php
        if ($data['jam_masuk'] > $akhirmasuk) {
            echo "-";
        }
        else {
            echo "-";
        }
        
    ?></td>


  </tr>
      <?php
      }
    }
       ?>
</table>
