<div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{asset('/template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Alexander Pierce</a>
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
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../../index.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard v1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../index2.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard v2</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../index3.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard v3</p>
            </a>
          </li>
        </ul>
      </li>
      </li>
      <li class="nav-item">
        <a href="/cast" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Casts
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/genre" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Genres
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/film" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Films
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>