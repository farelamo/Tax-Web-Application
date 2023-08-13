<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" style="background-color: #B2CEB8">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center text-dark" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="bi bi-currency-exchange"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Tax</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{Request::is('admin/dashboard') ? 'active' : ''}}">
    <a class="nav-link text-dark" href="/admin/dashboard">
        <i class="fas fa-fw fa-tachometer-alt text-dark"></i><span>Dashboard</span>
    </a>
  </li>

  <!-- Nav Item - Pages Collapse Menu -->
  {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
          aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Login Screens:</h6>
              <a class="collapse-item" href="login.html">Login</a>
              <a class="collapse-item" href="register.html">Register</a>
              <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
              <div class="collapse-divider"></div>
              <h6 class="collapse-header">Other Pages:</h6>
              <a class="collapse-item" href="404.html">404 Page</a>
              <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
      </div>
  </li> --}}

  <!-- Nav Item - Charts -->
  <li class="nav-item {{Request::is('admin/booking') ? 'active' : ''}}">
    <a class="nav-link text-dark" href="/admin/penjualan">
        <i class="bi bi-cash-coin text-dark"></i><span>Penjualan</span>
    </a>
  </li>
  <li class="nav-item {{Request::is('admin/category') ? 'active' : ''}}">
    <a class="nav-link text-dark" href="/admin/pembelian">
        <i class="bi bi-cart4 text-dark"></i><span>Pembelian</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

  <!-- Sidebar Message -->
  <div class="sidebar-card d-none">
      <img class="sidebar-card-illustration mb-2" src="/assets/img/undraw_rocket.svg" alt="...">
      <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
      <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
  </div>

</ul>