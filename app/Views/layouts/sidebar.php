<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">

  <div class="position-sticky pt-3">

<?php $gdb = \Config\Database::connect(); 
$sekolah_asal = $gdb->table('sekolah_asal')
->where('user_id',user_id())
->get()
->getRow();
//==============
$ayah = $gdb->table('wali_murid')
->where([
  'user_id'=>user_id(),
  'posisi'=>'Ayah',
])
->get()
->getRow();
// ibu
$ibu = $gdb->table('wali_murid')
->where([
  'user_id'=>user_id(),
  'posisi'=>'Ibu',
])
->get()
->getRow();
// wali Murid
$wali_murid = $gdb->table('wali_murid')
->where([
  'user_id'=>user_id(),
  'posisi'=>'WaliMurid',
])
->get()
->getRow();
// 
$profile = $gdb->table('santri')
->where('user_id',user_id())
->get()
->getRow();
//
$bayar = $gdb->table('pembayaran')
->where('user_id',user_id())
->get()
->getRow();

 ?>
<div class="p-3">
 <h4><?= user()->full_name; ?></h4>
 <strong><?= user()->educational_level; ?></strong>
</div>

    <ul class="nav flex-column">

      <li class="nav-item">

        <a class="nav-link" href="<?= base_url('/santri-show/'.user_id()) ?>">
          <span data-feather="home"></span>
          Dashboard
        </a>

      </li>

      <li class="nav-item">

        <a class="nav-link" data-bs-toggle="collapse" href="#profileItem" >
          <span data-feather="user"></span>
          Profil 
        </a>

        <div class="collapse bg-light border-right border" id="profileItem">


           <a class="nav-link" href="<?= base_url('/user-edit/' . user_id()) ?>">
              Edit User
          </a>

          
       <?php if(isset($profile)): ?>
            <a class="nav-link" href="<?= base_url('/edit-profile/' . user_id()) ?>">
              Edit Profile
            </a>
           <?php else: ?>
            <a class="nav-link" href="<?= base_url(' create-profile/' .user()->username) ?>">
              Create Profile
          </a>
          <?php endif; ?>
        </div>

        <a class="nav-link" data-bs-toggle="collapse" href="#sekolaAsal" >
          <span data-feather="home"></span>
          Sekolah Asal 
        </a>
           <div class="collapse bg-light border-right border" id="sekolaAsal">
           
            <?php if(isset($sekolah_asal)): ?>
            <a class="nav-link" href="<?= base_url('/edit-sekolah-asal/'.$sekolah_asal->id) ?>">
             Edit Sekolah Asal
            </a>
            <?php else: ?>
              <a class="nav-link" href="<?= base_url('/ create-sekolah-asal/' . user()->username)?>">
              Create Sekolah Asal
            </a>
          <?php endif; ?>
           </div>

         <a class="nav-link" data-bs-toggle="collapse" href="#orangTua" >
          <span data-feather="users"></span>
          Orang Tua / Wali 
        </a>
           <div class="collapse bg-light border-right border" id="orangTua">
            
           
             <?php if(isset($ayah)): ?>
            <a class="nav-link" href="<?= base_url('/edit-wali-murid/' .$ayah->id.'/'.$ayah->posisi) ?>">
              Edit Ayah
            </a>
          <?php else: ?>
            <a class="nav-link" href="<?= base_url('/create-ayah/'.user()->username)?>">
              Create Ayah
            </a>
            <?php endif; ?>

           
             <?php if(isset($ibu)): ?>
            <a class="nav-link" href="<?= base_url('/edit-wali-murid/' .$ibu->id.'/'.$ibu->posisi) ?>">
              Edit Ibu
            </a>
          <?php else: ?>
             <a class="nav-link" href="<?= base_url('/create-ibu/'.user()->username)?>">
              Create Ibu
            </a>
             <?php endif; ?>

             <?php if(isset($wali_murid)): ?>
            <a class="nav-link" href="<?= base_url('/edit-wali-murid/' .$wali_murid->id.'/'.$wali_murid->posisi) ?>">
              Edit Wali Murid
            </a>
             <?php else: ?>
              <a class="nav-link" href="<?= base_url('/create-wali/'.user()->username)?>">
              Create Wali Murid
            </a>
          <?php endif; ?>

          </div>

      </li>
      <li class="nav-item">

        <?php if(isset($bayar)): ?>
        <a class="nav-link" href="<?= base_url('/edit-bayar/'. $bayar->id) ?>">
          <span data-feather="credit-card"></span>
         Pembayaran
        </a>
      <?php else:  ?>
        <a class="nav-link" href="<?= base_url('/bayar/'.user()->username) ?>">
          <span data-feather="credit-card"></span>
          Konfirmasi Pembayaran
        </a>
      <?php endif; ?>
      </li>
      <li>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/upload-berkas/' . user()->username) ?>">
          <span data-feather="layers"></span>
          Upload Berkas
        </a>

      </li>


    </ul>



  </div>

</nav>