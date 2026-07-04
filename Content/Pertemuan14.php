<?php
session_start();

// =========================================
// KONEKSI DATABASE
// =========================================
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_praktikum"; // ganti sesuai nama database yang kamu buat

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

$currentScript = basename($_SERVER['PHP_SELF']);

// Tentukan halaman aktif (default: login)
$page = isset($_GET['page']) ? $_GET['page'] : 'login';

// =========================================
// PROSES LOGOUT
// =========================================
if ($page === 'logout') {
    $_SESSION = [];
    session_unset();
    session_destroy();
    echo "<script>alert('Anda telah keluar dari sistem.'); window.location='" . htmlspecialchars($currentScript) . "?page=login';</script>";
    exit;
}

// =========================================
// PROSES REGISTRASI
// =========================================
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    $role     = $_POST['role'];

    $password_encrypted = password_hash($password, PASSWORD_DEFAULT);

    $cek_user = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($cek_user) > 0) {
        echo "<script>alert('Username sudah digunakan!'); window.location='index.php?page=register';</script>";
        exit;
    } else {
        $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password_encrypted', '$role')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registrasi Berhasil! Silakan Login.'); window.location='" . htmlspecialchars($currentScript) . "?page=login';</script>";
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
            exit;
        }
    }
}

// =========================================
// PROSES LOGIN
// =========================================
$error = false;
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['id_user']  = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role']     = $row['role'];

            header("Location: " . $currentScript . "?page=dashboard");
            exit;
        }
    }
    $error = true;
    $page = 'login';
}

// =========================================
// PROTEKSI HALAMAN DASHBOARD
// =========================================
if ($page === 'dashboard') {
    if (!isset($_SESSION['role'])) {
        echo "<script>alert('Silakan login terlebih dahulu!'); window.location='" . htmlspecialchars($currentScript) . "?page=login';</script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Login Multi-User</title>
</head>
<body>

<?php if ($page === 'register'): ?>

    <h2>Registrasi Akun Baru</h2>
    <form method="POST" action="<?= htmlspecialchars($currentScript) ?>?page=register">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Daftar Sebagai:</label><br>
        <select name="role">
            <option value="user">User Biasa</option>
            <option value="admin">Admin</option>
        </select><br><br>

        <button type="submit" name="register">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="<?= htmlspecialchars($currentScript) ?>?page=login">Login di sini</a></p>

<?php elseif ($page === 'dashboard'): ?>

    <?php if ($_SESSION['role'] === 'admin'): ?>
        <h1>Selamat Datang di Ruang Admin, <?= $_SESSION['username'] ?>!</h1>
        <p>Ini adalah halaman rahasia khusus yang hanya bisa diakses oleh akun bertipe Admin.</p>
    <?php else: ?>
        <h1>Halo Pengguna, <?= $_SESSION['username'] ?>!</h1>
        <p>Ini adalah halaman dashboard profil utama Anda.</p>
    <?php endif; ?>

    <br>
<a href="<?= htmlspecialchars($currentScript) ?>?page=logout">Keluar / Logout</a>

<?php else: // default: login ?>

    <h2>Halaman Login</h2>

    <?php if ($error): ?>
        <p style="color: red;">Username atau Password salah!</p>
    <?php endif; ?>

    <form method="POST" action="<?= htmlspecialchars($currentScript) ?>?page=login">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login">Masuk</button>
    </form>
    <p>Belum punya akun? <a href="<?= htmlspecialchars($currentScript) ?>?page=register">Daftar di sini</a></p>

<?php endif; ?>

</body>
</html>