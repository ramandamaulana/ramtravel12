  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
      <div class="sidebar-brand-icon rotate-n-10">
        <i class="fab fa-tumblr"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Travel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item active">
      <a class="nav-link" href="{{route('travel-package.index')}}">
        <i class="fas fa-hotel"></i>
        <span>Paket Travel</span></a>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="{{route('gallery.index')}}">
        <i class="far fa-images"></i>
        <span>Gallery Travel</span></a>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="{{route('transaction.index')}}">
        <i class="fas fa-dollar-sign"></i>
        <span>Transaksi</span></a>
    </li>

    <li class="nav-item active">
    <a class="nav-link" href="{{route('users.index')}}">
        <i class="fas fa-users"></i>
        <span>User</span></a>
    </li>

    <hr class="sidebar-divider">

  </ul>
  
  <!-- End of Sidebar -->