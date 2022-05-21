<?php
require_once("../../../config/database.php");
require_once ("../session.php");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Dosen.xls");
?>
<style> .str{ mso-number-format:\@; } </style>
<h1>Rekap Dosen</h1>
<table border="1">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIDN</th>
    <th>NIP</th>
    <th>No Serdik</th>
    <th>JK</th>
    <th>TLL</th>
    <th>Alamat</th>
    <th>PT</th>
    <th>Status Pegawai</th>
    <th>Status Aktif</th>
    <th>TMT</th>
    <th>Unit Kerja</th>
    <th>Email</th>
    <th>No HP</th>

  </tr>
    <?php
    if($_SESSION['status']=="a2") {
      $idfak = $_SESSION['id_fak'];
      $query1 = "SELECT * FROM tb_mdo_dosen a JOIN tb_mda_fak b ON a.id_fak = b.id_fak where a.id_fak = $idfak";
      $dt = mysqli_query($koneksi, $query1);
    }
    else {
      $query1 = "SELECT * FROM tb_mdo_dosen a JOIN tb_mda_fak b ON a.id_fak = b.id_fak";
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
    <td ><?php echo $data['nama_dosen'];?></td>
    <td class="str"><?php echo $data['nidn'] ?></td>
    <td class="str"><?php echo $data['nip'] ?></td>
    <td class="str"><?php echo $data['noserdik'] ?></td>
    <td ><?php echo $data['jk'] ?></td>
    <td ><?php echo $data['tmp_lahir'] ?>, <?php echo date("d-m-Y", strtotime($data['tgl_lahir'])) ?></td>
    <td ><?php echo $data['alamat'] ?></td>
    <td ><?php echo $data['pt'] ?></td>
    <td ><?php echo $data['status_pegawai'] ?></td>
    <td ><?php
      if($data['status_aktif']=='Aktif') {
        echo 'Aktif';
      }
      elseif($data['status_aktif']=='Pensiun') {
        echo 'Pensiun';
      }
      elseif($data['status_aktif']=='NIDK') {
        echo 'NIDK';
      }
      elseif($data['status_aktif']=='MD') {
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
