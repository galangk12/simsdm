<?php
error_reporting (0);
require_once("session.php");
require_once("../../config/database.php");

//MENGAMBIL DATA FAKULTAS//

$query1 = "SELECT * FROM tb_mda_fak";
  $rs1 = mysqli_query($koneksi, $query1);
  $fak = "";
  while ($r1 = mysqli_fetch_array($rs1))
  {
    $fak .= "<option value='$r1[id_fak]'>$r1[nama_fak]</option>
"; }


?>
<div class="container-fluid">
<?php
$nidn = $_GET['id'];
$query2 = "SELECT * FROM tb_mdo_dosen a JOIN tb_mda_fak b
ON a.id_fak = b.id_fak WHERE a.nidn = $nidn";
$d = mysqli_query($koneksi,$query2);
$data = mysqli_fetch_array($d);
 ?>
 <div class="card-body" style="background:white;">
       <form class="" action="controller?page=edit_dosen" method="post">
         <div class="container-fluid" style="background:white;">
             <div class="row" style="background:white;">
                <input type="hidden" name="nidn" class="form-control" value="<?php echo $data['nidn']; ?>" required>
               <table class="table" border="0">
               <tr>
                 <td>NIDN</td>
                 <td>:</td>
                 <td>
                   <div class="input-group mb-3">
                     <input type="text" name="nidnshow" class="form-control" value="<?php echo $data['nidn']; ?>" disabled>
                   </div>
                 </td>
               </tr>
               <tr>
                 <td>NIP <p style="font-size:14px;">(Khusus PNS)</p></td>
                 <td>:</td>
                 <td>
                 <div class="input-group mb-3">
                   <input type="text" name="nip" class="form-control" value="<?php echo $data['nip']; ?>">

                 </div>
               </td>
             </tr>
             <tr>
               <td>NIK</td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <input type="text" name="nik" class="form-control" value="<?php echo $data['nik']; ?>" >

                 </div>
                 <td>
                 </tr>
                 <tr>
                   <td>Nomor Serdik</td>
                   <td>:</td>
                   <td>
                     <div class="input-group mb-3">
                       <input type="text" name="noserdik" class="form-control" value="<?php echo $data['noserdik']; ?>" >

                     </div>
                     <td>
                     </tr>
                 <tr>
                   <td>Nama Lengkap</td>
                   <td>:</td>
                   <td>
                 <div class="input-group mb-3">
                   <input type="text" name="nama_dosen" class="form-control" value="<?php echo $data['nama_dosen']; ?>" required>
                 </div>
               </td>
             </tr>
             <tr>
               <td>Jenis Kelamin</td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <select class="form-control" name="jk" required>
                     <option value="<?php echo $data['jk'] ?>" selected>
                          <?php if($data['jk'] =='L') {
                            echo "Laki-Laki";
                          }
                          else {
                            echo "Perempuan";
                          }  ?></option>
                                   <option value="L">Laki-Laki</option>
                                   <option value="P">Perempuan</option>
                     </select>

                 </div>
               </td>
             </tr>
                 <tr>
                   <td>Tempat Lahir</td>
                   <td>:</td>
                   <td>
                 <div class="input-group mb-3">
                   <input type="text" name="tmp_lahir" class="form-control" value="<?php echo $data['tmp_lahir']; ?>" required>

                 </div>
               </td>
             </tr>
             <tr>
               <td>Tanggal Lahir</td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <input value="<?php echo $data['tgl_lahir']; ?>" type="text" class="form-control date  datepicker" name="tgl_lahir" required>
                 </div>
               </td>
             </tr>

             <tr>
               <td>Alamat</td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>">

                 </div>
               </td>
             </tr>
             <tr>
               <td>Pendidikan Terakhir</td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <select class="form-control" name="pt" required>
                                   <option value="<?php echo $data['pt']; ?>" selected><?php echo $data['pt']; ?></option>
                                   <option value="SMA/Sederajat">SMA/Sederajat</option>
                                   <option value="D3">D3</option>
                                   <option value="S1">S1</option>
                                   <option value="S1">S2</option>
                                   <option value="S1">S3</option>
                     </select>

                 </div>
                 <td>
                 </tr>

                   <tr>
                       <td>TMT Dosen Tetap</td>
                       <td>:</td>
                       <td>
                     <div class="input-group mb-3">
                       <input value="<?php echo $data['tmtdt']; ?>" type="text" class="form-control date  datepicker" name="tmtdt" required>
                     </div>
                   </td>
                 </tr>
               <tr>
               <td>Email</td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <input type="text" name="email" class="form-control" value="<?php echo $data['email']; ?>" >

                 </div>
               </td>
             </tr>
             <tr>
               <td>No Telp/HP</td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <input type="text" name="nohp" class="form-control" value="<?php echo $data['nohp']; ?>" >

                 </div>
               </td>
             </tr>
             <tr>
               <td>NPWP</td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <input type="text" name="npwp" class="form-control" value="<?php echo $data['npwp']; ?>" >

                 </div>
               </td>
             </tr>
             <tr>
               <td>Nama Bank</td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <input type="text" name="namabank" class="form-control" value="<?php echo $data['namabank']; ?>" >

                 </div>
               </td>
             </tr>
             <tr>
               <td>Nomor Rekening</td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <input type="text" name="norekening" class="form-control" value="<?php echo $data['norekening']; ?>" >

                 </div>
               </td>
             </tr>
             <tr>
               <td>Nama Pemilik Rekening</td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <input type="text" name="prekening" class="form-control" value="<?php echo $data['prekening']; ?>" >

                 </div>
               </td>
             </tr>
             <tr>
               <td>Password LHKASN <p style="font-size:14px;">(Khusus PNS)</p> </td>
               <td>:</td>
               <td>
                 <div class="input-group mb-3">
                   <input type="text" name="passlhkasn" class="form-control" value="<?php echo $data['passlhkasn']; ?>" >

                 </div>
               </td>
             </tr>
           </table>
               </div>

               </div>
             </div>
             <br>
         &nbsp;<button type="submit" class="btn btn-success" name="button"> Ubah Data</button>
       </form>
       <br><br><br>
     </div>
</div>
</div>
