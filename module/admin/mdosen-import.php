<?php $act=isset($_GET['act']) ? ($_GET['act']) : ""; require_once("session.php"); ?>
<div class="container-fluid">

<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 		<h5><i class="icon fas fa-info"></i> Perhatian!</h5>
		<p> Perlu Diperhatikan Dalam Mengimpor Data Dosen, Silahkan Cek Di Petunjuk Penggunaan. Terimakasih</p>
	</div>
</div>
<div class="card card-danger card-tabs" style="width:100%">
	<div class="card-header p-0 pt-1">
		<ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
			<li class="pt-2 px-3">
				<h3 class="card-title"></h3>
			</li>
			<li class="nav-item">
				<a class="nav-link active" id="custom-tabs-two-i1-tab" data-toggle="pill" href="#custom-tabs-two-i1" role="tab" aria-controls="custom-tabs-two-i1" aria-selected="true">Import Data Dosen</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="custom-tabs-two-i2-tab" data-toggle="pill" href="#custom-tabs-two-i2" role="tab" aria-controls="custom-tabs-two-i2" aria-selected="false">Petunjuk Penggunaan</a>
			</li>

		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content" id="custom-tabs-two-tabContent">
			<div class="tab-pane fade show active" id="custom-tabs-two-i1" role="tabpanel" aria-labelledby="custom-tabs-two-i1-tab">
			<?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
	}
	?>
	<br>
				<form method="post" action="controller?page=import" enctype="multipart/form-data">
	      <div class="form-group row">
				 <label  class="col-sm-2 col-form-label">Pilih Import File (.xls)</label>
					<div class="col-sm-10">
            <input class="form-control" type="file" name="fileimport" class="input-file" />
					</div>
				</div>
					<button type="submit" name="import" class="btn btn-primary">Import Data</button>
			</form>

		</div>

		<div class="tab-pane fade show" id="custom-tabs-two-i2" role="tabpanel" aria-labelledby="custom-tabs-two-i2-tab">
		<h4>Petunjuk Penggunaan Import</h4>
		<ol>
			<li>Perlu Diperhatikan Didalam Menginput Data Fakultas, Program Studi, Jabatan, & Pangkat Memerlukan Kode.</li>
			<li>Sesuaikan Kode Dengan Data Fakultas, Program Studi, Jabatan, & Pangkat Masing-Masing.</li>
			<li>Untuk Kode Fakultas, Program Studi, Jabatan, & Pangkat Dapat Mengunduh Kode Dibawah ini.</li>
			<li>Pastikan Data Sesuai Dengan Template Yang Sudah Diunduh.</li>
			<li>Untuk Data Yang Kosong Dapat Diisi Dengan Tanda - (Strip).</li>
			<li>Format File Excel Yang Digunakan Adalah (.xls) Terimakasih</li>
		</ol>
			<a class="btn btn-success" href="excel/Template_Dosen.xls">
				Unduh Template
  			</a>
			  <a class="btn btn-primary" href="excel/Kode_Import.xls">
				Unduh Kode
  			</a>
				


		</div>

		</div>
  </div>
</div>
