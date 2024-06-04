  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="img/OporfinLogo.png" alt="Oporfin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Oporfin V1.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="home.php" class="d-block"><p>Hola<p> <?php echo $nombre;?> </a>
        </div>
       
      </div>

   
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <!--     <?php if($rol_id == 1) { ?>
               <li class="nav-item">
            <a href="home.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Gráficos
                
              </p>
            </a>
           
          </li>
          <?php } ?> -->
          
         
          <li class="nav-item">
            <a href="view-solicitudes.php" class="nav-link">
            <i class="nav-icon fas fa-file-invoice-dollar"></i>
              
              <p>
                Solicitudes
              </p>
            </a>
            
          </li>
         
         
          <?php if($rol_id == 2) { ?>
          <li class="nav-item">
            <a href="notificar.php" class="nav-link">
            <i class="nav-icon fa fa-envelope" aria-hidden="true"></i>
              
              <p>
                Notificar
                             <!-- <span class="badge badge-info right">6</span>-->
              </p>
            </a>
          
         

     
        <?php } ?>
         
 
          <?php if($rol_id == 1) { ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
              
              <p>
                Configuración
                <i class="fas fa-angle-left right"></i>
               <!-- <span class="badge badge-info right">6</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="mantenimiento_admins.php" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Mtto. administradores</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="cambiar-password.php" class="nav-link">
                  <i class="fas fa-user-lock nav-icon"></i>
                  <p>Cambiar Contraseña </p>
                </a>
              </li>
          
          </li>
         

        </ul>
        <?php } ?>
        <li class="nav-item">
            <a href="logout.php" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>
                Salir
                
              </p>
            </a>
           
          </li>
                       
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 