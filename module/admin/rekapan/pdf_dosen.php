<?php
require_once("../../../config/database.php");
require_once("../session.php");
$idfak = $_SESSION['id_fak'];
 ?>
 <title>Rekapan Data Dosen</title>
 <style>
 * {
   font-family:arial;
 }
 table, th, td {
   font-size:14;
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
    <td rowspan='6'><img src="../../../dist/img/logo.jpg" width='90px' height='105px' /></td>
  </tr>
  <tr>
    <td style="font-size:20;">UNIVERSITAS 17 AGUSTUS 1945 (UNTAG) SEMARANG</td>
  </tr>
  <tr>
    <td style="font-size:20;">TERAKREDITASI "A"</td>
  </tr>
  <tr>
    <td style="font-size:17;">Jl. Pawiyatan Luhur, Bendan Dhuwur, Semarang, Kode Pos 50233 Telp.(024) 8441771</td>
  </tr>
  <tr>
    <td style="font-size:17;">Faks.(024) 8441772 Website:www.untagsmg.ac.id</td>
  </tr>
  <tr>
    <td style="font-size:17;">Email:untag@untagsmg.ac.id</td>
  </tr><br>
  <tr style="border: solid 3px #000;">
  </tr>
</table>
<h3>DATA DOSEN
<?php
  if($_SESSION['status']=="a2") {
    $qq = mysqli_query($koneksi,"SELECT * FROM tb_mda_fak where id_fak = $idfak");
    $qs = mysqli_fetch_array($qq);
    $nama = strtoupper($qs['nama_fak']);
    echo "FAKULTAS $nama";
  }
  else {
    "";
  }
 ?>
   TAHUN <?php echo date("Y"); ?></h3>
<table  style="width:95%;text-align:left;" class="table">
  <thead >
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
  </thead>
  <tbody>
    <?php
    if($_SESSION['status']=="a2") {
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
    <td class="kiri"><?php echo $data['nama_dosen'];?></td>
    <td class="kiri"><?php echo $data['nidn'] ?></td>
    <td class="kiri"><?php echo $data['nip'] ?></td>
    <td class="kiri"><?php echo $data['noserdik'] ?></td>
    <td class="kiri"><?php echo $data['jk'] ?></td>
    <td class="kiri"><?php echo $data['tmp_lahir'] ?>, <?php echo date("d-m-Y", strtotime($data['tgl_lahir'])) ?></td>
    <td class="kiri"><?php echo $data['alamat'] ?></td>
    <td class="kiri"><?php echo $data['pt'] ?></td>
    <td class="kiri"><?php echo $data['status_pegawai'] ?></td>
    <td class="kiri"><?php
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
     <td class="kiri"><?php echo $data['tmtdt'] ?></td>
     <td class="kiri"><?php echo $data['nama_fak'] ?></td>
     <td class="kiri"><?php echo $data['email'] ?></td>
     <td class="kiri"><?php echo $data['nohp'] ?></td>


  </tr>
      <?php
      }
    }
       ?>
  </tbody>
</table>
</body>
<br>