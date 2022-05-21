<?php 
$conn = mysqli_connect("localhost","root","","db_sdmabsen");
if($conn) {
    echo"";
}else {
    echo "<script> alert('Database Error')</script>";
}
?>