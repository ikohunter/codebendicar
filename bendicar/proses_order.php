<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $mobil = $_POST['mobil'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];

    // Menampilkan konfirmasi pemesanan
    echo "<h1>Terima Kasih $nama!</h1>";
    echo "<p>Anda telah memesan mobil $mobil dengan detail sebagai berikut:</p>";
    echo "<ul>
            <li>Nama: $nama</li>
            <li>Email: $email</li>
            <li>Mobil: $mobil</li>
            <li>Tanggal Mulai: $tanggal_mulai</li>
            <li>Tanggal Selesai: $tanggal_selesai</li>
          </ul>";
} else {
    echo "<p>Formulir tidak dikirimkan dengan benar.</p>";
}
?>