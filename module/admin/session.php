<?php
session_start();
if(!isset($_SESSION['username'])) {
	echo "<script>
			window.location.href=('../../index');
			</script>";
}
if($_SESSION['status']!="a1" && $_SESSION['status']!="a2") {
	session_destroy();
	echo "<script>
			window.location.href=('../../index');
			</script>";
		}
?>
