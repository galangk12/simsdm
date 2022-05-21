<?php
error_reporting (0);
require_once("session.php");
require_once("../../config/database.php");
?>
<div class="container-fluid">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<i class="fa fa-plus"></i> Tambah User
</button>


<div class="table-responsive">
<table id="tabel-data1"  class="table table-bordered table-striped">
<thead >
<tr>
  <th>No</th>
  <th>Username</th>
  <th>Fakultas</th>
  <th>Aksi</th>
</tr>
</thead>
<tbody>
  <?php
    $query1 = "SELECT * FROM tb_users a JOIN tb_mda_fak b ON a.id_fak = b.id_fak WHERE status='a2' ";
    $dt = mysqli_query($koneksi, $query1);
      if (mysqli_num_rows($dt)== 0 ) { //Mengecek Total Data Apabila 0 Maka Data Tidak Ditemukan
           echo "<br><div class='alert alert-danger alert-dismissible'>
        <button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h6><center>Maaf Data Tidak Ada</center></h6></div>";
                }
      else {

    $no = 1;
    while ($data = mysqli_fetch_assoc($dt))
    {

   ?>
   <!-- EDIT Modal -->

<div class="modal fade" id="exampleModal2<?php echo $data['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-primary">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php 
        $id = $data['id_user'];
        $qq = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM tb_users WHERE id_user = $id "));
      ?>
      <div class="modal-body">
        <form action="controller?page=edit_user&id=<?php echo $qq['username'] ?>" method="post">
         <div class="input-group mb-3">
             <input class="form-control" type="text" name="username" value="<?php echo $qq['username'] ?>" required/>
        </div>
        <div class="input-group mb-3">
          <input class="form-control" type="text" name="password" value="<?php echo $qq['password'] ?>" required/>
        </div>
        <small>Pilih Fakultas (Abaikan Jika Tidak Diganti) :</small>
        <div class="input-group mb-3">
          
          <select class="form-control" name="fak">
                                        <option value="<?php echo $qq['id_fak']?>" selected>Pilih Fakultas</option>
                                        <?php 
                                          $jb=mysqli_query($koneksi,'SELECT * FROM tb_mda_fak');
                                          while ($jb1=mysqli_fetch_array($jb)) {
                                            echo "<option value='$jb1[id_fak]'>$jb1[nama_fak]</option>";
                                          }
                                        ?>
                          </select>
                          
         </div>
         </form>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </div>
</div>
<tr>
  <td><?php echo $no++; ?></td>
  <td><?php echo $data['username'] ?></td>
  <td><?php echo $data['nama_fak'] ?></td>
  <td><button class="btn btn-success editbtn" data-toggle="modal" data-target="#exampleModal2<?php echo $data['id_user'] ?>"><i class="fa fa-edit"></i></button>
      <a class="btn btn-danger editbtn" href="controller?page=del_users&id=<?php echo $data['id_user'] ?>"><i class="fa fa-trash"></i></a>
  </td>


</tr>
    <?php
    }
  }
     ?>
</tbody>
</table>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-primary">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller.php?page=add_user" method="post">
         <div class="input-group mb-3">
             <input class="form-control" type="text" name="username" placeholder="Username.." required/>
        </div>
        <div class="input-group mb-3">
          <input class="form-control" type="password" name="password" placeholder="Password.." required/>
        </div>
        <div class="input-group mb-3">
          <select class="form-control" name="fak" required>
                                        <option value="#" disabled selected>Pilih Fakultas</option>
                                        <?php 
                                          $jb=mysqli_query($koneksi,'SELECT * FROM tb_mda_fak');
                                          while ($jb1=mysqli_fetch_array($jb)) {
                                            echo "<option value='$jb1[id_fak]'>$jb1[nama_fak]</option>";
                                          }
                                        ?>
                          </select>
         </div>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
         </form>
      </div>
    </div>
  </div>
</div>


</div>
