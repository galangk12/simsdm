<?php
require_once("../../config/database.php");
require_once("session.php");
$kode = $_GET['id_prod'];
echo "
	<div class='input-group mb-3'>
<select class='form-control' name='prod'>
  <option value='#' disabled selected>Pilih Dosen</option>
	 ";

	 $rs = mysqli_query ($koneksi,"SELECT * FROM tb_mdo_dosen WHERE (id_prod='$kode')");
	 while ($r = mysqli_fetch_array($rs))
	 echo " <option value='$r[nidn]'>$r[nama_dosen]</option>";
	 echo "

</select>
<div class='input-group-append'>
	<div class='input-group-text'>
		<span class='fas fa-edit'></span>
	</div>
</div>
</div>
";
?>
