<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item d-none d-md-block me-3">
                <span class="nav-link mb-0">Welcome, <strong><?= htmlspecialchars($_SESSION['username'] ?? 'Admin') ?></strong></span>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('logout.php') ?>" class="btn btn-outline-danger btn-sm">Logout</a>
            </li>
        </ul>
    </div>
</nav>