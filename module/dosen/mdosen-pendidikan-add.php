<?php
error_reporting (0);
require_once("session.php");
require_once("../../config/database.php");
?>

<div class="container-fluid">
  <div class="alert alert-primary alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h5><i class="icon fas fa-info"></i> Perhatian</h5>
  </p>Program Studi Tidak Perlu Diisi Apabila Jenjang Pendidikan SD/SMP/SMA.</p></div>
      <div class="card-body">
    		<div class="tab-content" id="custom-tabs-two-tabContent">
    			<div class="tab-pane fade show active" id="custom-tabs-two-js" role="tabpanel" aria-labelledby="custom-tabs-two-js-tab">
            <form class="" action="controller?page=tambah_mdosen_pendidikan" method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
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
                      <td>Jenjang Pendidikan</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <select class="form-control" name="jenjang" required>
                                          <option value="#" disabled selected>Pilih Jenjang Pendidikan</option>
                                          <option value="SMA/Sederajat">SD/Sederajat</option>
                                          <option value="SMA/Sederajat">SMP/Sederajat</option>
                                          <option value="SMA/Sederajat">SMA/Sederajat</option>
                                          <option value="D3">D3 (Diploma 3)</option>
                                          <option value="S1">S1 (Strata)</option>
                                          <option value="S2">S2 (Magister)</option>
                                          <option value="S3">S3 (Doktoral)</option>
                            </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Program Studi</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <input placeholder="Program Studi" type="text" class="form-control" name="prodi" required>

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Akreditasi</td>
                    <td>:</td>
                    <td>
                    <div class="input-group mb-3">
                      <input placeholder="Akreditasi" type="text" class="form-control" name="akreditasi" required>

                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Sekolah / Perguruan Tinggi</td>
                  <td>:</td>
                  <td>
                  <div class="input-group mb-3">
                    <input placeholder="Sekolah / Perguruan Tinggi" type="text" class="form-control" name="pt" required>

                  </div>
                </td>
              </tr>

                  <tr>
                    <td>Tanggal Ijazah</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input placeholder="Tanggal Ijazah" type="text" class="form-control date  datepicker" name="tgl_ijazah" required>
                      </div>
                      <td>
                      </tr>
                  <tr>
                    <td>Scan Ijazah </td>
                    <td>:</td>
                    <td>
                  <div class="input-group mb-3">
                    <input placeholder="Scan Ijazah" type="file" class="form-control" name="scan_ijazah" required>
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
