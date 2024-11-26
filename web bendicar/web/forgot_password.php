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
    $user = $_POST['username'];
    $new_password = $_POST['new_password'];

    // Query untuk memperbarui password
    $sql = "UPDATE users SET password = MD5('$new_password') WHERE username = '$user'";
    if ($conn->query($sql) === TRUE) {
        echo "Password berhasil diubah.";
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
    <title>Lupa Password</title>
</head>
<body>

<h2>Ganti Password</h2>
<form action="forgot_password.php" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" name="username" required><br><br>
    <label for="new_password">Password Baru:</label><br>
    <input type="password" name="new_password" required><br><br>
    <button type="submit">Ganti Password</button>
</form>

</body>
</html>