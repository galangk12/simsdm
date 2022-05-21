<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
 <div class="container-fluid">
  <div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-info"></i> Perhatian!</h5>Scan Barcode Di Tempat Yang Sudah 
  Ditentukan Untuk Melakukan Absensi. Terimakasih
  </div>
    <video id="scanbc" style="width:100%;height:100%;"></video>
    <script type="text/javascript">
    //   let scanner = new Instascan.Scanner({ video: document.getElementById('scanbc') });
    let scanner = new Instascan.Scanner({
    video: document.getElementById('scanbc'),
    continuous: true,
    mirror: false,
    captureImage: false,
    backgroundScan: true,
    refractoryPeriod: 1000,
    scanPeriod: 1
});
      scanner.addListener('scan', function (content) {
    window.location.href='index?page=portalabsen&code='+(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
     if (cameras.length > 0) {
        var selectedCam = cameras[0];
        $.each(cameras, (i, c) => {
            if (c.name.indexOf('back') !== -1) {
                selectedCam = c;
                return false;
            }
        });

        scanner.start(selectedCam);
    }
      });
    </script>

  </div>