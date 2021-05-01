 <?php
function check_active($a,$b)
{
  if($a==$b)
  {
    return " active ";
  }
  else if($a == "home")
  {
    return " ";
  }
}
?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="home" class="brand-link">
      <img src="assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">OSH PRO</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="assets/img/rochat_icon.png" alt="RoChat Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">        </div>
        <div class="info">
          <span class="text-white font-weight-light">Ro-Chat</span>
        </div>
      </div>
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="uploads/user/<?=$result[0]['user_foto']?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile" class="d-block"><?=$result[0]['user_nama']?></a>
          <!-- <br>
          <a href="#" class="d-block"><?=$result[0]['user_tipe']?></a> -->

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="home" class="nav-link <?=check_active($page,'home')?>">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
              Ro-Chat
              </p>
            </a>

          </li>
          <?php
          if($tipe_user=="ADMIN")
          {
          ?>
          <!--hr class="text-primary"-->
          <li class="nav-item has-treeview">
            <a href="statistic" class="nav-link <?=check_active($page,'statistic')?>">
              <i class="nav-icon fas fa-chart-bar text-primary"></i>
              <p>
                Statistic 
              </p>
            </a>
           
          </li>
        
            <?php } ?>
          <!-- menu d tengah -->
            <?php
          if($tipe_user=="ADMIN")
          {
          ?>                
          <li class="nav-header"><hr></li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user  text-primary"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="users" class="nav-link<?=check_active($page,'users')?>">
                  <i class="far fa-circle nav-icon text-primary"></i>
                  <p>Daftar user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adduser" class="nav-link<?=check_active($page,'adduser')?>">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Add User</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tasks  text-primary"></i>
              <p>
                Role
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="role" class="nav-link<?=check_active($page,'role')?>">
                  <i class="far fa-circle nav-icon text-primary"></i>
                  <p>Daftar Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addrole" class="nav-link<?=check_active($page,'addrole')?>">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Add Role</p>
                </a>
              </li>
              
            </ul>
          </li>
          <?php } ?>
          <!-- <li class="nav-item">
            <a href="gallery" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li> -->


          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="settings" class="nav-link">
              <i class="nav-icon fas fa-cog text-info"></i>
              <p class="text">Setting</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Log Out</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>