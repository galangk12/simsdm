<?php
require_once("session.php");
require_once("../../config/database.php");
$nidn = $_SESSION['nidn'];
$query1 = "SELECT * FROM tb_mdo_dosen a
JOIN tb_mda_fak b ON a.id_fak = b.id_fak where nidn = '$nidn'";
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
   <div class="alert alert-success alert-dismissible">
 		<button  class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 		<h5><i class="icon fas fa-info"></i> Welcome!</h5>
 		 Selamat Datang <?php
      $nidn = $_SESSION['nidn'];
      $nm = mysqli_query($koneksi,"SELECT * FROM tb_mdo_dosen WHERE nidn = '$nidn'");
      $dt = mysqli_fetch_array($nm);
      echo $dt['nama_dosen']; ?> Di SIM SDM Universitas 17 Agustus 1945 (Untag) Semarang.</div>
    <?php
            $nidn = $_SESSION['nidn'];
            $nm = mysqli_query($koneksi,"SELECT * FROM tb_mdo_dosen WHERE nidn = '$nidn'");
            $dt = mysqli_fetch_array($nm);
            function hitung_pensiun($tanggal_lahir){
              $birthDate = new DateTime($tanggal_lahir);
              $today = new DateTime("today");
              if ($birthDate > $today) { 
                  exit("0 tahun 0 bulan 0 hari");
              }
              $y = $today->diff($birthDate)->y;
              $m = $today->diff($birthDate)->m;
              $d = $today->diff($birthDate)->d;
              return $y;
            }
            $hitung = hitung_pensiun($dt['tgl_lahir']);
            if ($hitung < 63) {

            }  
            elseif ($hitung < 65) {
                echo " <div class='alert alert-danger'>
                <button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               <h5><i class='icon fas fa-info'></i> Perhatian!</h5>
                Anda Akan Memasuki Masa Pensiun!
                </div>";
              }
              else {
                echo "<div class='alert alert-danger '>
                <button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               <h5><i class='icon fas fa-info'></i> Perhatian!</h5>
               Maaf Anda Telah Memasuki Masa Pensiun!
                </div>";
              };
    ?>



<div class="card-title mb-4">
    <div class="d-flex justify-content-start">
        <div class="image-container">
            <img src="../../module/user.png" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
        </div>
        <div class="userData ml-3">
            <h3 class="d-block" style="font-size: 1.5rem; font-weight: bold">
              <?php

                echo ' '.$data['nama_dosen'].' ';
               ?>

            </h3>
            <h6 class="d-block">NIDN   : <?php echo $data['nidn'] ?></h6>
            <h6 class="d-block">Status : <?php
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
             ?> </h6>
        </div>


  </td>

</div><br>
 
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
			<li class="nav-item">
				<a class="nav-link" id="custom-tabs-two-j1-tab" data-toggle="pill" href="#custom-tabs-two-j1" role="tab" aria-controls="custom-tabs-two-j1" aria-selected="false">Pendidikan</a>
			</li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-two-j2-tab" data-toggle="pill" href="#custom-tabs-two-j2" role="tab" aria-controls="custom-tabs-two-j2" aria-selected="false">Jabatan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-two-j3-tab" data-toggle="pill" href="#custom-tabs-two-j3" role="tab" aria-controls="custom-tabs-two-j3" aria-selected="false">Pangkat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-two-j4-tab" data-toggle="pill" href="#custom-tabs-two-j4" role="tab" aria-controls="custom-tabs-two-j4" aria-selected="false">Arsip SKP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-two-j5-tab" data-toggle="pill" href="#custom-tabs-two-j5" role="tab" aria-controls="custom-tabs-two-j5" aria-selected="false">KGB</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-two-j6-tab" data-toggle="pill" href="#custom-tabs-two-j6" role="tab" aria-controls="custom-tabs-two-j6" aria-selected="false">LHKASN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="custom-tabs-two-j7-tab" data-toggle="pill" href="#custom-tabs-two-j7" role="tab" aria-controls="custom-tabs-two-j7" aria-selected="false">Dokumen Pendukung</a>
      </li>
		</ul>
	</div>
  <div class="card-body">
    <div class="tab-content" id="custom-tabs-two-tabContent">
      <div class="tab-pane fade show active" id="custom-tabs-two-id" role="tabpanel" aria-labelledby="custom-tabs-two-id-tab">
        <div class="table-responsive">
        <table  class="table" border="0">
          <tr>
            <td>Nama Dosen</td>
            <td>:</td>
            <td><?php echo $data['nama_dosen'] ?></td>
          </tr>
          <tr>
            <td>NIDN</td>
            <td>:</td>
            <td><?php echo $data['nidn'] ?></td>
          </tr>
          <tr>
            <td>NIP</td>
            <td>:</td>
            <td><?php echo $data['nip'] ?></td>
          </tr>
          <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $data['nik'] ?></td>
          </tr>
          <tr>
            <td>No Serdik</td>
            <td>:</td>
            <td><?php echo $data['noserdik'] ?></td>
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
            <td>Jabatan</td>
            <td>:</td>
            <td><?php
              $jb =  $data['jabatan'];
              $jb1 = mysqli_query($koneksi, "SELECT * FROM tb_add_jbt WHERE id_jbt = '$jb' ");
              $jb2 = mysqli_fetch_array($jb1);
              echo $jb2['nama_jbt'];?>
              </td>
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
              <td>Status Pegawai (PNS/YPP)</td>
              <td>:</td>
              <td><?php echo $data['status_pegawai'] ?></td>
            </tr>
            <tr>
            <td>Status Aktifitas (Aktif/Pensiun/MD/NDIK)</td>
            <td>:</td>
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
          <tr>
            <td>TMT Dosen Tetap</td>
            <td>:</td>
            <td><?php echo date("d-m-Y", strtotime($data['tmtdt'])) ?></td>
          </tr>
          <tr>
            <td>Unit Kerja / Fakultas</td>
            <td>:</td>
            <td><?php echo $data['nama_fak'] ?></td>
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
          <tr>
            <td>NPWP</td>
            <td>:</td>
            <td><?php echo $data['npwp'] ?></td>
          </tr>
          <tr>
            <td>Nama Bank</td>
            <td>:</td>
            <td><?php echo $data['namabank'] ?></td>
          </tr>
          <tr>
            <td>No Rekening</td>
            <td>:</td>
            <td><?php echo $data['norekening'] ?></td>
          </tr>
          <tr>
            <td>Nama Pemilik Rekening</td>
            <td>:</td>
            <td><?php echo $data['prekening'] ?></td>
          </tr>
          <tr>
            <td>Password LHKASN</td>
            <td>:</td>
            <td><?php echo $data['passlhkasn'] ?></td>
          </tr>

        </table>
      </div>
      </div>
      <div class="tab-pane fade show" id="custom-tabs-two-j1" role="tabpanel" aria-labelledby="custom-tabs-two-j1-tab">
        <a style="width:150px;"  class="btn btn-primary btn-block" href="index.php?page=mdosen_pendidikan_add&id=<?php echo $data['nidn'] ?>"><i class="fa fa-plus"></i>Tambah Data</a><br>
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
          $nidn = $_SESSION['nidn'];
          $query1 = "SELECT * FROM tb_mdo_pendidikan WHERE nidn = $nidn";
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
          <a class="btn btn-danger" href="controller.php?page=hapus_pendidikan&id=<?php echo $data1['id_pd'] ?>">
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
      <div class="tab-pane fade show" id="custom-tabs-two-j2" role="tabpanel" aria-labelledby="custom-tabs-two-j2-tab">
        <a style="width:150px;"  class="btn btn-primary btn-block" href="index.php?page=mdosen_jabatan_add&id=<?php echo $data['nidn'] ?>"><i class="fa fa-plus"></i>Tambah Data</a><br>

        <div class="table-responsive">
        <table class="table table-hover table-striped text-nowrap">
        <thead >
        <tr>
          <th>No</th>
          <th>Nomor SK</th>
          <th>Tanggal SK</th>
          <th>TMT</th>
          <th>KUM</th>
          <th>Scan SK</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          <?php

          $nidn = $_SESSION['nidn'];
          $query1 = "SELECT * FROM tb_mdo_jabatan WHERE nidn = $nidn";
                $dt = mysqli_query($koneksi, $query1);
              if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
                   echo "<div class='alert alert-danger alert-dismissible'>
                <button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><center>Maaf Tidak Ada Data</center></h6></div>";
                        }
              else {

            $no = 1;
            while ($data2 = mysqli_fetch_array($dt))
            {

           ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $data2['no_sk'] ?></td>
          <td><?php echo $data2['tgl_sk'] ?></td>
          <td><?php echo $data2['tmt'] ?></td>
          <td><?php echo $data2['kum'] ?></td>
          <td><a href="../../berkas/jabatan/<?php echo $data2['scan_sk'] ?>">Unduh Berkas</a></td>
          <td>
            <a class="btn btn-danger" href="controller.php?page=hapus_jabatan&id=<?php echo $data2['id_jb'] ?>">
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

      <div class="tab-pane fade show" id="custom-tabs-two-j3" role="tabpanel" aria-labelledby="custom-tabs-two-j3-tab">
        <?php
        $nidnt = $_SESSION['nidn'];
        $btnt = mysqli_query($koneksi,"SELECT * FROM tb_mdo_pangkat WHERE nidn = $nidnt");
        if (mysqli_num_rows($btnt) == 0)  {
          echo "<a style='width:150px;' class='btn btn-primary btn-block' href='index.php?page=mdosen_pangkat_add&id=$data[nidn]'><i class='fa fa-plus'></i>Tambah Data</a><br>";
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
          <th>Nomor SK</th>
          <th>Tanggal SK</th>
          <th>TMT</th>
          <th>Scan SK</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          <?php

          $nidn = $_SESSION['nidn'];
          $query1 = "SELECT * FROM tb_mdo_pangkat WHERE nidn = $nidn";
                $dt = mysqli_query($koneksi, $query1);
              if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
                   echo "<div class='alert alert-danger alert-dismissible'>
                <button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><center>Maaf Tidak Ada Data</center></h6></div>";
                        }
              else {

            $no = 1;
            while ($data3 = mysqli_fetch_array($dt))
            {

           ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $data3['no_sk'] ?></td>
          <td><?php echo $data3['tgl_sk'] ?></td>
          <td><?php echo $data3['tmt'] ?></td>
          <td><a href="../../berkas/pangkat/<?php echo $data3['scan_sk'] ?>">Unduh Berkas</a></td>
          <td>
            <a class="btn btn-danger" href="controller.php?page=hapus_pangkat&id=<?php echo $data3['id_pk'] ?>">
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

      <div class="tab-pane fade show" id="custom-tabs-two-j4" role="tabpanel" aria-labelledby="custom-tabs-two-j4-tab">
        <a style="width:150px;"  class="btn btn-primary btn-block" href="index.php?page=mdosen_skp_add&id=<?php echo $data['nidn'] ?>"><i class="fa fa-plus"></i>Tambah Data</a><br>
        <div class="table-responsive">
        <table class="table table-hover table-striped text-nowrap">
        <thead>
        <tr>
          <th>No</th>
          <th>Tahun SKP</th>
          <th>Berkas SKP</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          <?php

          $nidn = $_SESSION['nidn'];
          $query1 = "SELECT * FROM tb_mdo_skp WHERE nidn = $nidn";
                $dt = mysqli_query($koneksi, $query1);
              if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
                   echo "<div class='alert alert-danger alert-dismissible'>
                <button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><center>Maaf Tidak Ada Data</center></h6></div>";
                        }
              else {

            $no = 1;
            while ($data4 = mysqli_fetch_array($dt))
            {

           ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $data4['tahun'] ?></td>
          <td><a href="../../berkas/skp/<?php echo $data4['berkas_skp'] ?>">Unduh Berkas</a></td>
          <td>
            <a class="btn btn-danger" href="controller.php?page=hapus_skp&id=<?php echo $data4['id_skp'] ?>">
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

      <div class="tab-pane fade show" id="custom-tabs-two-j5" role="tabpanel" aria-labelledby="custom-tabs-two-j5tab">
        <a style="width:150px;"  class="btn btn-primary btn-block" href="index.php?page=mdosen_kgb_add&id=<?php echo $data['nidn'] ?>"><i class="fa fa-plus"></i>Tambah Data</a><br>
        <div class="table-responsive">
        <table class="table table-hover table-striped text-nowrap">
        <thead>
        <tr>
          <th>No</th>
          <th>Nomor Surat</th>
          <th>Tanggal Surat</th>
          <th>TMT</th>
          <th>Berkas KGB</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          <?php

          $nidn = $_SESSION['nidn'];
          $query1 = "SELECT * FROM tb_mdo_kgb WHERE nidn = $nidn";
                $dt = mysqli_query($koneksi, $query1);
              if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
                   echo "<div class='alert alert-danger alert-dismissible'>
                <button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><center>Maaf Tidak Ada Data</center></h6></div>";
                        }
              else {

            $no = 1;
            while ($data5 = mysqli_fetch_array($dt))
            {

           ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $data5['no_surat'] ?></td>
          <td><?php echo $data5['tgl_surat'] ?></td>
          <td><?php echo $data5['tmt'] ?></td>
          <td><a href="../../berkas/kgb/<?php echo $data5['berkas_kgb'] ?>">Unduh Berkas</a></td>
          <td>
            <a class="btn btn-danger" href="controller.php?page=hapus_kgb&id=<?php echo $data5['id_kgb'] ?>">
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

      <div class="tab-pane fade show" id="custom-tabs-two-j6" role="tabpanel" aria-labelledby="custom-tabs-two-j6-tab">
        <a style="width:150px;"  class="btn btn-primary btn-block" href="index.php?page=mdosen_lh_add&id=<?php echo $data['nidn'] ?>"><i class="fa fa-plus"></i>Tambah Data</a><br>
        <div class="table-responsive">
        <table class="table table-hover table-striped text-nowrap">
        <thead>
        <tr>
          <th>No</th>
          <th>Tahun LHKASN</th>
          <th>Berkas LHKASN</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          <?php

          $nidn = $_SESSION['nidn'];
          $query1 = "SELECT * FROM tb_mdo_lh WHERE nidn = $nidn";
                $dt = mysqli_query($koneksi, $query1);
              if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
                   echo "<div class='alert alert-danger alert-dismissible'>
                <button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><center>Maaf Tidak Ada Data</center></h6></div>";
                        }
              else {

            $no = 1;
            while ($data6 = mysqli_fetch_array($dt))
            {

           ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $data6['tahun'] ?></td>
          <td><a href="../../berkas/lhkasn/<?php echo $data6['berkas_lh'] ?>">Unduh Berkas</a></td>
          <td>
            <a class="btn btn-danger" href="controller.php?page=hapus_lh&id=<?php echo $data6['id_lh'] ?>">
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
        $nidnt = $_SESSION['nidn'];
        $btnt = mysqli_query($koneksi,"SELECT * FROM tb_mdo_dp WHERE nidn = $nidnt");
        if (mysqli_num_rows($btnt) == 0)  {
          echo "<a style='width:150px;' class='btn btn-primary btn-block' href='index.php?page=mdosen_dp_add&id=$data[nidn]'><i class='fa fa-plus'></i>Tambah Data</a><br>";
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
          <th>Sertifikat Pendidik</th>
          <th>NPWP</th>
          <th>Buku Rekening</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          <?php

          $nidn = $_SESSION['nidn'];
          $query1 = "SELECT * FROM tb_mdo_dp WHERE nidn = $nidn";
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
          <td><a href="../../berkas/dp/<?php echo $data7['sp'] ?>">Unduh Berkas</a></td>
          <td><a href="../../berkas/dp/<?php echo $data7['npwp'] ?>">Unduh Berkas</a></td>
          <td><a href="../../berkas/dp/<?php echo $data7['br'] ?>">Unduh Berkas</a></td>
          <td>
            <a class="btn btn-danger" href="controller.php?page=hapus_dp&id=<?php echo $data7['id_dp'] ?>">
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
