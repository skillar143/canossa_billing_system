@php
    $currentUrl = request()->fullUrl();
@endphp

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
    <li class="nav-item {{ preg_match('/\bhome\b/i', request()->fullUrl()) ? 'bg-light' : '' }}">
        <a class="nav-link {{ preg_match('/\bhome\b/i', request()->fullUrl()) ? 'text-dark' : '' }}" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt "></i>
            <span class="" >Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-address-card"></i>
            <span>Student Fees</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-clipboard"></i>
            <span>Payments</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        List
    </div>





    <!-- Nav Item - Term -->

    <li class="nav-item {{ preg_match('/\bmanagefees\b/i', request()->fullUrl()) ? 'bg-light' : '' }}">
        <a class="nav-link {{ preg_match('/\bmanagefees\b/i', request()->fullUrl()) ? 'text-dark' : '' }}" href="{{ route('managefees.index') }}">
        <i class="fas fa-tasks"></i>
            <span>Course & Fees</span></a>
    </li>

    <li class="nav-item {{ preg_match('/\bdiscount\b/i', request()->fullUrl()) ? 'bg-light' : '' }}">
        <a class="nav-link {{ preg_match('/\bdiscount\b/i', request()->fullUrl()) ? 'text-dark' : '' }}" href="{{ route('discount.index') }}">
            <i class="fas fa-percent"></i>
            <span>Discount</span></a>
    </li>

    {{-- <li class="nav-item ">
        <a class="nav-link" href="{{ route('fee.index') }}">
        <i class="fas fa-money-bill"></i>
            <span>Fees</span></a>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseFees"
            aria-expanded="true" aria-controls="collapseFees">
            <i class="fas fa-money-bill"></i>
            <span>Fees</span>
        </a>
        <div id="collapseFees" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Type of Fee:</h6>
                <a class="collapse-item" href="{{ route('fee.index','0') }}"><i class="fas fa-desktop mx-1"></i>Computer Fees</a>
                <a class="collapse-item" href="{{ route('fee.index','1') }}"><i class="fas fa-book mx-1"></i>Special Fees</a>
                <a class="collapse-item" href="{{ route('fee.index','2') }}"><i class="fas fa-puzzle-piece mx-1"></i>Other School Fees</a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ preg_match('/\bstudent\b/i', request()->fullUrl()) ? 'bg-light' : '' }}">
        <a class="nav-link {{ preg_match('/\bstudent\b/i', request()->fullUrl()) ? 'text-dark' : '' }}" href="{{ route('student.index') }}">
            <i class="fas fa-users"></i>
            <span>Students</span></a>
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
