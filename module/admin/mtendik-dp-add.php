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
				<a class="nav-link active" id="custom-tabs-two-js-tab" data-toggle="pill" href="#custom-tabs-two-js" role="tab" aria-controls="custom-tabs-two-js" aria-selected="true">Tambah Dokumen Pendukung</a>
			</li>
    </div>
  </div>
      <div class="card-body">
    		<div class="tab-content" id="custom-tabs-two-tabContent">
    			<div class="tab-pane fade show active" id="custom-tabs-two-js" role="tabpanel" aria-labelledby="custom-tabs-two-js-tab">
            <form class="" action="controller?page=tambah_mdosen_dp" method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
              <div class="container-fluid">
                  <div class="row">
                    <table class="table" border="0">
                      <input type="hidden" name="nik" class="form-control" value="<?php echo $_GET['id'] ?>" required>
                      <tr>
                        <td>NIK/td>
                        <td>:</td>
                        <td>
                          <div class="input-group mb-3">
                            <input type="text" name="nidnshow" class="form-control" value="<?php echo $_GET['id'] ?>" disabled>
                          </div>
                        </td>
                      </tr>
                  <tr>
                    <td>KTP</td>
                    <td>:</td>
                    <td>
                  <div class="input-group mb-3">
                    <input placeholder="KTP" type="file" class="form-control" name="ktp" required>
                  </div>
                </td>
              </tr>
							<tr>
								<td>Kartu Pegawai (Karpeg) </td>
								<td>:</td>
								<td>
							<div class="input-group mb-3">
								<input placeholder="KARPEG" type="file" class="form-control" name="karpeg" required>
							</div>
						</td>
					</tr>
			<tr>
				<td>NPWP </td>
				<td>:</td>
				<td>
			<div class="input-group mb-3">
				<input placeholder="npwp" type="file" class="form-control" name="npwp" required>
			</div>
		</td>
	</tr>
	<tr>
		<td>Buku Rekening </td>
		<td>:</td>
		<td>
	<div class="input-group mb-3">
		<input placeholder="Buku Rekening" type="file" class="form-control" name="br" required>
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
