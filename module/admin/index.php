<?php
require_once '../../config/database.php';
require_once 'session.php';
require_once 'excel/excel_reader2.php';
$page=isset($_GET['page']) ? ($_GET['page']) : "";
$idfak = $_SESSION['id_fak'];
if($page=='logout'){
$_SESSION = [];
session_destroy();
echo "<script>window.location.href=('../../index');</script>
 "; }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>SIM SDM UNIVERSITY</title>
<link rel="icon"
      type="image/png"
      href="../../dist/img/logo.jpg">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="../../plugins/datepicker/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="../../plugins/chart.js/Chart.min.css">
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed" style="background:white;">
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/logo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
<div class="wrapper" style="background:white;" >
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-danger navbar-dark">
	<!-- Left navbar links -->

	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="index" class="nav-link">Beranda</a>
		</li>
	</ul>
  <ul class="navbar-nav ml-auto">
    <h5 style="color:white;">Hai, <?php echo $_SESSION['username'] ?></h5>
    </ul>
	<!-- SEARCH FORM -->
	</nav>
	<!-- /.navbar -->
	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-info elevation-4">
	<!-- Brand Logo -->
	<a href="index" class="brand-link">
	<img src="../../dist/img/AdminLTELogo1.png" alt="Logo" class="brand-image img-circle elevation-5" style="opacity: .8">
  <?php
  if($_SESSION['status']=="a2") {
    echo "<span class='brand-text font-weight-light'>Admin Fakultas</span>";
  }else {
    echo "<span class='brand-text font-weight-light'>Administrator</span>";
  }
   ?>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<!-- Sidebar Menu -->
		<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			<li class="nav-item">
				<a href="index" class="nav-link">
				<i class="fa fa-home nav-icon"></i>
				<p>
					 Dashboard
				</p>
				</a>
			</li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fa fa-users nav-icon"></i>
          <p>
            Master SDM
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index?page=mdosen" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p> Data Dosen</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index?page=mtendik" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p> Data Tendik</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fa fa-suitcase nav-icon"></i>
          <p>
            Master Rekrutmen
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index?page=rktd" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p> Data Dosen</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index?page=rktt" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p> Data Tendik</p>
            </a>
          </li>
        </ul>
      </li>
      <?php
      if($_SESSION['status']=="a2") {
        echo "
        <li class='nav-item'>
				<a href='index?page=settings' class='nav-link'>
				<i class='fa fa-cog nav-icon'></i>
				<p>
					 Pengaturan
				</p>
				</a>
			</li>
        ";
      }else {
        echo "      
              <li class='nav-item has-treeview'>
                <a href='#' class='nav-link'>
                  <i class='fa fa-database nav-icon'></i>
                  <p>
                    Backup / Restore
                    <i class='right fas fa-angle-left'></i>
                  </p>
                </a>
                <ul class='nav nav-treeview'>
                  <li class='nav-item'>
                    <a href='mdosen-backup' class='nav-link'>
                      <i class='far fa-circle nav-icon'></i>
                      <p> Backup Database</p>
                    </a>
                  </li>

                  <li class='nav-item'>
                    <a href='index?page=mdosen_restore' class='nav-link'>
                      <i class='far fa-circle nav-icon'></i>
                      <p> Restore Database</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class='nav-item has-treeview'>
              <a href='#' class='nav-link'>
                <i class='fa fa-cog nav-icon'></i>
                <p>
                  Pengaturan
                  <i class='right fas fa-angle-left'></i>
                </p>
              </a>
              <ul class='nav nav-treeview'>
                <li class='nav-item'>
                  <a href='index?page=mdosen_users' class='nav-link'>
                    <i class='far fa-circle nav-icon'></i>
                    <p> Pengaturan User</p>
                  </a>
                </li>
      
                <li class='nav-item'>
                  <a href='index?page=settings' class='nav-link'>
                    <i class='far fa-circle nav-icon'></i>
                    <p> Pengaturan Admin</p>
                  </a>
                </li>
              </ul>
            </li>
              
              ";
      }
       ?>
 
			<li class="nav-item">
				<a href="index?page=logout" class="nav-link">
				<i class="fa fa-power-off nav-icon"></i>
				<p>
					 Logout
				</p>
				</a>
			</li>
		</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
	</aside>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper" style="background:white;">
		<!-- Main content -->
		<div class="content" style="background:white;">
		    <?php include 'header.php'; ?>
				<div class="row">
          <?php
          if($page=='mdosen') {
              include 'mdosen.php';
          }
          elseif($page=='rktinfo') {
            include 'mrekrutmen-info.php';
          }
          elseif($page=='rktd') {
            include 'mrekrutmen-dosen.php';
          }
          elseif($page=='rktt') {
            include 'mrekrutmen-tendik.php';
          }
          elseif($page=='mtendik') {
            include 'mtendik.php';
          }
          elseif($page=='mtendik_add') {
            include 'mtendik-add.php';
          }
          elseif($page=='mtendik_edit') {
              include 'mtendik-edit.php';
          }
          elseif($page=='mtendik_info') {
              include 'mtendik-info.php';
          }
          elseif($page=='mdosen_add') {
              include 'mdosen-add.php';
          }
          elseif($page=='mdosen_edit') {
              include 'mdosen-edit.php';
          }
          elseif($page=='mdosen_info') {
              include 'mdosen-info.php';
          }
          elseif($page=='mdosen_pendidikan_add') {
              include 'mdosen-pendidikan-add.php';
          }
          elseif($page=='mdosen_jabatan_add') {
              include 'mdosen-jabatan-add.php';
          }
          elseif($page=='mdosen_pangkat_add') {
              include 'mdosen-pangkat-add.php';
          }
          elseif($page=='mdosen_skp_add') {
              include 'mdosen-skp-add.php';
          }
          elseif($page=='mdosen_kgb_add') {
              include 'mdosen-kgb-add.php';
          }
          elseif($page=='mdosen_lh_add') {
              include 'mdosen-lh-add.php';
          }
          elseif($page=='mdosen_dp_add') {
              include 'mdosen-dp-add.php';
          }
          elseif($page=='mdosen_backup') {
              include 'mdosen-backup.php';
          }
          elseif($page=='mdosen_restore') {
              include 'mdosen-restore.php';
          }
          elseif($page=='mdosen_import') {
            include 'mdosen-import.php';
        }
        elseif($page=='mdosen_users') {
          include 'mdosen-users.php';
      }
          elseif($page=='settings') {
              include 'settings.php';
          }
          else {
            include 'chart.php';
          }

           ?>

				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<!-- Main Footer -->
	<footer class="main-footer">
	<!-- To the right -->
	<!-- Default to the left -->
	<h6>Copyright &copy; 2021 <a href="#" style="color:red;">UNIVERSITY</a>. All rights reserved.</h6> </footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/datepicker/js/bootstrap-datepicker.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script>
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script type="text/javascript">
function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        ro = new XMLHttpRequest();
    }
    return ro;
}
var xmlhttp = createRequestObject();
var xmlhttp2 = createRequestObject();
function rubah(combobox)
{
    var kode = combobox.value;
    if (!kode) return;
    xmlhttp.open('get', 'getfakultas.php?id_fak='+kode, true);
    xmlhttp.onreadystatechange = function() {
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200))
        {
             document.getElementById("divkedua").innerHTML = xmlhttp.responseText;
        }
        return false;
    }
    xmlhttp.send(null);
}
function rubah2(combobox)
{
    var kode = combobox.value;
    if (!kode) return;
    xmlhttp2.open('get', 'getdosen.php?id_prod='+kode, true);
    xmlhttp2.onreadystatechange = function() {
        if ((xmlhttp2.readyState == 4) && (xmlhttp2.status == 200))
        {
             document.getElementById("divketiga").innerHTML = xmlhttp2.responseText;
        }
        return false;
    }
    xmlhttp2.send(null);
}
$(function(){
$(".datepicker").datepicker({
format: 'yyyy-mm-dd',
autoclose: true,
todayHighlight: true,
});
});


</script>
<!--- Chart.js--->
<script>
 $(function () {
 //-------------
    //- BAR CHART -
    //-------------
  var chartTD = new CanvasJS.Chart("chartTotalDosen", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: ""
	},
	axisY: {
		title: "Jenjang Pendidikan"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## Dosen",
		dataPoints: <?php echo json_encode($totalDosen, JSON_NUMERIC_CHECK); ?>
	}]
});
chartTD.render();

var chartJF = new CanvasJS.Chart("chartJabatan", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: ""
	},
	axisY: {
		title: "Jabatan Fungsional"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## Dosen",
		dataPoints: <?php echo json_encode($jabatanDosen, JSON_NUMERIC_CHECK); ?>
	}]
});
chartJF.render();
 
	})
</script>


<script>
  $(function () {
    $("#tabel-data1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#tabel-data2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });

  });
</script>
<script>
var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".pdf", ".png"];
function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }

                if (!blnValid) {
                    alert("Maaf, Data Gagal Di Unggah! File Yang Diupload Hanya Boleh JPG/PNG/PDF. Silahkan Periksa Kembali File Anda.");
                    return false;
                }
            }
        }
    }

    return true;
}
</script>
</body>
</html>
