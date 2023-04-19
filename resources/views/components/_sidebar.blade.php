<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/logo.png') }}" alt="" width="50px">
        </div>
        <div class="sidebar-brand-text mx-3">Billing</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Bills
    </div>

    <!-- Nav Item - Student Collapse Menu-->

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-user"></i>
            <span>Student</span></a>
    </li>


    <!-- Nav Item - Faculty -->
    

    <!-- Nav Item - Program Collapse Menu -->
    

    <!-- Divider -->
    <hr class="sidebar-divider">

   

    <!-- Nav Item - Term -->
    <li class="nav-item ">
        <a class="nav-link" href="#">
        <i class="fas fa-money-bill"></i>
            <span>Fees</span></a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="{{ route('managefees.index') }}">
        <i class="fas fa-tasks"></i>
            <span>Manage Fees</span></a>
    </li>

    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <!-- <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>  -->

</ul>
