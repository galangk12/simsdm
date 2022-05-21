<?php
require_once("../../../config/databaserekrutmen.php");
require_once '../session.php';
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Rekrutmen_Dosen.xls");
?>
<style> .str{ mso-number-format:\@; } </style>
<table border="1">
  <tr>
    <th>No</th>
    <th>NIK</th>
    <th>Nama</th>
    <th>TTL</th>
    <th>Alamat</th>
    <th>Telp/WA</th>
    <th>Email</th>
    <th>Perguruan Tinggi S1</th>
    <th>Prodi S1</th>
    <th>Tahun Lulus S1</th>
    <th>Perguruan Tinggi S2</th>
    <th>Prodi S2</th>
    <th>Tahun Lulus S2</th>
    <th>Perguruan Tinggi S3</th>
    <th>Prodi S3</th>
    <th>Tahun Lulus S3</th>
    <th>Bidang Keilmuan</th>
    <th>Tgl Daftar</th>

  </tr>
    <?php

      $query1 = "SELECT * FROM tb_pendaftar WHERE jalur='DOSEN'";
      $dt = mysqli_query($conn, $query1);

        if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
             echo "<div class='alert alert-danger alert-dismissible'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <h6><center>Maaf Data Tidak Ada</center></h6></div>";
                  }
        else {

      $no = 1;
      while ($data = mysqli_fetch_assoc($dt))
      {

     ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td class="str"><?php echo $data['nik'] ?></td>
    <td ><?php echo $data['nama'];?></td>
    <td ><?php echo $data['tmp_lahir'] ?>, <?php echo date("d-m-Y", strtotime($data['tgl_lahir'])) ?></td>
    <td ><?php echo $data['alamat'] ?></td>
    <td class="str"><?php echo $data['nohp'] ?></td>
    <td><?php echo $data['email'] ?></td>
    <td ><?php echo $data['pt1'] ?></td>
    <td ><?php echo $data['pd1'] ?></td>
    <td ><?php echo $data['tl1'] ?></td>
    <td ><?php echo $data['pt2'] ?></td>
    <td ><?php echo $data['pd2'] ?></td>
    <td ><?php echo $data['tl2'] ?></td>
    <td ><?php echo $data['pt3'] ?></td>
    <td ><?php echo $data['pd3'] ?></td>
    <td ><?php echo $data['tl3'] ?></td>
    <td ><?php echo $data['bidang'] ?></td>
    <td ><?php echo $data['tgl_daftar'] ?></td>


  </tr>
      <?php
      }
    }
       ?>
</table>
