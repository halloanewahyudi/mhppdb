



<header class="navbar navbar-light sticky-top bg-white flex-md-nowrap p-0 shadow">

  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"> <img src="<?= base_url('assets/img/mhlogo.jpg');?>" alt="" srcset="" width="40"> MINHAJUL HAQ</a>

  <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>



  <div class="navbar-nav">

    <div class="nav-item d-flex">

      <?php 

     
      if(logged_in()){

        $username = user()->username;

        $text = '<span data-feather="user"></span> '.$username;

        $link = base_url('/santri-show/'.user_id());

        $logout = base_url('/logout');

        $linkLogout = '<a class="nav-link px-3 " href="'.$logout.'"><span data-feather="log-out"></span> Logout</a>';

      }else{

        $text = 'Login <span data-feather="log-in"></span>';

        $link = base_url('/login');

        $linkLogout='';

      }

      echo $linkLogout;

      ?>

      <a class="nav-link px-3  btn btn-primary text-white" href="<?= $link; ?>"><?= $text ?></a>

    </div>



  </div>

</header>