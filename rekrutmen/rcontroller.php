<?php
error_reporting(0);
require_once '../config/databaserekrutmen.php';
$p=isset($_GET['p']) ? ($_GET['p']) : "";
function randomStr($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if($p=='add_karir') {
//Data Bos//
    $nik=$_POST['nik'];
    $nama=strtoupper($_POST['nama']);
    $tmp_lahir=strtoupper($_POST['tmp_lahir']);
    $tgl_lahir=$_POST['tgl_lahir'];
    $alamat=strtoupper($_POST['alamat']);
    $nohp=$_POST['nohp'];
    $email=$_POST['email'];
    $pt=strtoupper($_POST['pt']);
    $tl=$_POST['tl'];
    $pt1=strtoupper($_POST['pt1']);
    $pd1=strtoupper($_POST['pd1']);
    $tl1=$_POST['tl1'];
    $pt2=strtoupper($_POST['pt2']);
    $pd2=strtoupper($_POST['pd2']);
    $tl2=$_POST['tl2'];
    $pt3=strtoupper($_POST['pt3']);
    $pd3=strtoupper($_POST['pd3']);
    $tl3=$_POST['tl3'];
    $bidang=strtoupper($_POST['bidang']);
    $jalur=strtoupper($_POST['jalur']);
    $tgl_daftar = date("Y-m-d",strtotime('now'));


//Berkas Bos//
    $bsl= $_FILES['bsl']['name'];
    $t_bsl=$_FILES['bsl']['tmp_name'];
    $bktp= $_FILES['bktp']['name'];
    $t_bktp=$_FILES['bktp']['tmp_name'];
    $bcv= $_FILES['bcv']['name'];
    $t_bcv=$_FILES['bcv']['tmp_name'];
    $bs1= $_FILES['bs1']['name'];
    $t_bs1=$_FILES['bs1']['tmp_name'];
    $btn1= $_FILES['btn1']['name'];
    $t_btn1=$_FILES['btn1']['tmp_name'];
    $bs2= $_FILES['bs2']['name'];
    $t_bs2=$_FILES['bs2']['tmp_name'];
    $btn2= $_FILES['btn2']['name'];
    $t_btn2=$_FILES['btn2']['tmp_name'];
    $bs3= $_FILES['bs3']['name'];
    $t_bs3=$_FILES['bs3']['tmp_name'];
    $btn3= $_FILES['btn3']['name'];
    $t_btn3=$_FILES['btn3']['tmp_name'];
    $bsksd= $_FILES['bsksd']['name'];
    $t_bsksd=$_FILES['bsksd']['tmp_name'];
    $bskck= $_FILES['bskck']['name'];
    $t_bskck=$_FILES['bskck']['tmp_name'];
    $bpf= $_FILES['bpf']['name'];
    $t_bpf=$_FILES['bpf']['tmp_name'];
    $bpp= $_FILES['bpp']['name'];
    $t_bpp=$_FILES['bpp']['tmp_name'];

    $tempat = "assets/berkas/";

    $tempbsl = explode(".",$bsl);
	$nbsl = randomStr() . '.' . end($tempbsl);

    $tempbktp = explode(".",$bktp);
	$nbktp = randomStr() . '.' . end($tempbktp);

    $tempbcv = explode(".",$bcv);
	$nbcv = randomStr() . '.' . end($tempbcv);

    $tempbs1 = explode(".",$bs1);
	$nbs1 = randomStr() . '.' . end($tempbs1);

    $tempbtn1 = explode(".",$btn1);
	$nbtn1 = randomStr() . '.' . end($tempbtn1);
    if(empty($t_bs2)) {
    
    }else {
    $tempbs2 = explode(".",$bs2);
	$nbs2 = randomStr() . '.' . end($tempbs2);
    }
    if(empty($t_btn2)) {
    
    }else {
    $tempbtn2 = explode(".",$btn2);
	$nbtn2 = randomStr() . '.' . end($tempbtn2);
    }
    if(empty($t_bs3)) {
    
    }else {
    $tempbs3 = explode(".",$bs3);
	$nbs3 = randomStr() . '.' . end($tempbs3);
    }
    if(empty($t_btn3)) {
    
    }else {
    $tempbtn3 = explode(".",$btn3);
	$nbtn3 = randomStr() . '.' . end($tempbtn3);
    }
    $tempbsksd = explode(".",$bsksd);
	$nbsksd = randomStr() . '.' . end($tempbsksd);

    $tempbskck = explode(".",$bskck);
	$nbskck = randomStr() . '.' . end($tempbskck);

    $tempbpf = explode(".",$bpf);
	$nbpf = randomStr() . '.' . end($tempbpf);
    if(empty($t_bpp)) {
    
    }else {
    $tempbpp = explode(".",$bpp);
	$nbpp = randomStr() . '.' . end($tempbpp);
    }


    $query ="INSERT INTO tb_pendaftar(nik,nama,tmp_lahir,tgl_lahir,alamat,nohp,email,pt,tl,pt1,pd1,tl1,pt2,pd2,tl2,pt3,pd3,tl3,bidang,jalur,tgl_daftar) 
	values ('$nik','$nama','$tmp_lahir','$tgl_lahir','$alamat','$nohp','$email','$pt','$tl','$pt1','$pd1','$tl1','$pt2','$pd2','$tl2','$pt3','$pd3','$tl3','$bidang','$jalur','$tgl_daftar')";
	$query2 ="INSERT INTO tb_berkas(nik,bsl,bktp,bcv,bs1,btn1,bs2,btn2,bs3,btn3,bsksd,bskck,bpf,bpp) 
    values ('$nik','$nbsl','$nbktp','$nbcv','$nbs1','$nbtn1','$nbs2','$nbtn2','$nbs3','$nbtn3','$nbsksd','$nbskck','$nbpf','$nbpp')";

if (mysqli_query($conn,$query) && mysqli_query($conn,$query2)) {
    move_uploaded_file($t_bsl,$tempat.$nbsl);
    move_uploaded_file($t_bktp,$tempat.$nbktp);
    move_uploaded_file($t_bcv,$tempat.$nbcv);
    move_uploaded_file($t_bs1,$tempat.$nbs1);
    move_uploaded_file($t_btn1,$tempat.$nbtn1);
    move_uploaded_file($t_bs2,$tempat.$nbs2);
    move_uploaded_file($t_btn2,$tempat.$nbtn2);
    move_uploaded_file($t_bs3,$tempat.$nbs3);
    move_uploaded_file($t_btn3,$tempat.$nbtn3);
    move_uploaded_file($t_bsksd,$tempat.$nbsksd);
    move_uploaded_file($t_bskck,$tempat.$nbskck);
    move_uploaded_file($t_bpf,$tempat.$nbpf);
    move_uploaded_file($t_bpp,$tempat.$nbpp);
    echo "<script> alert('Terimakasih Telah Apply. Akan Kami Hubungi Untuk Informasi Lebih Lanjut')
			window.location.href='index'
			</script>
		";


		}
		else
		{
		  echo "<script> alert('Gagal Registrasi')
			window.location.href='index'
			</script>
		";
		}
}
?>
