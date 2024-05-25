<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{route('welcome')}}" class="navbar-brand mx-2 mb-1">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Gudang Sepatu</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative"></div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('welcome')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Gudang</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('data') }}" class="dropdown-item">Data Sepatu</a>
                    <a href="{{ route('stok') }}" class="dropdown-item">Stok Sepatu</a>
                    <a href="#" class="dropdown-item">Kategori Sepatu</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Pengiriman</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Outlet</a>
                    <a href="button.html" class="dropdown-item">Gudang</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Jadwal</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Jadwal Pengiriman</a>
                    <a href="typography.html" class="dropdown-item">Pengiriman</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End --> 