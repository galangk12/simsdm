<?php

$conn = mysqli_connect("localhost","root","","db_sdmrekrutmen");

// Check connection
if (mysqli_connect_errno()){
	echo "<script> alert('Database Tidak Dapat Dibuka, Hubungi Administrator')</script>" . mysqli_connect_error();
}

?>
