<?php
session_start();
require_once '../lib/functions.php';
require_once '../lib/auth.php';

requireAuth();
requireModuleAccess('matakuliah');

require_once '../config/database.php';

$id = (int) ($_GET['id'] ?? 0);
if (!$id) redirect('index.php');

$stmt = mysqli_prepare($connection, "SELECT id, kodemk, namamk, sks FROM `matakuliah` WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$matakuliah = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

if (!$matakuliah) {
    redirect('index.php');
}

$error = $success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kodemk_post = trim($_POST['kodemk'] ?? '');
    $namamk_post = trim($_POST['namamk'] ?? '');
    $sks_post = trim($_POST['sks'] ?? '');
    if (empty($kodemk_post) || empty($namamk_post) || empty($sks_post)) {
        $error = "Kodemk dan Namamk dan Sks wajib diisi.";
    }
    if (!$error) {
        $stmt = mysqli_prepare($connection, "UPDATE `matakuliah` SET `kodemk` = ?, `namamk` = ?, `sks` = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "isii", $kodemk_post, $namamk_post, $sks_post, $id);

        if (mysqli_stmt_execute($stmt)) {
            $success = "Matakuliah berhasil diperbarui.";
            // Refresh
            mysqli_stmt_close($stmt);
            $stmt = mysqli_prepare($connection, "SELECT id, kodemk, namamk, sks FROM `matakuliah` WHERE id = ?");
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $matakuliah = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
            echo "<script>
                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 2000);
            </script>";
        } else {
            $error = "Gagal memperbarui: " . mysqli_error($connection);
        }
        mysqli_stmt_close($stmt);
    }
}
?>

<?php include '../views/'.$THEME.'/header.php'; ?>
<?php include '../views/'.$THEME.'/sidebar.php'; ?>
<?php include '../views/'.$THEME.'/topnav.php'; ?>
<?php include '../views/'.$THEME.'/upper_block.php'; ?>

            <h2>Edit Matakuliah</h2>
            <?php if ($error): ?>
                <?= showAlert($error, 'danger') ?>
            <?php endif; ?>
            <?php if ($success): ?>
                <?= showAlert($success, 'success') ?>
            <?php endif; ?>
            <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Kodemk*</label>
                        <input type="number" name="kodemk" class="form-control" value="<?= $matakuliah['kodemk'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Namamk*</label>
                        <input type="text" name="namamk" class="form-control" value="<?= htmlspecialchars($matakuliah['namamk']) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sks*</label>
                        <input type="number" name="sks" class="form-control" value="<?= $matakuliah['sks'] ?>">
                    </div>
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="index.php" class="btn btn-secondary">Batal</a>
            </form>


<?php include '../views/'.$THEME.'/lower_block.php'; ?>
<?php include '../views/'.$THEME.'/footer.php'; ?>
