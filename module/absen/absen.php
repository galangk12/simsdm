<?php
$nidn=$_SESSION['nidn'];
$code=$_GET['code'];
$qr=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM portalcode"));
if($code == $qr['id_code']) {

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="geo-min.js" type="text/javascript" charset="utf-8"></script>
    <div class="container">
<div id="time">
</div><br>
<div id="div_isi">
</div>
<p>Absen Masuk : 07:30 - 07:59 WIB | Absen Pulang : 14:00 - 17:00 WIB</p>
<script>
        setInterval(function(){
            $.ajax({url: "absen-time.php", success: function(response){
                $('#time').html(response)
            }});
        }, 1000);
</script>

    <script>
        if(geo_position_js.init()){
            geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
        }
        else{
            div_isi=document.getElementById("div_isi");
            div_isi.innerHTML ="Tidak ada fungsi geolocation";
        }

        function success_callback(p)
        {
            latitude=p.coords.latitude ;
            longitude=p.coords.longitude;
            pesan='Lokasi Saat Ini : '+latitude+','+longitude;
            pesan = pesan + "<br/>";
            div_isi=document.getElementById("div_isi");
            //alert(pesan);
            div_isi.innerHTML =pesan;
        }
        
        function error_callback(p)
        {
            div_isi=document.getElementById("div_isi");
            div_isi.innerHTML ='error='+p.message;
        }        
    </script>
<?php 
date_default_timezone_set("Asia/Jakarta");
$now = new Datetime("now");
$awalmasuk = new DateTime('07:30');
$akhirmasuk = new DateTime('07:59');
$awalpulang = new DateTime('14:00');
$akhirpulang = new DateTime('17:00');
$sekarang = date("Y-m-d");
$qr=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM absen where nidn='$nidn' and tanggal='$sekarang'"));

if($now >= $awalmasuk && $now <= $akhirmasuk){
    // between times
    if(isset($qr['jam_masuk']) && $now < $awalpulang) {
        echo '<div class="alert alert-success">
        Anda Telah Melakukan Absensi Masuk. Terimakasih
      </div>';
        }
        else {
            echo '<a href="controller?page=absenmasuk&nidn='.$nidn.'&code='.$code.'" class="btn btn-primary">Absen Masuk <i class="fa fa-sign-in"></i></a><br>';
        }
        

    
}elseif($now >= $awalpulang && $now <= $akhirpulang) {
    // between times
    if(isset($qr['jam_pulang']) && $now <= $akhirpulang) {
        echo '<div class="alert alert-danger">
        Anda Telah Melakukan Absensi Pulang. Terimakasih
      </div>';
        }
        else {
            echo '<a href="../dosen/controller?page=absenpulang&nidn='.$nidn.'&code='.$code.'" class="btn btn-danger"><i class="fa fa-sign-out"></i> Absen Pulang</a><br>';
        }
        
    }

?><br>
<table class="table">
<tr>
    <th>Tanggal</th>
    <th>Jam Masuk</th>
    <th>Jam Pulang</th>
</tr>
<?php 
$qr=mysqli_query($conn,"SELECT * FROM absen where nidn='$nidn'");
    while($dt=mysqli_fetch_array($qr)) {
?>
<tr>
    <td><?php echo date("d-m-Y",strtotime($dt['tanggal'])) ?></td>
    <td><?php echo date("H:i:s",strtotime($dt['jam_masuk'])) ?></td>
    <td><?php if ($dt['jam_pulang'] == null) {
        echo "-";
        }
        else {
            echo date("H:i:s",strtotime($dt['jam_pulang']));
         } ?></td>
</tr>
<?php
    }
?>
</table>

 </div>
 

<?php
}else {
    echo "Maaf Kode Invalid";
}
?>