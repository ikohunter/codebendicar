<?php
$host = 'localhost';  // Ganti dengan host database Anda
$dbname = 'db_bendicar'; // Nama database
$username = 'root';   // Ganti dengan username database Anda
$password = '';       // Ganti dengan password database Anda

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>