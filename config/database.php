<?php
require_once __DIR__ . '/../vendor/autoload.php';
date_default_timezone_set('Asia/Jakarta');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Now access vars via $_ENV or getenv()
$DB_HOST = $_ENV['DB_HOST'];
$DB_PORT = (int) ($_ENV['DB_PORT']);
$DB_NAME = $_ENV['DB_NAME'];
$DB_USER = $_ENV['DB_USER'];
$DB_PASS = $_ENV['DB_PASS'] ?? '';
$BASE_PATH = $_ENV['BASE_PATH'] ?? '';
$THEME = $_ENV['THEME'] ?? '';

// Persist theme selection across navigation:
// - accept ?theme=<name> and store it in session (if valid)
// - fall back to .env THEME
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$viewsDir = __DIR__ . '/../views';
$availableThemes = array_values(array_filter(scandir($viewsDir), function ($d) use ($viewsDir) {
    return $d !== '.' && $d !== '..' && is_dir($viewsDir . '/' . $d) && file_exists($viewsDir . '/' . $d . '/header.php');
}));
if (isset($_GET['theme'])) {
    $candidate = basename($_GET['theme']);
    if (in_array($candidate, $availableThemes, true)) {
        $_SESSION['theme'] = $candidate;
    }
}
if (!empty($_SESSION['theme'])) {
    $THEME = $_SESSION['theme'];
}

$connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
