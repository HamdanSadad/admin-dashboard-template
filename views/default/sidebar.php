<?php $menuConfig = loadMenuConfig(); ?>
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-logo">
            <i class="bi bi-grid-3x3-gap-fill"></i>
            <span>AdminPanel</span>
        </a>
        <button class="sidebar-toggle" id="sidebarToggle">
            <i class="bi bi-chevron-left"></i>
        </button>
    </div>
    <nav class="sidebar-menu">
        <div class="sidebar-item">
            <?php $role = $_SESSION['role'] ?? null;
            $dashboardPath = $menuConfig['roles'][$role]['dashboard'] ?? 'index.php';
            $dashboardModule = explode('/', trim($dashboardPath, '/'))[0] ?? '';
            ?>
            <a href="<?= base_url($dashboardPath) ?>" class="sidebar-link <?= function_exists('isActiveModule') && isActiveModule($dashboardModule) ? 'active' : '' ?>">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </div>
        <div class="sidebar-item">
            <a href="<?= base_url('users') ?>" class="sidebar-link <?= function_exists('isActiveModule') && isActiveModule('users') ? 'active' : '' ?>">
                <i class="bi bi-people"></i>
                <span>Users</span>
            </a>
        </div>
        <div class="sidebar-item">
            <a href="<?= base_url('barang') ?>" class="sidebar-link <?= function_exists('isActiveModule') && isActiveModule('barang') ? 'active' : '' ?>">
                <i class="bi bi-archive"></i>
                <span>Barang</span>
            </a>
        </div>
        <div class="sidebar-item">
            <a href="<?= base_url('buku') ?>" class="sidebar-link <?= function_exists('isActiveModule') && isActiveModule('buku') ? 'active' : '' ?>">
                <i class="bi bi-book"></i>
                <span>Buku</span>
            </a>
        </div>
        <div class="sidebar-item">
            <a href="<?= base_url('matakuliah') ?>" class="sidebar-link <?= function_exists('isActiveModule') && isActiveModule('matakuliah') ? 'active' : '' ?>">
                <i class="bi bi-journals"></i>
                <span>Matakuliah</span>
            </a>
        </div>
        <div class="sidebar-item">
            <a href="#" class="sidebar-link <?= function_exists('isActiveModule') && isActiveModule('reports') ? 'active' : '' ?>">
                <i class="bi bi-file-earmark-bar-graph"></i>
                <span>Reports</span>
            </a>
        </div>
        <div class="sidebar-item">
            <a href="#" class="sidebar-link <?= function_exists('isActiveModule') && isActiveModule('settings') ? 'active' : '' ?>">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </div>
        <div class="sidebar-item">
            <a href="<?= base_url('logout.php') ?>" class="sidebar-link <?= function_exists('isActiveModule') && isActiveModule('logout') ? 'active' : '' ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </div>
    </nav>
</aside>