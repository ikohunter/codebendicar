<?php
session_start();  // Memulai sesi untuk menyimpan status login

$servername = "localhost";  // Nama server MySQL
$username = "root";         // Default username untuk MySQL di XAMPP adalah "root"
$password = "";             // Default password untuk MySQL di XAMPP adalah kosong
$dbname = "user_db";        // Nama database yang sudah dibuat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengecek apakah form login disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form login
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Query untuk mencari user yang sesuai
    $sql = "SELECT * FROM users WHERE username = '$user' AND password = MD5('$pass')";
    $result = $conn->query($sql);

    // Mengecek apakah ada user yang cocok
    if ($result->num_rows > 0) {
        // User ditemukan, simpan informasi login ke sesi
        $_SESSION['username'] = $user;
        header("Location: welcome.php");  // Arahkan ke halaman welcome
    } else {
        // User tidak ditemukan, tampilkan pesan error
        header("Location: login.html?error=true");
    }
}

$conn->close();
?>
