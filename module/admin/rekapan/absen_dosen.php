<?php
require_once("../../../config/database.php");
require_once("../../../config/databaseabsen.php");
require_once '../session.php';
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Rekap_absen_dosen.xls");
$nidn = $_GET['nidn'];
$queryne = "SELECT * FROM tb_mdo_dosen a JOIN tb_mda_fak b ON a.id_fak=b.id_fak  WHERE a.nidn='$nidn'";
$dt1 = mysqli_query($koneksi,$queryne);
$data1 = mysqli_fetch_array($dt1);
?>
<style> .str{ mso-number-format:\@; } </style>
<h3>Rekap Absensi</h3>
<table>
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><?php echo $data1['nama_dosen'] ?></td>
</tr>
<tr>
    <td>Unit Kerja</td>
    <td>:</td>
    <td><?php echo $data1['nama_fak'] ?></td>
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

      $query1 = "SELECT * FROM absen WHERE nidn='$nidn'";
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
