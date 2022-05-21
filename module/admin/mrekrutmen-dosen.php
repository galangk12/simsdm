<?php
error_reporting (0);
require_once("session.php");
require_once("../../config/databaserekrutmen.php");
?>
<div class="container-fluid">
<div style='overflow-x:auto;'>
    <table >
    <td><a style='width:150px;padding:5px;' class='btn btn-success' href='rekapan/rekapan_rdosen'><i class='fa fa-book'></i> Export Excel</a></td>
    <td><a style='width:150px;padding:5px;' class='btn btn-danger' href='rekapan/pdf_rdosen.php' target='_blank'><i class='fa fa-book'></i> Export PDF</a></td>
    </table>
  </div>
<div class="table-responsive">
<table id="tabel-data1"  class="table table-bordered table-striped">
<thead >
<tr>
  <th>No</th>
  <th>NIK</th>
  <th>Nama</th>
  <th>TTL</th>
  <th>WA</th>
  <th>Bidang Keilmuan</th>
  <th>Status</th>
</tr>
</thead>
<tbody>
  <?php
    $query = "SELECT * FROM tb_pendaftar WHERE jalur='DOSEN'";
    $dt = mysqli_query($conn, $query);
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
  <td><?php echo $data['nik'] ?></td>
  <td><?php echo $data['nama'] ?></td>
  <td><?php echo $data['tmp_lahir'] ?>, <?php echo date("d/m/Y", strtotime($data['tgl_lahir'])) ?></td>
  <td><?php echo $data['nohp'] ?></td>
  <td><?php echo $data['bidang'] ?></td>
  <td colspan="2">
    <a href="index?page=rktinfo&nik=<?php echo $data['nik'] ?>" type="button" class="btn btn-success btn btn-sm" name="detail"><i class="fa fa-info-circle"></i></a>
    <a href="controller?page=delrek&nik=<?php echo $data['nik'] ?>" type="button" class="btn btn-danger btn btn-sm" onclick="return confirm('Apakah Yakin Ingin Menghapus Pelamar?')" name="hapus"><i class="fa fa-trash"></i></a>
  </td>


</tr>
    <?php
    }
  }
     ?>
</tbody>
</table>
</div>
</div>
