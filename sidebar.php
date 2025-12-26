<?php
// File: admin/_partials/sidebar.php
// Menentukan halaman aktif untuk styling link di sidebar
$current_page = basename($_SERVER['PHP_SELF']);
$base_url_admin = "."; // Path relatif ke halaman admin dari dalam folder admin
?>
<div class="sidebar" id="adminSidebar">
    <div class="sidebar-header">
        <h5>Buku Tamu Digital</h5>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="<?php echo $base_url_admin; ?>/index.php">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'profil_perusahaan.php') ? 'active' : ''; ?>" href="<?php echo $base_url_admin; ?>/profil_perusahaan.php">
                <i class="bi bi-buildings-fill"></i> Profil Perusahaan
            </a>
        </li>
        <li class="nav-item">
    <a class="nav-link <?php echo ($current_page == 'data_tamu.php') ? 'active' : ''; ?>" href="<?php echo $base_url_admin; ?>/data_tamu.php">
        <i class="bi bi-people-fill"></i> Data Tamu
    </a>
</li>
<li class="nav-item">
    <a class="nav-link <?php echo ($current_page == 'data_kepuasan.php') ? 'active' : ''; ?>" href="<?php echo $base_url_admin; ?>/data_kepuasan.php">
        <i class="bi bi-patch-check-fill"></i> Data Kepuasan
    </a>
</li>
<li class="nav-item">
    <a class="nav-link <?php echo ($current_page == 'manajemen_admin.php' || $current_page == 'tambah_admin.php') ? 'active' : ''; ?>" href="<?php echo $base_url_admin; ?>/manajemen_admin.php">
        <i class="bi bi-person-gear-fill"></i> Manajemen Admin </a>
</li>
         <li class="nav-item mt-auto p-3 border-top" style="border-color: #495057 !important;">
            <a class="nav-link" href="../index.php" target="_blank">
                <i class="bi bi-box-arrow-up-right"></i> Lihat Halaman Utama
            </a>
        </li>
    </ul>
</div>