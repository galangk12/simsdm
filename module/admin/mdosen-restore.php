<?php $act=isset($_GET['act']) ? ($_GET['act']) : ""; require_once("session.php"); ?>
<div class="card card-danger card-tabs" style="width:100%">
	<div class="card-header p-0 pt-1">
		<ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
			<li class="pt-2 px-3">
				<h3 class="card-title"></h3>
			</li>
			<li class="nav-item">
				<a class="nav-link active" id="custom-tabs-two-data-tab" data-toggle="pill" href="#custom-tabs-two-data" role="tab" aria-controls="custom-tabs-two-data" aria-selected="true">Restore Database</a>
			</li>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content" id="custom-tabs-two-tabContent">
			<div class="tab-pane fade show active" id="custom-tabs-two-data" role="tabpanel" aria-labelledby="custom-tabs-two-data-tab">
				<form method="post" action="mdosen-restore?act=restore" enctype="multipart/form-data">
	      <div class="form-group row">
				 <label  class="col-sm-2 col-form-label">Pilih Backup File (.sql)</label>
					<div class="col-sm-10">
            <input class="form-control" type="file" name="backup_file" class="input-file" />
					</div>
				</div>
					<button type="submit" name="restore" class="btn btn-primary">Restore Data</button>
			</form>

		</div>

		</div>
  </div>
</div>

<?php
if($act=='restore'){
$filename  = $_FILES['backup_file']['tmp_name'];
$handle  = fopen($filename, "r+");
$contents  = fread($handle, filesize($filename));

$sql = explode(';', $contents);

foreach ($sql as $query) {
 $result = mysqli_query($koneksi, $query);
 if($result){
  echo "<script> alert('Data Berhasil Di Restore')
    window.location.href='index?page=mdosen'
    </script>";
 }
}
fclose($handle);
echo "<script> alert('Data Berhasil Direstore')
  window.location.href='index?page=mdosen'
  </script> ";
}
?>
