

     <link rel="stylesheet" href="{{ mix('css/app.css') }}">
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- User Profile Section -->
        <li class="nav-item">
            <div class="text-center mt-4">
                <img class="rounded-circle" src="{{ auth()->user()->profile_image_url }}" alt="User Profile Image"
                    width="50">
                <div class="text-white">{{ auth()->user()->name }}</div>
            </div>
        </li>

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Perpustakaan</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active ml-2">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ route('buku.index') }}">
                <i class="fas fa-fw fa-book"></i>
                <span>Data Buku</span></a>
        </li>
        <li class="nav-item ml-2">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Kategori</span>
            </a>
        </li>

        <!-- Nav Item - Logout -->
        <li class="nav-item">
            <form id="logout-form" method="POST" action="{{ route('logout') }}" class="nav-link">
                @csrf
                <button type="submit" class="btn btn-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <span style="color: white">Logout</span>
                </button>
            </form>
        </li>

    </ul>
    <!-- End of Sidebar -->
