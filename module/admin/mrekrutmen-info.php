<?php
require_once("../../config/databaserekrutmen.php");
require_once("session.php");
$nik = $_GET['nik'];
$query1 = "SELECT * FROM tb_pendaftar where nik = '$nik'";
$query2 = "SELECT * FROM tb_berkas where nik = '$nik'";
$dt = mysqli_query($conn, $query1);
$dt2 = mysqli_query($conn, $query2);
if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
   echo "<div class='alert alert-danger alert-dismissible'>
<button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
<h6><center>Maaf Tidak Ada Data</center></h6></div>";
        }
else {
$data = mysqli_fetch_array($dt);
$data2 = mysqli_fetch_array($dt2);
}
 ?>
 <div class="container-fluid">
<div class="card card-danger card-tabs" style="width:100%">
	<div class="card-header p-0 pt-1">
		<ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
			<li class="pt-2 px-3">
				<h3 class="card-title"></h3>
			</li>
			<li class="nav-item">
				<a class="nav-link active" id="custom-tabs-two-id-tab" data-toggle="pill" href="#custom-tabs-two-id" role="tab" aria-controls="custom-tabs-two-id" aria-selected="true">Info Detail</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="custom-tabs-two-j1-tab" data-toggle="pill" href="#custom-tabs-two-j1" role="tab" aria-controls="custom-tabs-two-j1" aria-selected="false">Info Pendidikan</a>
			</li>
      <li class="nav-item">
				<a class="nav-link" id="custom-tabs-two-j2-tab" data-toggle="pill" href="#custom-tabs-two-j2" role="tab" aria-controls="custom-tabs-two-j2" aria-selected="false">Info Berkas</a>
			</li>
		</ul>
	</div>
  <div class="card-body">
    <div class="tab-content" id="custom-tabs-two-tabContent">
      <div class="tab-pane fade show active" id="custom-tabs-two-id" role="tabpanel" aria-labelledby="custom-tabs-two-id-tab">
        <div class="table-responsive">
        <table  class="table" border="0">
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $data['nik'] ?></td>
          </tr>
          <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $data['nama'] ?></td>
          </tr>
          <tr>
            <td>Tempat Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $data['tmp_lahir'] ?>, <?php echo date("d/m/Y", strtotime($data['tgl_lahir'])) ?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $data['alamat'] ?></td>
          </tr>
          <tr>
            <td>Telp / WA</td>
            <td>:</td>
            <td><?php echo $data['nohp'] ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $data['email'] ?></td>
          </tr>
          <tr>
            <td>Bidang Keilmuan / Keahlian</td>
            <td>:</td>
            <td><?php echo $data['bidang'] ?></td>
          </tr>
        </table>
      </div>
      </div>
      <div class="tab-pane fade show" id="custom-tabs-two-j1" role="tabpanel" aria-labelledby="custom-tabs-two-j1-tab">
      <div class="table-responsive">
        <table  class="table" border="0">
        <tr>
            <td>Perguruan Tinggi (S1)</td>
            <td>:</td>
            <td><?php echo $data['pt1'] ?></td>
          </tr>
          <tr>
            <td>Program Studi (S1)</td>
            <td>:</td>
            <td><?php echo $data['pd1'] ?></td>
          </tr>
          <tr>
            <td>Tahun Lulus (S1)</td>
            <td>:</td>
            <td><?php echo $data['tl1'] ?></td>
          </tr>
          <tr>
            <td>Perguruan Tinggi (S2)</td>
            <td>:</td>
            <td><?php echo $data['pt2'] ?></td>
          </tr>
          <tr>
            <td>Program Studi (S2)</td>
            <td>:</td>
            <td><?php echo $data['pd2'] ?></td>
          </tr>
          <tr>
            <td>Tahun Lulus (S2)</td>
            <td>:</td>
            <td><?php echo $data['tl2'] ?></td>
          </tr>
          <tr>
            <td>Perguruan Tinggi (S3)</td>
            <td>:</td>
            <td><?php echo $data['pt3'] ?></td>
          </tr>
          <tr>
            <td>Program Studi (S3)</td>
            <td>:</td>
            <td><?php echo $data['pd3'] ?></td>
          </tr>
          <tr>
            <td>Tahun Lulus (S3)</td>
            <td>:</td>
            <td><?php echo $data['tl3'] ?></td>
          </tr>

        </table>
      </div>
      </div>
      <div class="tab-pane fade show" id="custom-tabs-two-j2" role="tabpanel" aria-labelledby="custom-tabs-two-j2-tab">
      <div class="table-responsive">
        <table  class="table" border="0">
        <tr>
            <td>Surat Lamaran</td>
            <td>:</td>
            <td>
              <?php
              if ($data2['bsl'] == null) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[bsl]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>KTP</td>
            <td>:</td>
            <td>
              <?php
              if ($data2['bktp'] == null ) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[bktp]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>Curriculum Vitae (CV)</td>
            <td>:</td>
            <td>
              <?php
              if ($data2['bcv'] == null) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[bcv]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>Ijazah S1</td>
            <td>:</td>
            <td>
              <?php
              if ($data2['bs1'] == null) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[bs1]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>Transkrip Nilai S1</td>
            <td>:</td>
            <td>
              <?php
              if ($data2['btn1'] == null ) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[btn1]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>Ijazah S2</td>
            <td>:</td>
            <td>
              <?php
              if ($data2['bs2'] == null ) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[bs2]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>Transkrip Nilai S2</td>
            <td>:</td>
            <td>
              <?php
              if ($data2['btn2'] == null ) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[btn2]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>Ijazah S3</td>
            <td>:</td>
            <td>
              <?php
              if ($data2['bs3'] == null) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[bs3]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>Transkrip Nilai S3</td>
            <td>:</td>
            <td>
              <?php
              if ($data2['btn3'] == null ) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[btn3]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>Surat Keterangan Sehat Dari Dokter </td>
            <td>:</td>
            <td>
              <?php
              if ($data2['bsksd'] == null ) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[bsksd]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>SKCK</td>
            <td>:</td>
            <td>
              <?php
              if ($data2['bskck'] == null ) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[bskck]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>Pas Foto 4x6 </td>
            <td>:</td>
            <td>
              <?php
              if ($data2['bpf'] == null ) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[bpf]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
          <tr>
            <td>Piagam Prestasi Yang Mendukung </td>
            <td>:</td>
            <td>
              <?php
              if ($data2['bpp']== null ) {
              }else {
                echo "<a href='../../rekrutmen/assets/berkas/$data2[bpp]' class='btn btn-primary' target='_blank'>Unduh Berkas</a>";
              } 
                 ?>
            </td>
          </tr>
        </table>
      </div>
      </div>

    </div>
  </div>
</div>
 </div>

