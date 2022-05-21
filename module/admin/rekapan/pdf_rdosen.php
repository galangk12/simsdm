<?php
require_once("../../../config/databaserekrutmen.php");
require_once("../session.php");
 ?>
 <title>Rekapan Daftar Pelamar Dosen Untag Semarang</title>
 <style>
 * {
   font-family:arial;
 }
 table, th, td {
   font-size:11;
   text-align: center;
   vertical-align: top;
 }
   .kiri {
     text-align:left;

   }
 </style>
 <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
 <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
 <center>
   <body onload="window.print()">
     
<table style="width:75%;font-weight:bold;" border='0'>
  <tr>
    <td rowspan='6'><img src="../../../dist/img/logo.jpg" width='90px' /></td>
  </tr>
  <tr>
    <td style="font-size:16;">UNIVERSITAS 17 AGUSTUS 1945 (UNTAG) SEMARANG</td>
  </tr>
  <tr>
    <td style="font-size:16;">TERAKREDITASI "A"</td>
  </tr>
  <tr>
    <td style="font-size:14;">Jl. Pawiyatan Luhur, Bendan Dhuwur, Semarang, Kode Pos 50233 Telp.(024) 8441771</td>
  </tr>
  <tr>
    <td style="font-size:14;">Faks.(024) 8441772 Website:www.untagsmg.ac.id</td>
  </tr>
  <tr>
    <td style="font-size:14;">Email:untag@untagsmg.ac.id</td>
  </tr><br>
  <tr style="border: solid 3px #000;">
  </tr><br>
</table><br>
<h5>DAFTAR PELAMAR DOSEN UNTAG SEMARANG</h5>
<p>PER <?php echo date("d F Y"); ?></p><br>
<table  style="width:95%;text-align:left;" border='1'>
  <thead >
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIK</th>
    <th>TTL</th>
    <th>Alamat</th>
    <th>Telp.</th>
    <th>Email</th>
    <th>PT S1</th>
    <th>Prodi S1</th>
    <th>Lulus S1</th>
    <th>PT S2</th>
    <th>Prodi S2</th>
    <th>Lulus S2</th>
    <th>PT S3</th>
    <th>Prodi S3</th>
    <th>Lulus S3</th>
    <th>Bidang Keilmuan</th>
    <th>Tgl Daftar</th>

  </tr>
  </thead>
  <tbody>
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
    <td class="kiri"><?php echo $data['nama'];?></td>
    <td class="kiri"><?php echo $data['nik'] ?></td>
    <td class="kiri"><?php echo $data['tmp_lahir'] ?>, <?php echo date("d-m-Y", strtotime($data['tgl_lahir'])) ?></td>
    <td class="kiri"><?php echo $data['alamat'] ?></td>
    <td class="kiri"><?php echo $data['nohp'] ?></td>
    <td class="kiri"><?php echo $data['email'] ?></td>
    <td class="kiri"><?php echo $data['pt1'] ?></td>
    <td class="kiri"><?php echo $data['pd1'] ?></td>
    <td class="kiri"><?php echo $data['tl1'] ?></td>
    <td class="kiri"><?php echo $data['pt2'] ?></td>
    <td class="kiri"><?php echo $data['pd2'] ?></td>
    <td class="kiri"><?php echo $data['tl2'] ?></td>
    <td class="kiri"><?php echo $data['pt3'] ?></td>
    <td class="kiri"><?php echo $data['pd3'] ?></td>
    <td class="kiri"><?php echo $data['tl3'] ?></td>
    <td class="kiri"><?php echo $data['bidang'] ?></td>
    <td class="kiri"><?php echo $data['tgl_daftar'] ?></td>
    

  </tr>
      <?php
      }
    }
       ?>
  </tbody>
</table>
</body>
<br>