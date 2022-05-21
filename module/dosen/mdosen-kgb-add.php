<?php
error_reporting (0);
require_once("session.php");
require_once("../../config/database.php");
?>

<div class="container-fluid">

<div class="card card-danger card-tabs" style="width:100%">
	<div class="card-header p-0 pt-1">
		<ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
			<li class="pt-2 px-3">
				<h3 class="card-title"></h3>
			</li>
			<li class="nav-item">
				<a class="nav-link active" id="custom-tabs-two-js-tab" data-toggle="pill" href="#custom-tabs-two-js" role="tab" aria-controls="custom-tabs-two-js" aria-selected="true">Tambah Berkas KGB</a>
			</li>
    </div>
  </div>
      <div class="card-body">
    		<div class="tab-content" id="custom-tabs-two-tabContent">
    			<div class="tab-pane fade show active" id="custom-tabs-two-js" role="tabpanel" aria-labelledby="custom-tabs-two-js-tab">
            <form class="" action="controller?page=tambah_mdosen_kgb" method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
              <div class="container-fluid">
                  <div class="row">
                    <table class="table" border="0">
                      <input type="hidden" name="nidn" class="form-control" value="<?php echo $_GET['id'] ?>" required>
                      <tr>
                        <td>NIDN</td>
                        <td>:</td>
                        <td>
                          <div class="input-group mb-3">
                            <input type="text" name="nidnshow" class="form-control" value="<?php echo $_GET['id'] ?>" disabled>
                          </div>
                        </td>
                      </tr>
											<tr>
												<td>No Surat</td>
												<td>:</td>
												<td>
													<div class="input-group mb-3">
														<input type="text" name="no_surat" class="form-control" placeholder="Nomor Surat" required>
													</div>
												</td>
											</tr>
											<tr>
												<td>Tahun</td>
												<td>:</td>
												<td>
													<div class="input-group mb-3">
														<input type="text" name="tgl_surat" class="form-control date datepicker" placeholder="Tanggal Surat" required>
													</div>
												</td>
											</tr>
											<tr>
												<td>TMT</td>
												<td>:</td>
												<td>
													<div class="input-group mb-3">
														<input type="text" name="tmt" class="form-control date datepicker" placeholder="Terhitung Mulai Tanggal" required>
													</div>
												</td>
											</tr>
											<tr>
												<td>Tanggal Berakhir</td>
												<td>:</td>
												<td>
													<div class="input-group mb-3">
														<input placeholder="Tanggal Berakhir" type="text" class="form-control date  datepicker" name="tbr" required>
													</div>
													<td>
													</tr>
                  <tr>
                    <td>Berkas KGB </td>
                    <td>:</td>
                    <td>
                  <div class="input-group mb-3">
                    <input placeholder="Berkas KGB" type="file" class="form-control" name="berkas_kgb" required>
                  </div>
                </td>
              </tr>
</table>
<button type="submit" class="btn btn-primary" name="button"> Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
