<?php
require_once("../../config/database.php");
require_once("count.php");
require_once("session.php");
$totalDosen = array( 
	array("y" => $td1[0], "label" => "Profesi" ),
	array("y" => $td2[0], "label" => "SP-1" ),
	array("y" => $td3[0], "label" => "SP-2" ),
	array("y" => $td4[0], "label" => "D3" ),
	array("y" => $td5[0], "label" => "D4" ),
	array("y" => $td6[0], "label" => "S1" ),
	array("y" => $td7[0], "label" => "S2" ),
	array("y" => $td8[0], "label" => "S3" ),
	array("y" => $td9[0], "label" => "Tanpa Jenjang" ),
);
$jabatanDosen = array( 
	array("y" => $jd1[0], "label" => "Ahli Madya" ),
	array("y" => $jd2[0], "label" => "Lektor" ),
	array("y" => $jd3[0], "label" => "Lektor Kepala" ),
	array("y" => $jd4[0], "label" => "Guru Besar/Profesor" ),
	array("y" => $jd5[0], "label" => "Tanpa Jabatan" ),
);
 ?>
<section class="content" style="width:100%;">
<div class="container-fluid" >
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h5><i class="icon fas fa-info"></i> Welcome!</h5>
		 Selamat Datang <?php echo $_SESSION['username'] ?> Di SIM SDM UNIVERSITY.</div>

	<div class="row">
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-info">
				<div class="inner">
					<h3><?php echo $r1[0] ?></h3>

					<p>Total Dosen</p>
				</div>
				<div class="icon">
					<i class="fa fa-users" aria-hidden="true"></i>
				</div>
				<a href="#" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
	 <div class=" col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box" style="background:#f39c12;color:white;">
        <div class="inner">
          <h3><?php echo $te1[0] ?></h3>
          <p>Total Tendik</p>
        </div>
        <div class="icon">
          <i class="fa fa-briefcase" aria-hidden="true"></i>
        </div>
        <a href="#" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-danger">
				<div class="inner">
					<h3><?php echo $r2[0] ?></h3>

					<p>Dosen Aktif</p>
				</div>
				<div class="icon">
					<i class="fa fa-user-plus" aria-hidden="true"></i>
				</div>
				<a href="#" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-primary">
				<div class="inner">
					<h3><?php echo $r3[0] ?></h3>

					<p>Dosen NIDK</p>
				</div>
				<div class="icon">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<a href="#" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-success">
				<div class="inner">
					<h3><?php echo $r4[0] ?></h3>

					<p>Dosen Pensiun</p>
				</div>
				<div class="icon">
					<i class="fa fa-child" aria-hidden="true"></i>
				</div>
				<a href="#" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>



</div> <!---CHART--->
<?php
if($_SESSION['status']=="a1") {
?>
		<div class="row">
			<div class="col-lg">
				<div class="card card-info">
              		<div class="card-header">
                		<h3 class="card-title">Jenjang Pendidikan</h3>
              				 <div class="card-tools">
                  				<button type="button" class="btn btn-tool" data-card-widget="collapse">
                   				 <i class="fas fa-minus"></i>
                  				</button>
                			</div>
           			</div>
              		<div class="card-body">
                		<div class="chart">
						<div id="chartTotalDosen" style="height: 370px; width: 100%;"></div>
                		</div>
              		</div>
            	</div>
			</div>
			<div class="col-lg">
				<div class="card card-danger">
              		<div class="card-header">
                		<h3 class="card-title">Jabatan Fungsional</h3>
              				 <div class="card-tools">
                  				<button type="button" class="btn btn-tool" data-card-widget="collapse">
                   				 <i class="fas fa-minus"></i>
                  				</button>
                			</div>
           			</div>
              		<div class="card-body">
                		<div class="chart">
						<div id="chartJabatan" style="height: 370px; width: 100%;"></div>
                		</div>
              		</div>
            	</div>
		</div>
	</div>
	<?php
		}
	?>
	
	</div>

</div>

</section>
