 <section id="scroll">
          <div class="container"> <br>
              <h6 class="text-center">REKRUTMEN DOSEN UNTAG SEMARANG</h6><br>
              <!-- Nav tabs -->
              <div class="accordion" id="accordionExample">
              <form action="rcontroller.php?p=add_karir" method="post" enctype="multipart/form-data">
              <input type="hidden" name="jalur" class="form-control" value="Dosen">
              <input type="hidden" name="pt" class="form-control" value="-">
              <input type="hidden" name="tl" class="form-control" value="-">
              <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Informasi Data Diri
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="alert alert-info text-center">
                            <strong>Informasi Data Diri</strong> <p>* Wajib Diisi</p>
                          </div>
                <table class="table">
                <tr>
                      <td>NIK *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="nik" class="form-control" placeholder="NIK" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Nama Lengkap *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Tempat Lahir *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Alamat Lengkap *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <textarea type="date" name="alamat" class="form-control" placeholder="Alamat Lengkap" required></textarea>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Telp / WA *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="number" name="nohp" class="form-control" placeholder="Telp / WA" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Email *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Bidang Keilmuan Yang Dilamar *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <select name="bidang" class="form-select" required>
                              <option selected disabled>Pilih Salah Satu</option>
                              <option value="HUKUM">HUKUM</option>
                              <option value="ILMU SOSIAL & ILMU POLITIK">ILMU SOSIAL & ILMU POLITIK</option>
                              <option value="EKONOMIKA & BISNIS">EKONOMIKA & BISNIS</option>
                              <option value="TEKNIK">TEKNIK</option>
                              <option value="TEKNOLOGI PERTANIAN">TEKNOLOGI PERTANIAN</option>
                              <option value="BAHASA & BUDAYA">BAHASA & BUDAYA</option>
   
                            </select>
                        </div>
                      </td>
                    </tr>
                </table>
                <p>Tanda Asterik (*) artinya Form wajib di isi. Pastikan data yang anda masukkan sudah tepat, karena data yang sudah dimasukkan tidak akan bisa diedit.</p>

                        </div>
                      </div>
              </div>

              <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Informasi Pendidikan
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="alert alert-info text-center">
                            <strong>Informasi Pendidikan</strong> <p>* Wajib Diisi</p>
                          </div>
                          <table class="table">
                    <tr>
                      <td>Perguruan Tinggi (S1) *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="pt1" class="form-control" placeholder="Nama Perguruan Tinggi S1" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Program Studi (S1) *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="pd1" class="form-control" placeholder="Nama Program Studi S1" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Tahun Lulus (S1) *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="number" name="tl1" class="form-control" placeholder="Tahun Lulus S1" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Perguruan Tinggi (S2) *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="pt2" class="form-control" placeholder="Nama Perguruan Tinggi S2" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Program Studi (S2) *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="pd2" class="form-control" placeholder="Nama Program Studi S2" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Tahun Lulus (S2) *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="number" name="tl2" class="form-control" placeholder="Tahun Lulus S2" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Perguruan Tinggi (S3) (Jika Ada)</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="pt3" class="form-control" placeholder="Nama Perguruan Tinggi S3">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Program Studi (S3) </td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="pd3" class="form-control" placeholder="Nama Program Studi S3">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Tahun Lulus (S3)</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="number" name="tl3" class="form-control" placeholder="Tahun Lulus S3">
                        </div>
                      </td>
                    </tr>
      </table>
      <p>Tanda Asterik (*) artinya Form wajib di isi. Pastikan data yang anda masukkan sudah tepat, karena data yang sudah dimasukkan tidak akan bisa diedit.</p>
                        </div>
                      </div>
              </div>

              <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                          Upload Berkas
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="alert alert-info text-center">
                            <strong>Upload Berkas</strong> <p>* Wajib Diisi</p>
                          </div>
                          <table class="table">
                    <tr>
                      <td>Surat Lamaran (Tulis Tangan) *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="bsl" class="form-control" placeholder="Surat Lamaran" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>KTP *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="bktp" class="form-control" placeholder="KTP" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Curriculum Vitae (CV) *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="bcv" class="form-control" placeholder="CV" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Ijazah S1 *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="bs1" class="form-control" placeholder="S1" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Transkrip Nilai S1 *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="btn1" class="form-control" placeholder="TS1" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Ijazah S2 *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="bs2" class="form-control" placeholder="S2" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Transkrip Nilai S2 *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="btn2" class="form-control" placeholder="TS2" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Ijazah S3 (Jika Ada)</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="bs3" class="form-control" placeholder="S3">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Transkrip Nilai S3 (Jika Ada) </td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="btn3" class="form-control" placeholder="TS3">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Surat Keterangan Sehat Dari Dokter *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="bsksd" class="form-control" placeholder="SKSD" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>SKCK *<br><small>Surat Keterangan Catatan Kepolisian</small></td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="bskck" class="form-control" placeholder="SKCK" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Pas Foto 4x6 *</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="bpf" class="form-control" placeholder="Pas Foto" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Piagam Prestasi Yang Mendukung *<br><small>Dijadikan Satu File PDF</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="file" name="bpp" class="form-control" placeholder="Piagam" required>
                        </div>
                      </td>
                    </tr>

      </table>
      <div class="panel panel-info">
                            <div class="panel-body">
                              <div class="form-group">
                            <input type="checkbox" name=""> &nbsp;<b>Privasi &amp; Keamanan (cek disini)</b>
                            <ul style="text-align: justify;">
                              <li>Saya mengajukan lamaran online Untag Semarang dan sepenuhnya akan mematuhi semua prosedur dan peraturan yang berlaku.
                              </li>
                              <li>Saya mengisi formulir dengan jujur sesuai dengan keadaan yang sebenarnya. Jika terjadi ketidaksesuaian, saya rela menanggung konsekuensinya.</li>
                            </ul>	
                            <button class="btn btn-success" onclick="return confirm('Pastikan Data Sudah Diisi Dengan Benar')">Daftar</button>
                            </form>
                            <a href="index" class="btn btn-primary">Kembali</a>
                            </div>
                          </div>
                          </div> 

                        </div>
                      </div>
              </div>
              </div>
              <br><br>
           
    </section>
