<?php
require_once 'session.php';
$id =$_SESSION['username'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_users where username='$id' ");
$result = mysqli_fetch_array($query);
 ?>
<div class="card-body" style="background:white;">
                <form class='' action='controller.php?page=setting_user' method='post'>
                 <div class="container-fluid" style="background:white;">
                  <div class="row" style="background:white;">
                  <h5>Ubah Password</h5>
                  <input type="hidden" name="nidn" class="form-control" value="<?= $result['nohp']?>" required>
                    <table class="table" border="0">
                    <tr>
                      <td>Password Lama</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <input type="password" name="password_old" class="form-control" placeholder="Masukkan Password Lama" required>
                      </div>
                    </td>
                   </tr>
                   <tr>
                      <td>Password Baru</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <input type="password" name="password_new" class="form-control" placeholder="Masukkan Password Baru" required>
                      </div>
                    </td>
                   </tr>
                    </table>
                    <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
            </div>
        </div>
</div>