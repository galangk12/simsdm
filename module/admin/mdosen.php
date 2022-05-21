<?php
error_reporting (0);
require_once("session.php");
require_once("../../config/database.php");
//MENGAMBIL DATA GOLONGAN//
$idfak = $_SESSION['id_fak'];

$query1 = "SELECT * FROM tb_mda_fak";
  $rs1 = mysqli_query($koneksi, $query1);
  $fak = "";
  while ($r1 = mysqli_fetch_array($rs1))
  {
    $fak .= "<option value='$r1[id_fak]'>$r1[nama_fak]</option>
"; }
?>
<div class="container-fluid">
  <?php if($_SESSION['status']=="a2") {
    echo " <td><a style='width:150px;padding:5px;' class='btn btn-success' href='rekapan/rekapan_excel'><i class='fa fa-book'></i> Export Excel</a></td>
    <td><a style='width:150px;padding:5px;' class='btn btn-danger' href='rekapan/rekapan_pdf' target='_blank'><i class='fa fa-book'></i> Export PDF</a></td> ";
  }
  else {
    echo "
    <div style='overflow-x:auto;'>
    <table >
    <td><a style='width:150px;padding:5px;' class='btn btn-primary'href='index?page=mdosen_add'><i class='fa fa-plus'></i> Tambah Data</a></td>
    <td><a style='width:150px;padding:5px;' class='btn btn-secondary' href='index?page=mdosen_import'><i class='fa fa-book'></i> Import Excel</a></td>
    <td><a style='width:150px;padding:5px;' class='btn btn-success' href='rekapan/rekapan_dosen'><i class='fa fa-book'></i> Export Excel</a></td>
    <td><a style='width:150px;padding:5px;' class='btn btn-danger' href='rekapan/pdf_dosen' target='_blank'><i class='fa fa-book'></i> Export PDF</a></td>
    </table>
  </div>";
  

  }
  ?>
  <br><br>
<div class="row">
  <!-- <div class="col-2">
  <select class="form-control" name="Search" required>
      <option value="#">Pilih Status Aktif</option>
      <option value="#">Aktif</option>
      <option value="#">Pensiun</option>
      <option value="#">NIDK</option>
  </select>
  </div>
  <div class="col-2">
  <select class="form-control" name="Search" required>
      <option value="#">Pilih Status Aktif</option>
      <option value="#">Aktif</option>
      <option value="#">Pensiun</option>
      <option value="#">NIDK</option>
  </select>
  </div> -->
  
</div>
<div class="table-responsive">
<table id="tabel-data1"  class="table table-bordered table-striped">
<thead >
<tr>
  <th>No</th>
  <th>Nama Dosen</th>
  <th>NIDN</th>
  <th>Unit Kerja/Fakultas</th>
  <th>Status</th>
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
           echo "<br><div class='alert alert-danger alert-dismissible'>
        <button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h6><center>Maaf Data Tidak Ada</center></h6></div>";
                }
      else {

    $no = 1;
    while ($data = mysqli_fetch_assoc($dt))
    {

   ?>
<tr>
  <td><?php echo $no++; ?></td>
  <td>
    <?php

      echo "<a href='index?page=mdosen_info&id=$data[nidn]'> $data[nama_dosen]</a>";
     ?>
  </td>
  <td><?php echo $data['nidn'] ?></td>
  <td><?php echo $data['nama_fak'] ?></td>
  <td><?php
    if($data['status_aktif']=='Aktif') {
      echo '<span class="badge badge-success">Aktif</span>';
    }
    elseif($data['status_aktif']=='Pensiun') {
      echo '<span class="badge badge-info">Pensiun</span>';
    }
    elseif($data['status_aktif']=='NIDK') {
      echo '<span class="badge badge-primary">NIDK</span>';
    }
    elseif($data['status_aktif']=='MD') {
      echo '<span class="badge badge-danger">Meninggal</span>';
    }
   ?></td>


</tr>
    <?php
    }
  }
     ?>
</tbody>
</table>
</div>
</div>
