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
      <div class="card-body" style="background:white;">
            <form class="" action="controller?page=tambah_tendik" method="post">
              <div class="container-fluid" style="background:white;">
                  <div class="row" style="background:white;">
                    <table class="table" border="0">
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
                      <td>NRP</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="nrp" class="form-control" placeholder="NRP" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Nomor SK</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="nosk" class="form-control" placeholder="Nomor SK" required>
                        </div>
                      </td>
                    </tr>
                      <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                      <div class="input-group mb-3">
                        <input type="text" name="nama_tendik" class="form-control" placeholder="Nama Lengkap" required>
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
                                        <option value="SMAK">SMA/SMK/SEDERAJAT</option>
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
                    <td>Golongan</td>
                    <td>:</td>
                    <td>
                      <div class="input-group mb-3">
                      <select class="form-control" name="pangkat" required>
                                        <option value="#" disabled selected>Pilih Golongan</option>
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
                            <td>TMT Tendik</td>
                            <td>:</td>
                            <td>
                          <div class="input-group mb-3">
                            <input placeholder="Diangkat Per Tanggal" type="date" class="form-control" name="tmtdt" required>
                          </div>
                        </td>
                      </tr>
                  <tr>
                    <td>Unit Kerja / Fakultas</td>
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
                      <td>Jabatan</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <select name="jabatan" class="form-control" required>
                              <option selected disabled>Pilih Salah Satu</option>
                              <option value="ARSIPARIS">ARSIPARIS</option>
                              <option value="LABORAN">LABORAN</option>
                              <option value="PRANATA KOMPUTER">PRANATA KOMPUTER</option>
                              <option value="PUSTAKAWAN">PUSTAKAWAN</option>
                              <option value="PRANATA HUMAS">PRANATA HUMAS</option>
                              <option value="ANALIS DATA KEUANGAN">ANALIS DATA KEUANGAN</option>
                              <option value="ANALIS DATA AKADEMIK">ANALIS DATA AKADEMIK</option>
                              <option value="ANALIS DATA KINERJA PEGAWAI">ANALIS DATA KINERJA PEGAWAI</option>
                              <option value="OPERATOR SARANA PENUNJANG (DRIVER)">OPERATOR SARANA PENUNJANG (DRIVER)</option>
                              <option value="KEAMANAN (SECURITY)">KEAMANAN (SECURITY)</option>
                              <option value="KEBERSIHAN">KEBERSIHAN</option>
   
                            </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                              <td>Status Aktifitas</td>
                              <td>:</td>
                              <td>
                                <div class="input-group mb-3">
                                  <select class="form-control" name="status" required>
                                                  <option value="#" disabled selected>Pilih Status (Aktif/MD/Pensiun)</option>
                                                  <option value="Aktif">Aktif</option>
                                                  <option value="Pensiun">Pensiun</option>
                                                  <option value="MD">Meninggal Dunia</option>
                                    </select>
                                </div>
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
