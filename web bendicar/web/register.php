<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_db";

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Mengecek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mengambil data form
    $new_user = $_POST['username'];
    $new_password = $_POST['password'];

    // Memasukkan data pengguna baru
    $sql = "INSERT INTO users (username, password) VALUES ('$new_user', MD5('$new_password'))";
    if ($conn->query($sql) === TRUE) {
        echo "Akun baru berhasil dibuat.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User Baru</title>
</head>
<body>

<h2>Daftar Pengguna Baru</h2>
<form action="register.php" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" name="username" required><br><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" required><br><br>
    <button type="submit">Daftar</button>
</form>

</body>
</html>