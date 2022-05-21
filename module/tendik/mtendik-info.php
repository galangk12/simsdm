<?php
require_once("../../config/database.php");
require_once("session.php");
$username = $_SESSION['username'];
$query1 = "SELECT * FROM tb_mdo_tendik a
JOIN tb_mda_fak b ON a.fak = b.id_fak where nohp = '$username'";
$dt = mysqli_query($koneksi, $query1);
if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
   echo "<div class='alert alert-danger alert-dismissible'>
<button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
<h6><center>Maaf Tidak Ada Data</center></h6></div>";
        }
else {
$data = mysqli_fetch_array($dt);
}
 ?>
 <div class="container-fluid">

<div class="card-title mb-4">
    <div class="d-flex justify-content-start">
        <div class="image-container">
            <img src="../../module/user.png" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
        </div>
        <div class="userData ml-3">
            <h3 class="d-block" style="font-size: 1.5rem; font-weight: bold">
              <?php

                echo ' '.$data['nama_tendik'].' ';
               ?>

            </h3>
            <h6 class="d-block">NIK   : <?php echo $data['nik'] ?></h6>
            <h6 class="d-block">NRP   : <?php echo $data['nrp'] ?></h6>
            <h6 class="d-block">Status : <?php
              if($data['status']=='Aktif') {
                echo '<span class="badge badge-success">Aktif</span>';
              }
              elseif($data['status']=='Pensiun') {
                echo '<span class="badge badge-info">Pensiun</span>';
              }
              elseif($data['status']=='MD') {
                echo '<span class="badge badge-danger">Meninggal</span>';
              }
             ?> </h6>
        </div>


  </td>

</div>
</div>
<div class="card card-danger card-tabs" style="width:100%">
	<div class="card-header p-0 pt-1">
		<ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
			<li class="pt-2 px-3">
				<h3 class="card-title"></h3>
			</li>
			<li class="nav-item">
				<a class="nav-link active" id="custom-tabs-two-id-tab" data-toggle="pill" href="#custom-tabs-two-id" role="tab" aria-controls="custom-tabs-two-id" aria-selected="true">Informasi Detail</a>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link" id="custom-tabs-two-j1-tab" data-toggle="pill" href="#custom-tabs-two-j1" role="tab" aria-controls="custom-tabs-two-j1" aria-selected="false">Pendidikan</a>
			</li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-two-j2-tab" data-toggle="pill" href="#custom-tabs-two-j2" role="tab" aria-controls="custom-tabs-two-j2" aria-selected="false">Jabatan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-two-j7-tab" data-toggle="pill" href="#custom-tabs-two-j7" role="tab" aria-controls="custom-tabs-two-j7" aria-selected="false">Dokumen Pendukung</a>
      </li> -->
		</ul>
	</div>
  
  <div class="card-body">
    <div class="tab-content" id="custom-tabs-two-tabContent">
      <div class="tab-pane fade show active" id="custom-tabs-two-id" role="tabpanel" aria-labelledby="custom-tabs-two-id-tab">
        <div class="table-responsive">
        <table  class="table" border="0">
          <tr>
            <td>Nama Tendik</td>
            <td>:</td>
            <td><?php echo $data['nama_tendik'] ?></td>
          </tr>
          <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $data['nik'] ?></td>
          </tr>
          <tr>
            <td>NRP</td>
            <td>:</td>
            <td><?php echo $data['nrp'] ?></td>
          </tr>
          <tr>
          <tr>
            <td>Nomor SK</td>
            <td>:</td>
            <td><?php echo $data['nosk'] ?></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>  <?php if($data['jk'] =='L') {
                echo "Laki-Laki";
              }
              else {
                echo "Perempuan";
              }  ?></td>
          </tr>
          <tr>
            <td>Tempat Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $data['tmp_lahir'] ?>, <?php echo date("d-m-Y", strtotime($data['tgl_lahir'])) ?></td>
          </tr>
          <tr>
            <td>Umur</td>
            <td>:</td>
            <td>
            <?php
                function hitung_umur($tanggal_lahir){
                  $birthDate = new DateTime($tanggal_lahir);
                  $today = new DateTime("today");
                  if ($birthDate > $today) { 
                      exit("0 tahun 0 bulan 0 hari");
                  }
                  $y = $today->diff($birthDate)->y;
                  $m = $today->diff($birthDate)->m;
                  $d = $today->diff($birthDate)->d;
                  return $y." tahun ".$m." bulan ".$d." hari";
                }

                echo hitung_umur($data['tgl_lahir']);
            ?>

            </td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $data['alamat'] ?></td>
          </tr>
          <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><?php echo $data['pt'] ?></td>
          </tr>
          <tr>
            <td>Pangkat</td>
            <td>:</td>
            <td><?php
              $pk =  $data['pangkat'];
              $pk1 = mysqli_query($koneksi, "SELECT * FROM tb_add_pk WHERE id_pkt = '$pk' ");
              $pk2 = mysqli_fetch_array($pk1);
              echo $pk2['nama_pkt'];?>
              </td>
          </tr>
            <tr>
            <td>Status Aktifitas (Aktif/Pensiun/MD)</td>
            <td>:</td>
            <td><?php
              if($data['status']=='Aktif') {
                echo '<span class="badge badge-success">Aktif</span>';
              }
              elseif($data['status_aktif']=='Pensiun') {
                echo '<span class="badge badge-info">Pensiun</span>';
              }
              elseif($data['status_aktif']=='MD') {
                echo '<span class="badge badge-danger">Meninggal</span>';
              }
             ?></td>
          </tr>
          <tr>
            <td>TMT Tendik</td>
            <td>:</td>
            <td><?php echo date("d-m-Y", strtotime($data['tmtdt'])) ?></td>
          </tr>
          <tr>
            <td>Unit Kerja / Fakultas</td>
            <td>:</td>
            <td><?php echo $data['nama_fak'] ?></td>
          </tr>
          <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?php echo $data['jabatan'] ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $data['email'] ?></td>
          </tr>
          <tr>
            <td>No Telp/HP</td>
            <td>:</td>
            <td><?php echo $data['nohp'] ?></td>
          </tr>

        </table>
      </div>
      </div>


      <div class="tab-pane fade show" id="custom-tabs-two-j1" role="tabpanel" aria-labelledby="custom-tabs-two-j1-tab">
        <a style="width:150px;"  class="btn btn-primary btn-block" href="index?page=mtendik_pendidikan_add&id=<?php echo $data['nik'] ?>"><i class="fa fa-plus"></i>Tambah Data</a><br>
        <div class="table-responsive">
      <table class="table table-hover table-striped text-nowrap">
      <thead >
      <tr>
        <th>No</th>
        <th>Jenjang</th>
        <th>Prodi</th>
        <th>Akreditasi</th>
        <th>Perguruan Tinggi</th>
        <th>Tanggal Ijazah</th>
        <th>Scan Ijazah</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
        <?php
          $nidn = $_GET['id'];
          $query1 = "SELECT * FROM tb_mdo_pendidikan WHERE nik = $nidn";
              $dt = mysqli_query($koneksi, $query1);
            if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
                 echo "<div class='alert alert-danger alert-dismissible'>
              <button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h6><center>Maaf Tidak Ada Data</center></h6></div>";
                      }
            else {

          $no = 1;
          while ($data1 = mysqli_fetch_array($dt))
          {

         ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data1['jenjang'] ?></td>
        <td><?php echo $data1['prodi'] ?></td>
        <td><?php echo $data1['akreditasi'] ?></td>
        <td><?php echo $data1['pt'] ?></td>
        <td><?php echo date("d-m-Y", strtotime($data1['tgl_ijazah'])) ?></td>
        <td><a href="../../berkas/pendidikan/<?php echo $data1['scan_ijazah'] ?>">Unduh Berkas</a></td>
        <td>
          <a class="btn btn-danger" href="controller?page=hapus_pendidikan&id=<?php echo $data1['id_pd'] ?>">
            <i class="fa fa-trash"></i></a>
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



      <div class="tab-pane fade show" id="custom-tabs-two-j7" role="tabpanel" aria-labelledby="custom-tabs-two-j7-tab">
        <?php
        $nidnt = $_GET['id'];
        $btnt = mysqli_query($koneksi,"SELECT * FROM tb_mdo_dp WHERE nik = $nidnt");
        if (mysqli_num_rows($btnt) == 0)  {
          echo "<a style='width:150px;' class='btn btn-primary btn-block' href='index?page=mtendik_dp_add&id=$data[nik]'><i class='fa fa-plus'></i>Tambah Data</a><br>";
        }
        else {
          echo "";
        };
         ?>
        <div class="table-responsive">
        <table class="table table-hover table-striped text-nowrap">
        <thead>
        <tr>
          <th>No</th>
          <th>KTP</th>
          <th>Kartu Pegawai</th>
          <th>NPWP</th>
          <th>Buku Rekening</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          <?php

          $nidn = $_GET['id'];
          $query1 = "SELECT * FROM tb_mdo_dp WHERE nik = $nidn";
                $dt = mysqli_query($koneksi, $query1);
              if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
                   echo "<div class='alert alert-danger alert-dismissible'>
                <button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><center>Maaf Tidak Ada Data</center></h6></div>";
                        }
              else {

            $no = 1;
            while ($data7 = mysqli_fetch_array($dt))
            {

           ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><a href="../../berkas/dp/<?php echo $data7['ktp'] ?>">Unduh Berkas</a></td>
          <td><a href="../../berkas/dp/<?php echo $data7['karpeg'] ?>">Unduh Berkas</a></td>
          <td><a href="../../berkas/dp/<?php echo $data7['npwp'] ?>">Unduh Berkas</a></td>
          <td><a href="../../berkas/dp/<?php echo $data7['br'] ?>">Unduh Berkas</a></td>
          <td>
            <a class="btn btn-danger" href="controller?page=hapus_dp&id=<?php echo $data7['id_dp'] ?>">
              <i class="fa fa-trash"></i></a>
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
    </div>
  </div>
</div>
</div>
