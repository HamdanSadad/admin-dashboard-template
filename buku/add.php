<?php
session_start();
require_once '../lib/functions.php';
require_once '../lib/auth.php';

requireAuth();
requireModuleAccess('buku');

require_once '../config/database.php';

$error = $success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode_buku_post = trim($_POST['kode_buku'] ?? '');
    $judul_buku_post = trim($_POST['judul_buku'] ?? '');
    $pengarang_post = trim($_POST['pengarang'] ?? '');
    $penerbit_post = trim($_POST['penerbit'] ?? '');
    $tahun_terbit_post = trim($_POST['tahun_terbit'] ?? '');
    $kategori_post = trim($_POST['kategori'] ?? '');
    $status_buku_post = trim($_POST['status_buku'] ?? '');
    $tahun_terbit_sql = $tahun_terbit_post ? $tahun_terbit_post . '-01-01' : null;
    if (empty($kode_buku_post)) {
        $error = "Kode Buku wajib diisi.";
    }
    if (!$error) {
        $stmt = mysqli_prepare($connection, "INSERT INTO `buku` (kode_buku, judul_buku, pengarang, penerbit, tahun_terbit, kategori, status_buku) VALUES (?, ?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "issssss", $kode_buku_post, $judul_buku_post, $pengarang_post, $penerbit_post, $tahun_terbit_sql, $kategori_post, $status_buku_post);

        if (mysqli_stmt_execute($stmt)) {
            $success = "Buku berhasil ditambahkan.";
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


            <h2>Tambah Buku</h2>
            <?php if ($error): ?>
                <?= showAlert($error, 'danger') ?>
            <?php endif; ?>
            <?php if ($success): ?>
                <?= showAlert($success, 'success') ?>
                <a href="index.php" class="btn btn-secondary">Kembali ke Daftar</a>
            <?php else: ?>
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Kode Buku*</label>
                        <input type="number" name="kode_buku" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pengarang</label>
                        <input type="text" name="pengarang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control" min="1900" max="<?= date('Y') ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status Buku</label>
                        <select name="status_buku" class="form-select">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Dipinjam">Dipinjam</option>
                            <option value="Hilang">Hilang</option>
                            <option value="Rusak">Rusak</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="index.php" class="btn btn-secondary">Batal</a>
                </form>
            <?php endif; ?>

<?php include '../views/'.$THEME.'/lower_block.php'; ?>
<?php include '../views/'.$THEME.'/footer.php'; ?>
