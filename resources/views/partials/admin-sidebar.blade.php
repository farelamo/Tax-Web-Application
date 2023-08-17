<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" style="background-color: #B2CEB8">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center text-dark" href="/admin/dashboard">
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

  <!-- Nav Item - Charts -->
  <li class="nav-item {{Request::is('admin/penjualan') ? 'active' : ''}}">
    <a class="nav-link text-dark" href="/admin/penjualan">
        <i class="bi bi-cash-coin text-dark"></i><span>Penjualan</span>
    </a>
  </li>
  <li class="nav-item {{Request::is('admin/pembelian') ? 'active' : ''}}">
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
</ul>