<?php
require_once("../../config/database.php");
require_once("session.php");
$kode = $_GET['id_fak'];
echo "
	<div class='input-group mb-3'>
<select class='form-control' name='prod' onchange='javascript:rubah2(this)' required>
  <option value='#' disabled selected>Pilih Program Studi</option>
	 "; $rs = mysqli_query ($koneksi,"SELECT * FROM tb_mda_prodi WHERE (id_fak='$kode')");
	 while ($r = mysqli_fetch_array($rs)) echo "
	<option value='$r[id_prod]'>$r[nama_prod]</option>
	"; echo "
</select>
</div>
";
?>
