<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
  
    <a href="/admin/dashboard" class="brand-link">
      <img src="{{ asset('admin-lte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <marquee behavior="" direction=""><span class="brand-text font-weight-light">Dashboard</span></marquee>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin-lte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
          </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           @csrf
       </form>
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
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link {{ $sidebar == 'dashboard' ? 'active' : '' }}">
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/user" class="nav-link {{ $sidebar == 'user_masyarakat' ? 'active' : '' }}">
                  <p>Masyarakat</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/user_petugas" class="nav-link {{ $sidebar == 'user_petugas' ? 'active' : '' }}">
                  <p>User Petugas</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/lelang" class="nav-link {{ $sidebar == 'lelang' ? 'active' : '' }}">
                  <p>Lelang</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/barang" class="nav-link {{ $sidebar == 'barang' ? 'active' : '' }}">
                  <p>Barang</p>
                </a>
              </li>
            </ul>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>