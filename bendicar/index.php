<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect ke halaman login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Bendicar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="daftar-mobil.php">Daftar Mobil</a></li>
                <li><a href="pemesanan.php">Pemesanan</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section id="intro">
        <h2>Penyewaan Mobil Terpercaya</h2>
        <p>Selamat datang di Bendicar. Anda dapat melakukan pemesanan mobil dengan mudah.</p>
    </section>

    <footer>
        <p>&copy; 2024 Bendicar | Semua hak dilindungi</p>
    </footer>
</body>
</html>