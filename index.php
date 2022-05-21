<?php
error_reporting (0);
$page=isset($_GET['page']) ? ($_GET['page']) : "";
if ($page=='logins') {
	logins ();
}
function logins() {
include "config/database.php";
$username=$_POST['username'];
$pass=md5($_POST['password']);
$query="SELECT * FROM tb_users where username='$username' AND password='$pass'";
$data=mysqli_query($koneksi,$query);
$cek=mysqli_fetch_array($data);
if ($cek['username']==$username && $cek['password']==$pass) {
    $qw=mysqli_query($koneksi,"SELECT * FROM tb_mdo_dosen WHERE nohp='$username'");
    $dt=mysqli_fetch_array($qw);
    session_start();
	$_SESSION['username']=$cek['username'];
	$_SESSION['id_fak']=$cek['id_fak'];
	$_SESSION['status']=$cek['status'];
	$_SESSION['nidn']=$dt['nidn'];
	if ($cek['status']=='a1' || $cek['status']=='a2') {
		header("location:module/admin/index");

	}
	elseif ($cek['status']=='d') {
		header("location:module/dosen/index");
	}
  elseif ($cek['status']=='t') {
		header("location:module/tendik/index");
	}
}
else{
 pwsalah();
}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIM SDM UNIVERSITY</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
        <script src="js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
        <link href="css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
        <script type="text/javascript">
function myFunction() {
var x = document.getElementById("pass");
if (x.type === "password") {
	x.type = "text";
} else {
	x.type = "password";
}
}
</script>
        
    </head>
    
    <div class="container text-center" style="margin-top:5%;">
    <?php if($page=='gagal') { ?>
		<script type="text/javascript">
		alert('Maaf Email/Password Salah.')
		</script>
	<?php } ?>
      <div class="row d-flex justify-content-center">
        <div class="col-md-8" >
          <div class="card-group mb-0" style="box-shadow: 5px 5px 5px 5px #888;">
          <div class="card text-white py-5 d-md-down-none bg-danger">
              <div class="card-body text-center">
                <div>
                  <img src="dist/img/logo.png" style="width:40%;height:40%;" alt=""> <br><br>
                  <h4>SIM SDM<br>UNIVERSITY</h4>
                  <!-- <p class="text-white" style="font-size: 12px;">UNIVERSITY<br></p> -->
                </div>
              </div>
            </div>
            <div class="card p-4">
              <div class="card-body">
              <?php
function pwsalah() {
echo "<div class='alert alert-danger alert-dismissible'>
	<button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	<h5><i class='icon fas fa-info'></i> Error!</h5>Maaf Username/Password Salah Atau Belum Terdaftar</div>";
};
?>
                <h3>LOGIN</h3>
                <p class="text-muted">Sign In to your account</p>
          <form action="index?page=logins" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="username" placeholder="Username">
                  	<div class="input-group-append">
						         <div class="input-group-text">
							        <span class="fas fa-id-card"></span>
						         </div>
					          </div>
                </div>
                <div class="input-group mb-4">
                  <input id="pass" type="password" name="password" class="form-control" placeholder="Password">
                  <div class="input-group-append">
					        	<div class="input-group-text">
						        	<span class="fas fa-lock"></span>
					        	</div>
				        	</div>
                </div>
                <div class="input-group mb-4">
                  <div class="form-check">
                    &nbsp;&nbsp;<input type="checkbox" class="form-check-input" onclick="myFunction()">
                    <label class="form-check-label">Lihat Password</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="submit" class="btn btn-danger px-5">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <a  href="#" data-toggle="modal" data-target="#modal-lupa" class="btn btn-link px-0">Lupa Password ?</a>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    require_once 'config/database.php';
     ?>
              <div class="modal fade" id="modal-lupa">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header bg-danger">
                          <h5 class="modal-title text-white">Lupa Password</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
        <div class="modal-body">
          <p>Harap Hubungi Administrator Universitas<br>Terimakasih.</p>
        </div>
      </div>
    </div>
    </div>
    </body>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

  </html>
  