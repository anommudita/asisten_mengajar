<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-user-secret"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Administrator</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Beranda -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-solid fa-house"></i>
            <span><?= $beranda; ?></span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        feature
    </div>

    <!-- Kegiatan -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kegiatan" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-calendar-plus"></i>
            <span><?= $kegiatan; ?></span>
        </a>
        <div id="kegiatan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kelola Kegitan:</h6>
                <a class="collapse-item" href="<?= base_url('admin/kegiatan'); ?>">Daftar Kegitan</a>
                <a class="collapse-item" href="<?= base_url('admin/kategori'); ?>">Kategori</a>
            </div>
        </div>
    </li>

    <!-- Team -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tim" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-users"></i>
            <span><?= $tim ?></span>
        </a>
        <div id="tim" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kelola tim</h6>
                <a class="collapse-item" href="<?= base_url('admin/dosen_gp') ?>">DPL & GP</a>
                <a class="collapse-item" href="<?= base_url('admin/tim') ?>">Asisten Mengajar</a>
            </div>
        </div>
    </li>

    <!-- Galeri -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/galeri'); ?>">
            <i class="fas fa-fw fa-image"></i>
            <span><?= $galeri; ?></span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator Profile
    </div>

    <!-- My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/myprofile'); ?>">
            <i class="fas fa-fw fa-solid fa-user"></i>
            <span><?= $my_profile; ?></span></a>
    </li>

    <!-- Edit Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/editprofile'); ?>">
            <i class="fas fa-fw fa-solid fa-user-pen"></i>
            <span><?= $edit_profile; ?></span></a>
    </li>


    <!-- Change Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/changepassword') ?>">
            <i class="fas fa-fw fa-solid fa-key"></i>
            <span><?= $change_password; ?></span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Lainnya
    </div>


    <!-- Tentang -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/tentang'); ?>">
            <i class="fas fa-fw fa-info-circle"></i>
            <span><?= $tentang; ?></span></a>
    </li>


    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-solid fa-right-from-bracket"></i>
            <span><?= $logout; ?></span></a>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->