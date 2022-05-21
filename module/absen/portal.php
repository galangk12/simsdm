<meta http-equiv="refresh" content="120" > 
<title>Portal </title>
<?php 
require_once("../../config/databaseabsen.php");

function generateRandomString($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$result= generateRandomString();
$quera=mysqli_query($conn,"UPDATE portalcode SET id_code='$result'");

$query=mysqli_query($conn,"SELECT * FROM portalcode");
$data=mysqli_fetch_array($query);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="geo-min.js" type="text/javascript" charset="utf-8"></script>
<div class="container">
<style>
    .heade {
        width:100%;
        height:50px;
        color:white;
        background:red;
        margin:0;
        left:0;
        top:0;
    }
</style>
<div class="heade"><center><h1>BARCODE ABSENSI UNIVERSITY</h1></center></div>
<center>
<img src="https://chart.googleapis.com/chart?chs=350x350&cht=qr&chl=<?php echo $data['id_code'] ?>" />
<div id="time">
</div>
<p>Absen Masuk : 07:30 - 07:59 WIB | Absen Pulang : 14:00 - 17:00 WIB</p>
<script>
        setInterval(function(){
            $.ajax({url: "absen-time.php", success: function(response){
                $('#time').html(response)
            }});
        }, 1000);
</script>
</center>
</div>