<?php
function sanitize($data)
{
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function redirect($url)
{
    // If URL is relative, prepend BASE_URL
    if (!preg_match('~^(https?://|//)~', $url) && !str_starts_with($url, '/')) {
        $url = BASE_URL . '/' . ltrim($url, '/');
    }
    header("Location: " . $url);
    exit();
}

function showAlert($message, $type = 'danger')
{
    $safeMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    echo "<div class='alert alert-$type alert-dismissible fade show' role='alert'>
             $safeMessage
             <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
          </div>";
}

function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

function getUserRole()
{
    return $_SESSION['role'] ?? null;
}

//=== NEW: CSRF Functions===
function generateCSRFToken()
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validateCSRFToken($token)
{
    return hash_equals($_SESSION['csrf_token'] ?? '', $token);
}

function validatePassword($password, $enabled = true)
{
    // If validation is disabled, always return valid
    if (!$enabled) {
        return []; // Always valid when disabled
    }

    $errors = [];
    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters.";
    }
    if (!preg_match('/[A-Z]/', $password)) {
        $errors[] = "Password must contain at least one uppercase letter.";
    }
    if (!preg_match('/[a-z]/', $password)) {
        $errors[] = "Password must contain at least one lowercase letter.";
    }
    if (!preg_match('/[0-9]/', $password)) {
        $errors[] = "Password must contain at least one number.";
    }
    return $errors; // empty array = valid
}

function userCanAccess($allowedRoles = ['admin'])
{
    if (!isset($_SESSION['user_id'])) {
        return false;
    }

    $userRole = $_SESSION['role'] ?? '';
    return in_array($userRole, $allowedRoles);
}

/**
 * Show access denied page with error message
 * @param array $allowedRoles List of roles allowed to access the module
 */
function showAccessDenied($allowedRoles = ['admin'])
{
    $roleLabels = getRoleLabels(); // Now loaded from menu.json via config functions
    $allowedLabels = array_map(fn($r) => $roleLabels[$r] ?? $r, $allowedRoles);
    $allowedText = implode(' atau ', $allowedLabels);

    include __DIR__ . '/../views/header.php';
    include __DIR__ . '/../views/topnav.php';
?>
    <div class="container-fluid">
        <div class="row">
            <?php include __DIR__ . '/../views/sidebar.php'; ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="alert alert-danger">
                    <h4>ðŸ”’ Akses Ditolak</h4>
                    <p>
                        Halaman ini hanya dapat diakses oleh: <strong><?= htmlspecialchars($allowedText) ?></strong>.
                    </p>
                    <p>
                        Anda login sebagai <strong><?= htmlspecialchars(getRoleLabel($_SESSION['role'] ?? 'user')) ?></strong>.
                    </p>

                    <a href="../<?= htmlspecialchars($_SESSION['role'] ?? 'login') ?>/index.php"
                        class="btn btn-primary">
                        Kembali ke Dashboard
                    </a>
                </div>
            </main>
        </div>
    </div>
<?php
    include __DIR__ . '/../views/footer.php';
    exit();
}

function requireRoleAccess($allowedRoles = ['admin', 'dosen'], $redirectUrl = null)
{
    if (!userCanAccess($allowedRoles)) {
        if ($redirectUrl) {
            redirect($redirectUrl);
        } else {
            showAccessDenied($allowedRoles);
        }
    }
}

function loadMenuConfig()
{
    $configFile = __DIR__ . '/../config/menu.json';

    if (file_exists($configFile)) {
        $jsonContent = file_get_contents($configFile);
        return json_decode($jsonContent, true) ?: [];
    }
    return [];
}

function getRoleLabel($role)
{
    $menuConfig = loadMenuConfig();
    return $menuConfig['roles'][$role]['label'] ?? $role;
}

/**
 * Get all role labels
 */
function getRoleLabels()
{
    $menuConfig = loadMenuConfig();
    $labels = [];

    foreach ($menuConfig['roles'] as $role => $config) {
        $labels[$role] = $config['label'];
    }

    return $labels;
}

function getAllowedRolesForModule($moduleName)
{
    $menuConfig = loadMenuConfig();
    return $menuConfig['modules'][$moduleName]['allowed_roles'] ?? ['admin']; // default to admin if not found
}

/**
 * Check if current user can access a specific module
 */
function userCanAccessModule($moduleName)
{
    if (!isset($_SESSION['user_id'])) {
        return false;
    }

    $userRole = $_SESSION['role'] ?? '';
    $allowedRoles = getAllowedRolesForModule($moduleName);

    return in_array($userRole, $allowedRoles);
}

/**
 * Require role access for a specific module
 */
function requireModuleAccess($moduleName, $redirectUrl = null)
{
    $allowedRoles = getAllowedRolesForModule($moduleName);

    if (!userCanAccessModule($moduleName)) {
        if ($redirectUrl) {
            redirect($redirectUrl);
        } else {
            showAccessDenied($allowedRoles);
        }
    }
}

/**
 * Check if a module name appears in the current request path (used to mark active sidebar items)
 * Returns true when the module name is present as a path segment in the current URI.
 * Also handles filenames like "logout.php" by matching a dot after the module name.
 */
function isActiveModule($moduleName)
{
    $uri = $_SERVER['REQUEST_URI'] ?? '';
    $path = parse_url($uri, PHP_URL_PATH);
    $path = rtrim($path, '/');
    // Match when module name appears as segment or is the prefix of a file name (e.g. /logout.php)
    return (bool) preg_match('#/' . preg_quote($moduleName, '#') . '([/\\.?]|$)#i', $path);
}

function base_url($path = '')
{
    $url = BASE_URL . '/' . $path;
    return $url;
}
?>