<?php
session_start();

// Mengecek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");  // Jika belum login, arahkan ke halaman login
    exit();
}

echo "Selamat datang, " . $_SESSION['username'] . "!<br>";
echo "<a href='logout.php'>Logout</a>";  // Link untuk logout
?>
