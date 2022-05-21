<?php
error_reporting (0);
require_once("session.php");
require_once("../../config/database.php");

//MENGAMBIL DATA GOLONGAN//

$query1 = "SELECT * FROM tb_mda_fak";
  $rs1 = mysqli_query($koneksi, $query1);
  $fak = "";
  while ($r1 = mysqli_fetch_array($rs1))
  {
    $fak .= "<option value='$r1[id_fak]'>$r1[nama_fak]</option>
"; }
?>
<div class="container-fluid">
  <div class="alert alert-primary alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h5><i class="icon fas fa-info"></i> Perhatian</h5>
  </p>Data NIP & Password LHKASN Khusus Untuk PNS.</p>
     Apabila Bukan PNS, Tidak Perlu Mengisi Data Tersebut. Terimakasih</div>
      <div class="card-body" style="background:white;">
            <form class="" action="controller?page=tambah_dosen" method="post">
              <div class="container-fluid" style="background:white;">
                  <div class="row" style="background:white;">
                    <table class="table" border="0">
                    <tr>
                      <td>NIDN</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="nidn" class="form-control" placeholder="NIDN" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>NIP <p style="font-size:14px;">(Khusus PNS)</p></td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <input type="text" name="nip" class="form-control" placeholder="NIP (Khusus PNS)">

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input type="text" name="nik" class="form-control" placeholder="NIK" >

                      </div>
                      <td>
                      </tr>
                      <tr>
                        <td>Nomor Serdik</td>
                        <td>:</td>
                        <td>
                          <div class="input-group mb-3">
                            <input type="text" name="noserdik" class="form-control" placeholder="Nomor Serdik" >

                          </div>
                          <td>
                          </tr>
                      <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                      <div class="input-group mb-3">
                        <input type="text" name="nama_dosen" class="form-control" placeholder="Nama Dosen" required>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <select class="form-control" name="jk" required>
                                        <option value="#" disabled selected>Pilih Jenis Kelamin</option>
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
                        <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" required>

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input placeholder="Tanggal Lahir" type="date" class="form-control" name="tgl_lahir" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <select class="form-control" name="pt" required>
                                        <option value="#" disabled selected>Pilih Pendidikan Terakhir</option>
                                        <option value="-">Tanpa Jenjang</option>
                                        <option value="Profesi">Profesi</option>
                                        <option value="SP1">SP-1</option>
                                        <option value="SP2">SP-2</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                          </select>

                      </div>
                      <td>
                      </tr>
                      <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <select class="form-control" name="jabatan" required>
                                        <option value="#" disabled selected>Pilih Jabatan</option>
                                        <?php 
                                          $jb=mysqli_query($koneksi,'SELECT * FROM tb_add_jbt');
                                          while ($jb1=mysqli_fetch_array($jb)) {
                                            echo "<option value='$jb1[id_jbt]'>$jb1[nama_jbt]</option>";
                                          }
                                        ?>
                          </select>

                      </div>
                      <td>
                      </tr>
                      <tr>
                    <td>Pangkat</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                      <select class="form-control" name="pangkat" required>
                                        <option value="#" disabled selected>Pilih Pangkat</option>
                                        <?php 
                                          $jb=mysqli_query($koneksi,'SELECT * FROM tb_add_pk');
                                          while ($jb1=mysqli_fetch_array($jb)) {
                                            echo "<option value='$jb1[id_pkt]'>$jb1[nama_pkt]</option>";
                                          }
                                        ?>
                          </select>

                      </div>
                      <td>
                      </tr>
                      <tr>
                          <td>Status Pegawai</td>
                          <td>:</td>
                          <td>
                            <div class="input-group mb-3">
                              <select class="form-control" name="status_pegawai" required>
                                              <option value="#" disabled selected>Pilih Status (PNS/YPP)</option>
                                              <option value="PNS">PNS</option>
                                              <option value="YPP">YPP</option>
                                </select>

                            </div>
                            <td>
                            </tr>
                            <tr>
                              <td>Status Aktifitas</td>
                              <td>:</td>
                              <td>
                                <div class="input-group mb-3">
                                  <select class="form-control" name="status_aktif" required>
                                                  <option value="#" disabled selected>Pilih Status (Aktif/MD/Pensiun/NIDK)</option>
                                                  <option value="Aktif">Aktif</option>
                                                  <option value="Pensiun">Pensiun</option>
                                                  <option value="MD">Meninggal Dunia</option>
                                                  <option value="NIDK">NIDK</option>
                                    </select>
                                </div>
                              </td>
                            </tr>
                          <tr>
                            <td>TMT Dosen Tetap</td>
                            <td>:</td>
                            <td>
                          <div class="input-group mb-3">
                            <input placeholder="Diangkat Per Tanggal" type="date" class="form-control" name="tmtdt" required>
                          </div>
                        </td>
                      </tr>
                  <tr>
                    <td>Unit Kerja/Fakultas</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <select class="form-control" name="fak" onchange='javascript:rubah(this)'>
                        <option value="#" disabled selected>Pilih Unit Kerja/Fakultas</option>
                         <?php echo $fak; ?></option>
                        </select>
                      </div>
                    </td>
                  </tr>
                      <tr>
                        <td>Program Studi</td>
                        <td>:</td>
                        <td>
                      <div id='divkedua'></div>
                    </td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Email" >

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>No Telp/HP</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input type="text" name="nohp" class="form-control" placeholder="No Telp/HP" >

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>NPWP</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input type="text" name="npwp" class="form-control" placeholder="NPWP" >

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Nama Bank</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input type="text" name="namabank" class="form-control" placeholder="Nama Bank (Contoh: BRI)" >

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Nomor Rekening</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input type="text" name="norekening" class="form-control" placeholder="Nomor Rekening" >

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Nama Pemilik Rekening</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input type="text" name="prekening" class="form-control" placeholder="Nama Pemilik Rekening" >

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Password LHKASN <p style="font-size:14px;">(Khusus PNS)</p> </td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                        <input type="text" name="passlhkasn" class="form-control" placeholder="Password LHKASN" >

                      </div>
                    </td>
                  </tr>
                </table>
                    </div>

                    </div>
                  </div>
                  <br>
              &nbsp;<button type="submit" class="btn btn-primary" name="button"> Submit</button>
            </form>
            <br><br><br>
          </div>

</div>
</div>
