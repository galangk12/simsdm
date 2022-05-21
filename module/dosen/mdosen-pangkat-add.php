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
				<a class="nav-link active" id="custom-tabs-two-js-tab" data-toggle="pill" href="#custom-tabs-two-js" role="tab" aria-controls="custom-tabs-two-js" aria-selected="true">Tambah Pangkat</a>
			</li>
    </div>
  </div>
      <div class="card-body">
    		<div class="tab-content" id="custom-tabs-two-tabContent">
    			<div class="tab-pane fade show active" id="custom-tabs-two-js" role="tabpanel" aria-labelledby="custom-tabs-two-js-tab">
            <form class="" action="controller?page=tambah_mdosen_pangkat" method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
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
                      <td>Nomor SK</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="no_sk" class="form-control" placeholder="Nomor SK" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Tanggal SK</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <input placeholder="Tanggal SK" type="text" class="form-control date  datepicker" name="tgl_sk" required>

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
                    <td>TMT</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input placeholder="Tanggal Mulai" type="text" class="form-control date  datepicker" name="tmt" required>
                      </div>
                      <td>
                      </tr>
                  <tr>
                    <td>Scan SK </td>
                    <td>:</td>
                    <td>
                  <div class="input-group mb-3">
                    <input placeholder="Scan SK" type="file" class="form-control" name="scan_sk" required>
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
