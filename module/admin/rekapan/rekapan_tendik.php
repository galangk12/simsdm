<?php
require_once("../../../config/database.php");
require_once ("../session.php");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Tendik.xls");
?>
<style> .str{ mso-number-format:\@; } </style>
<h1>Rekap Tendik</h1>
<table border="1">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>NRP</th>
    <th>NIK</th>
    <th>Nomor SK</th>
    <th>JK</th>
    <th>TLL</th>
    <th>Alamat</th>
    <th>PT</th>
    <th>Status Aktif</th>
    <th>TMT</th>
    <th>Unit Kerja</th>
    <th>Email</th>
    <th>No HP</th>

  </tr>
    <?php
    if($_SESSION['status']=="a2") {
      $idfak = $_SESSION['id_fak'];
      $query1 = "SELECT * FROM tb_mdo_tendik a JOIN tb_mda_fak b ON a.id_fak = b.id_fak where a.id_fak = $idfak";
      $dt = mysqli_query($koneksi, $query1);
    }
    else {
      $query1 = "SELECT * FROM tb_mdo_tendik a JOIN tb_mda_fak b ON a.fak = b.id_fak";
      $dt = mysqli_query($koneksi, $query1);
    }

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
    <td ><?php echo $data['nama_tendik'];?></td>
    <td class="str"><?php echo $data['nrp'] ?></td>
    <td class="str"><?php echo $data['nik'] ?></td>
    <td class="str"><?php echo $data['nosk'] ?></td>
    <td ><?php echo $data['jk'] ?></td>
    <td ><?php echo $data['tmp_lahir'] ?>, <?php echo date("d-m-Y", strtotime($data['tgl_lahir'])) ?></td>
    <td ><?php echo $data['alamat'] ?></td>
    <td ><?php echo $data['pt'] ?></td>
    <td ><?php
      if($data['status']=='Aktif') {
        echo 'Aktif';
      }
      elseif($data['status']=='Pensiun') {
        echo 'Pensiun';
      }
      elseif($data['statusf']=='NIDK') {
        echo 'NIDK';
      }
      elseif($data['status']=='MD') {
        echo 'Meninggal';
      }
     ?></td>
     <td ><?php echo $data['tmtdt'] ?></td>
     <td ><?php echo $data['nama_fak'] ?></td>
     <td ><?php echo $data['email'] ?></td>
     <td class="str"><?php echo $data['nohp'] ?></td>


  </tr>
      <?php
      }
    }
       ?>
</table>
