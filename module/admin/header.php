<?php
if($page=='users') {
?>
<div class='content-header'>
  <div class='container-fluid'>
    <div class='row mb-2'>
      <div class='col-sm-6'>
        <h1 class='m-0 text-dark'>USER</h1>
      </div>
      <div class='col-sm-6'>
        <ol class='breadcrumb float-sm-right'>
          <li class='breadcrumb-item'>
            <a href='index'>Home</a>
          </li>
          <li class='breadcrumb-item active'>User</li>
        </ol>
      </div>
</div>
</div>
</div>
<?php
}
elseif($page=='masterdata') {
 ?>
 <div class='content-header'>
   <div class='container-fluid'>
     <div class='row mb-2'>
       <div class='col-sm-6'>
         <h1 class='m-0 text-dark'>MASTER DATA</h1>
       </div>
       <div class='col-sm-6'>
         <ol class='breadcrumb float-sm-right'>
           <li class='breadcrumb-item'>
             <a href='index'>Home</a>
           </li>
           <li class='breadcrumb-item active'>Master Data</li>
         </ol>
       </div>
 </div>
 </div>
 </div>
 <?php
 }
 elseif($page=='mdosen_add') {
  ?>
  <div class='content-header'>
    <div class='container-fluid'>
      <div class='row mb-2'>
        <div class='col-sm-6'>
          <h1 class='m-0 text-dark'>TAMBAH DATA DOSEN</h1>
        </div>
        <div class='col-sm-6'>
          <ol class='breadcrumb float-sm-right'>
            <li class='breadcrumb-item'>
              <a href='index'>Home</a>
            </li>
            <li class='breadcrumb-item active'>Tambah Data Dosen</li>
          </ol>
        </div>
  </div>
  </div>
  </div>
  <?php
  }
 elseif($page=='mdosen' || $page=='mdosen_import') {
  ?>
  <div class='content-header'>
    <div class='container-fluid'>
      <div class='row mb-2'>
        <div class='col-sm-6'>
          <h1 class='m-0 text-dark'>DATA DOSEN</h1>
        </div>
        <div class='col-sm-6'>
          <ol class='breadcrumb float-sm-right'>
            <li class='breadcrumb-item'>
              <a href='index'>Home</a>
            </li>
            <li class='breadcrumb-item active'>Data Dosen</li>
          </ol>
        </div>
  </div>
  </div>
  </div>
     <hr>
  <?php
  }
  elseif($page=='mdosen_info') {
   ?>
   <div class='content-header'>
     <div class='container-fluid'>
       <div class='row mb-2'>
         <div class='col-sm-6'>
           <h1 class='m-0 text-dark'>INFO DATA DOSEN</h1>
         </div>
         <div class='col-sm-6'>
           <ol class='breadcrumb float-sm-right'>
             <li class='breadcrumb-item'>
               <a href='index'>Home</a>
             </li>
             <li class='breadcrumb-item active'>Info Data Dosen</li>
           </ol>
         </div>
   </div>
   </div>
   </div>
   <hr>
   <?php
   }
  elseif($page=='mdosen_edit') {
   ?>
   <div class='content-header'>
     <div class='container-fluid'>
       <div class='row mb-2'>
         <div class='col-sm-6'>
           <h1 class='m-0 text-dark'>EDIT DOSEN</h1>
         </div>
         <div class='col-sm-6'>
           <ol class='breadcrumb float-sm-right'>
             <li class='breadcrumb-item'>
               <a href='index'>Home</a>
             </li>
             <li class='breadcrumb-item active'>Edit Dosen</li>
           </ol>
         </div>
   </div>
   </div>
   </div>
      <hr>
   <?php
   }
   elseif($page=='mdosen_jabatan_add') {
    ?>
    <div class='content-header'>
      <div class='container-fluid'>
        <div class='row mb-2'>
          <div class='col-sm-6'>
            <h1 class='m-0 text-dark'>TAMBAH DATA JABATAN</h1>
          </div>
          <div class='col-sm-6'>
            <ol class='breadcrumb float-sm-right'>
              <li class='breadcrumb-item'>
                <a href='index'>Home</a>
              </li>
              <li class='breadcrumb-item active'>Tambah Data Jabatan</li>
            </ol>
          </div>
    </div>
    </div>
    </div>
       <hr>
    <?php
    }
    elseif($page=='mdosen_kgb_add') {
     ?>
     <div class='content-header'>
       <div class='container-fluid'>
         <div class='row mb-2'>
           <div class='col-sm-6'>
             <h1 class='m-0 text-dark'>TAMBAH DATA KGB</h1>
           </div>
           <div class='col-sm-6'>
             <ol class='breadcrumb float-sm-right'>
               <li class='breadcrumb-item'>
                 <a href='index'>Home</a>
               </li>
               <li class='breadcrumb-item active'>Tambah Data KGB</li>
             </ol>
           </div>
     </div>
     </div>
     </div>
        <hr>
     <?php
     }
     elseif($page=='mdosen_lh_add') {
      ?>
      <div class='content-header'>
        <div class='container-fluid'>
          <div class='row mb-2'>
            <div class='col-sm-6'>
              <h1 class='m-0 text-dark'>TAMBAH DATA LKHASN</h1>
            </div>
            <div class='col-sm-6'>
              <ol class='breadcrumb float-sm-right'>
                <li class='breadcrumb-item'>
                  <a href='index'>Home</a>
                </li>
                <li class='breadcrumb-item active'>Tambah Data LKHASN</li>
              </ol>
            </div>
      </div>
      </div>
      </div>
         <hr>
      <?php
      }
      elseif($page=='mdosen_pendidikan_add') {
       ?>
       <div class='content-header'>
         <div class='container-fluid'>
           <div class='row mb-2'>
             <div class='col-sm-6'>
               <h1 class='m-0 text-dark'>TAMBAH DATA PENDIDIKAN</h1>
             </div>
             <div class='col-sm-6'>
               <ol class='breadcrumb float-sm-right'>
                 <li class='breadcrumb-item'>
                   <a href='index'>Home</a>
                 </li>
                 <li class='breadcrumb-item active'>Tambah Data Pendidikan</li>
               </ol>
             </div>
       </div>
       </div>
       </div>
          <hr>
       <?php
       }
       elseif($page=='mdosen_pangkat_add') {
        ?>
        <div class='content-header'>
          <div class='container-fluid'>
            <div class='row mb-2'>
              <div class='col-sm-6'>
                <h1 class='m-0 text-dark'>TAMBAH DATA PANGKAT</h1>
              </div>
              <div class='col-sm-6'>
                <ol class='breadcrumb float-sm-right'>
                  <li class='breadcrumb-item'>
                    <a href='index'>Home</a>
                  </li>
                  <li class='breadcrumb-item active'>Tambah Data Pangkat</li>
                </ol>
              </div>
        </div>
        </div>
        </div>
           <hr>
        <?php
        }
        elseif($page=='mdosen_skp_add') {
         ?>
         <div class='content-header'>
           <div class='container-fluid'>
             <div class='row mb-2'>
               <div class='col-sm-6'>
                 <h1 class='m-0 text-dark'>TAMBAH DATA SKP</h1>
               </div>
               <div class='col-sm-6'>
                 <ol class='breadcrumb float-sm-right'>
                   <li class='breadcrumb-item'>
                     <a href='index'>Home</a>
                   </li>
                   <li class='breadcrumb-item active'>Tambah Data SKP</li>
                 </ol>
               </div>
         </div>
         </div>
         </div>
            <hr>
            <?php
     }
     elseif($page=='rktd') {
      ?>
      <div class='content-header'>
        <div class='container-fluid'>
          <div class='row mb-2'>
            <div class='col-sm-6'>
              <h1 class='m-0 text-dark'>DATA REKRUTMEN DOSEN</h1>
            </div>
            <div class='col-sm-6'>
              <ol class='breadcrumb float-sm-right'>
                <li class='breadcrumb-item'>
                  <a href='index'>Home</a>
                </li>
                <li class='breadcrumb-item active'>Data Rekrutmen Dosen</li>
              </ol>
            </div>
      </div>
      </div>
      </div>
         <hr>
         <?php
     }
     elseif($page=='rktt') {
      ?>
      <div class='content-header'>
        <div class='container-fluid'>
          <div class='row mb-2'>
            <div class='col-sm-6'>
              <h1 class='m-0 text-dark'>DATA REKRUTMEN TENDIK</h1>
            </div>
            <div class='col-sm-6'>
              <ol class='breadcrumb float-sm-right'>
                <li class='breadcrumb-item'>
                  <a href='index'>Home</a>
                </li>
                <li class='breadcrumb-item active'>Data Rekrutmen Tendik</li>
              </ol>
            </div>
      </div>
      </div>
      </div>
         <hr>
     <?php
     }
     elseif($page=='mdosen_dp_add') {
      ?>
      <div class='content-header'>
        <div class='container-fluid'>
          <div class='row mb-2'>
            <div class='col-sm-6'>
              <h1 class='m-0 text-dark'>TAMBAH DATA DOKUMEN PENDUKUNG</h1>
            </div>
            <div class='col-sm-6'>
              <ol class='breadcrumb float-sm-right'>
                <li class='breadcrumb-item'>
                  <a href='index'>Home</a>
                </li>
                <li class='breadcrumb-item active'>Tambah Data Dokumen Pendukung</li>
              </ol>
            </div>
      </div>
      </div>
      </div>
         <hr>
         <?php
     }
     elseif($page=='mtendik') {
      ?>
      <div class='content-header'>
        <div class='container-fluid'>
          <div class='row mb-2'>
            <div class='col-sm-6'>
              <h1 class='m-0 text-dark'>DATA TENDIK</h1>
            </div>
            <div class='col-sm-6'>
              <ol class='breadcrumb float-sm-right'>
                <li class='breadcrumb-item'>
                  <a href='index'>Home</a>
                </li>
                <li class='breadcrumb-item active'>Data Tendik</li>
              </ol>
            </div>
      </div>
      </div>
      </div>
         <hr>
         <?php
     }
     elseif($page=='mtendik_add') {
      ?>
      <div class='content-header'>
        <div class='container-fluid'>
          <div class='row mb-2'>
            <div class='col-sm-6'>
              <h1 class='m-0 text-dark'>TAMBAH DATA TENDIK</h1>
            </div>
            <div class='col-sm-6'>
              <ol class='breadcrumb float-sm-right'>
                <li class='breadcrumb-item'>
                  <a href='index'>Home</a>
                </li>
                <li class='breadcrumb-item active'>Tambah Data Tendik</li>
              </ol>
            </div>
      </div>
      </div>
      </div>
         <hr>
         <?php
     }
     elseif($page=='mtendik_info') {
      ?>
      <div class='content-header'>
        <div class='container-fluid'>
          <div class='row mb-2'>
            <div class='col-sm-6'>
              <h1 class='m-0 text-dark'>INFORMASI TENDIK</h1>
            </div>
            <div class='col-sm-6'>
              <ol class='breadcrumb float-sm-right'>
                <li class='breadcrumb-item'>
                  <a href='index'>Home</a>
                </li>
                <li class='breadcrumb-item active'>Informasi Tendik</li>
              </ol>
            </div>
      </div>
      </div>
      </div>
         <hr>
      <?php
      }
 elseif($page=='settings' || $page=='mdosen_users') {
  ?>
     <div class='content-header'>
       <div class='container-fluid'>
         <div class='row mb-2'>
           <div class='col-sm-6'>
             <h1 class='m-0 text-dark'>PENGATURAN</h1>
           </div>
           <div class='col-sm-6'>
             <ol class='breadcrumb float-sm-right'>
               <li class='breadcrumb-item'>
                 <a href='index'>Home</a>
               </li>
               <li class='breadcrumb-item active'>Pengaturan</li>
             </ol>
           </div>
     </div>
     </div>
     </div>
     <hr>
     <?php
     }
   else {
    ?>

 <div class='content-header' >
   <div class='container-fluid'>
     <div class='row mb-2'>
       <div class='col-sm-6'>
         <h1 class='m-0 text-dark'>DASHBOARD</h1>
       </div>
       <div class='col-sm-6'>
         <ol class='breadcrumb float-sm-right'>
           <li class='breadcrumb-item'>
             <a href='index'>Home</a>
           </li>
           <li class='breadcrumb-item active'>Dashboard</li>
         </ol>
       </div>
 </div>
 </div>
 </div>
    <hr>
<?php } ?>
