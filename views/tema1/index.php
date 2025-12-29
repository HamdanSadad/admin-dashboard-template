<?php
require __DIR__ . '/header.php';
?>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <div class="app-wrapper">

        <?php require __DIR__ . '/topnav.php'; ?>

        <?php require __DIR__ . '/sidebar.php'; ?>

        <main class="app-main">

            <?php require __DIR__ . '/breadcrumb.php'; ?>

            <?php require __DIR__ . '/upper_block.php'; ?>

            <?php require __DIR__ . '/admin_content.php'; ?>

            <?php require __DIR__ . '/lower_block.php'; ?>

        </main>

        <?php require __DIR__ . '/footer.php'; ?>

    </div>

</body>

</html>