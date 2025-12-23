<?php
session_start();
require_once '../lib/functions.php';
require_once '../lib/auth.php';

requireAuth();
requireModuleAccess('matakuliah');

require_once '../config/database.php';

$error = $success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kodemk_post = trim($_POST['kodemk'] ?? '');
    $namamk_post = trim($_POST['namamk'] ?? '');
    $sks_post = trim($_POST['sks'] ?? '');
    if (empty($kodemk_post) || empty($namamk_post) || empty($sks_post)) {
        $error = "Kodemk dan Namamk dan Sks wajib diisi.";
    }
    if (!$error) {
        $stmt = mysqli_prepare($connection, "INSERT INTO `matakuliah` (kodemk, namamk, sks) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "isi", $kodemk_post, $namamk_post, $sks_post);

        if (mysqli_stmt_execute($stmt)) {
            $success = "Matakuliah berhasil ditambahkan.";
            echo "<script>
                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 2000);
            </script>";
        } else {
            $error = "Gagal menyimpan: " . mysqli_error($connection);
        }
        mysqli_stmt_close($stmt);
    }
}
?>

<?php include '../views/'.$THEME.'/header.php'; ?>
<?php include '../views/'.$THEME.'/sidebar.php'; ?>
<?php include '../views/'.$THEME.'/topnav.php'; ?>
<?php include '../views/'.$THEME.'/upper_block.php'; ?>


            <h2>Tambah Matakuliah</h2>
            <?php if ($error): ?>
                <?= showAlert($error, 'danger') ?>
            <?php endif; ?>
            <?php if ($success): ?>
                <?= showAlert($success, 'success') ?>
                <a href="index.php" class="btn btn-secondary">Kembali ke Daftar</a>
            <?php else: ?>
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Kodemk*</label>
                        <input type="number" name="kodemk" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Namamk*</label>
                        <input type="text" name="namamk" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sks*</label>
                        <input type="number" name="sks" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="index.php" class="btn btn-secondary">Batal</a>
                </form>
            <?php endif; ?>

<?php include '../views/'.$THEME.'/lower_block.php'; ?>
<?php include '../views/'.$THEME.'/footer.php'; ?>
