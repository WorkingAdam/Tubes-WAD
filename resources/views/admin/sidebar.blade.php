<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/home" class="brand-link">
      <img src="https://stefanusade.web.id/fellaslogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>FELLASTORE</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('lte/lte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($class=='home'){echo "menu-open";} ?>">
            <a href="{{route('admin.home')}}" class="nav-link <?php if($subclass=='home'){echo "active";} ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item <?php if($class=='master_data'){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($class=='master_data'){echo "active";} ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.member')}}" class="nav-link <?php if($subclass=='member'){echo "active";} ?>">
                  <i class="far fa-user nav-icon"></i>
                  <p>Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.layanan')}}" class="nav-link <?php if($subclass=='layanan'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Layanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.order')}}" class="nav-link <?php if($subclass=='order'){echo "active";} ?>">
                  <i class="fas fa-shopping-cart nav-icon"></i>
                  <p>Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.diamond')}}" class="nav-link <?php if($subclass=='diamond'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Diamond Terkini</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header"><strong>©Fellastore2022</strong></li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>