<?php
// File: admin/_partials/navbar.php
// Pastikan session sudah dimulai di halaman yang memanggil partial ini
$admin_nama_display = htmlspecialchars($_SESSION['admin_nama_lengkap'] ?? ($_SESSION['admin_username'] ?? 'Admin'));
?>
<nav class="navbar navbar-expand-md navbar-admin fixed-top">
    <div class="container-fluid">
       <a class="navbar-brand d-flex align-items-center" href="/bukutamu/admin/index.php">
    <img src="/bukutamu/admin/images/logo.png" alt="Logo"
         style="height:40px; width:auto; margin-right:10px;">
    <div class="text-white">
        <div style="font-weight:600; line-height:1;">Buku Tamu Dinas</div>
        <small style="font-size:12px; opacity:0.9;">Diskominfo Lahat</small>
    </div>
</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
                    <li><a class="dropdown-item" href="profil_saya.php"><i class="bi bi-person-badge me-2"></i>Profil Saya</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>