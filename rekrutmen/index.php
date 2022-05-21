<?php
require_once '../config/databaserekrutmen.php';
$p=isset($_GET['p']) ? ($_GET['p']) : "";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>REKRUTMEN UNIVERSITY</title>
    <link rel="icon"
      type="image/png"
      href="../dist/img/logo.jpg">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <script src="js/font-awesome.min.js"></script>
    <link href="css/styles.css" rel="stylesheet" />
</head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom ">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"> <img src="assets/logo.png" style="width:50px;height:50px;" alt=""> &nbsp;REKRUTMEN UNIVERSITY</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Informasi</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
             if($p=='dosen') {
                 include 'rdosen.php';
             }
             elseif($p=='tendik') {
                 include 'rtendik.php';
             }else {

             
        ?>
            <div class="masthead">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 text-center">
                            <img src="assets/vbanner2.jpg" style="width:90%;height:90%;" alt="">
                           
                        </div>
                        <div class="col-lg-4">
                            <h2 class="m-0 text-center">APPLY SEKARANG</h2>
                            <p class="m-0 text-center" style="color: rgba(255, 0, 0, .6);">Pilih Posisi Yang Akan Diapply</p>
                            <div class="py-5 px-4 masthead-cards" >
                                <div class="d-flex">
                                    <a href="#" class="w-50 pr-3 pb-4" data-toggle="modal" data-target="#modal-lupa">
                                        <div class="card border-0 border-bottom-red shadow-lg shadow-hover" style="margin:5px;">
                                            <div class="card-body text-center">
                                                <div class="text-center">
                                                    <i class="fa fa-4x fa-suitcase my-2"></i>
                                                </div>
                                                <p style="font-size:10px;"><br>Dosen<br></p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="w-50 pl-3 pb-4" data-toggle="modal" data-target="#modal-lupa">
                                        <div class="card border-0 border-bottom-red shadow-lg shadow-hover" style="margin:5px;">
                                            <div class="card-body text-center">
                                                <div class="text-center">
                                                    <i class="fa fa-4x fa-suitcase my-2"></i>
                                                </div>
                                                <p style="font-size:10px;">Tenaga Kependidikan</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="shape"></div>
                            </div>
                        </div>
                        <div class="rown align-items-center">
                        <p class="m-0 text-center">Informasi Rekrutmen? Silahkan Klik Login Dibawah Ini<br><br>
                        <a href="#" class="btn btn-danger" style="color: white;text-decoration: none;width:300px;"><b>Informasi</b></a></p><br><br>
                    </div>
                    </div>
                </div>
             
            </div>
            <?php
             }
            ?>
                 <!-- Grid container -->
  <footer class="py-3 bg-abang">
      <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">KONTAK REKRUTMEN</h5>
            <ul class="fa-ul" style="margin-left: 1.65em;">
             <li class="mb-2">
                 <span class="fa-li"><i class="fa fa-envelope"></i></span><span class="ms-2">untag@untagsmg.ac.id</span>
               </li>
                <li class="mb-2">
                  <span class="fa-li"><i class="fab fa-whatsapp"></i></span><span class="ms-2">081326515069</span>
                </li>
                <li class="mb-2">
                  <span class="fa-li"><i class="fab fa-whatsapp"></i></span><span class="ms-2">085740311995</span>
                </li>

              </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4 pb-1">Media Sosial</h5>
  
            <ul class="fa-ul" style="margin-left: 1.65em;">
              <li class="mb-2">
                <span class="fa-li"><i class="fab fa-facebook"></i></span><span class="ms-2">Universitas 17 Agustus 1945 Semarang</span>
              </li>
              <li class="mb-2">
                <span class="fa-li"><i class="fab fa-youtube"></i></span><span class="ms-2">Universitas 17 Agustus 1945 Semarang</span>
              </li>
              <li class="mb-2">
                <span class="fa-li"><i class="fab fa-instagram"></i></span><span class="ms-2">@Untag.semarang</span>
              </li>
              <li class="mb-2">
                <span class="fa-li"><i class="fab fa-twitter"></i></span><span class="ms-2">@untagsemarang1</span>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">UNIVERSITAS 17 AGUSTUS 1945 SEMARANG</h5>
            <ul class="fa-ul" style="margin-left: 1.65em;">
                <li class="mb-1" >
                  <span class="fa-li"><i class="fa fa-map-marker-alt"></i></span><span class="ms-2">Jl. Pawiyatan Luhur, Bendan Dhuwur, Semarang – 50233</span>
                </li>
                <li class="mb-2">
                  <span class="fa-li"><i class="fa fa-phone"></i></span><span class="ms-2">(024) 8441771</span>
                </li>
                <li class="mb-2">
                  <span class="fa-li"><i class="fa fa-envelope"></i></span><span class="ms-2">untag@untagsmg.ac.id</span>
                </li>
                <li class="mb-2">
                    <span class="fa-li"><i class="fa fa-globe"></i></span><span class="ms-2">https://untagsmg.ac.id</span>
                  </li>
              </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>

                        </footer>
                        <svg style="pointer-events: none" class="wave" width="100%" height="50px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
                    <defs>
                        <style>
                            .a {
                                fill: none;
                            }
                            
                            .b {
                                clip-path: url(#a);
                            }
                            
                            .c,
                            .d {
                                fill: #ff5353;
                            }
                            
                            .d {
                                opacity: 0.5;
                                isolation: isolate;
                            }
                        </style>
                        <clipPath id="a">
                            <rect class="a" width="1920" height="75"></rect>
                        </clipPath>
                    </defs>
                    <title>wave</title>
                    <g class="b">
                        <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
                    </g>
                    <g class="b">
                        <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
                    </g>
                    <g class="b">
                        <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
                    </g>
                    <g class="b">
                        <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
                    </g>
                </svg>
        <div class="bg-black"><p class="m-0 text-center text-white small">Copyright &copy; UNIVERSITY 2021</p></div>   
        <div class="modal fade" id="modal-lupa">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header bg-danger">
                          <h5 class="modal-title text-white">Sorry..</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
        <div class="modal-body">
          <p>Maaf Rekrutmen Telah Ditutup<br>Terimakasih Atas Antusiasme Yang Luar Biasa.</p>
        </div>
      </div>
    </div>
    </div> 
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
      <script src="../plugins/jquery/jquery.min.js"></script>
      <script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../plugins/datepicker/js/bootstrap-datepicker.js"></script>
      <!-- Core theme JS-->
      <script src="js/scripts.js"></script>
    </body>
  </html>
  