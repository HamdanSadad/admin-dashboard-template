<div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="<?= base_url('assets/purple/images/faces/face1.jpg') ?>" alt="profile" />
                        <span class="login-status online"></span>
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2">Henry Klein</span>
                        <span class="text-secondary text-small">Administrator</span>
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= function_exists('isActiveModule') && isActiveModule('admin') ? 'active' : '' ?>" href="<?= base_url('admin/index.php') ?>">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#ui-basic" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-title">UI Elements</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <?php $tablesActive = function_exists('isActiveModule') && (isActiveModule('users') || isActiveModule('barang') || isActiveModule('buku') || isActiveModule('matakuliah')); ?>
                <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#tables" href="#tables" aria-expanded="<?= $tablesActive ? 'true' : 'false' ?>" aria-controls="tables">
                    <span class="menu-title">Tables</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-table-large menu-icon"></i>
                </a>
                <div class="collapse <?= $tablesActive ? 'show' : '' ?>" id="tables">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link <?= function_exists('isActiveModule') && isActiveModule('users') ? 'active' : '' ?>" href="<?= base_url('users') ?>">Users</a></li>
                        <li class="nav-item"> <a class="nav-link <?= function_exists('isActiveModule') && isActiveModule('barang') ? 'active' : '' ?>" href="<?= base_url('barang') ?>">Barang</a></li>
                        <li class="nav-item"> <a class="nav-link <?= function_exists('isActiveModule') && isActiveModule('buku') ? 'active' : '' ?>" href="<?= base_url('buku') ?>">Buku</a></li>
                        <li class="nav-item"> <a class="nav-link <?= function_exists('isActiveModule') && isActiveModule('matakuliah') ? 'active' : '' ?>" href="<?= base_url('matakuliah') ?>">Matakuliah</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>