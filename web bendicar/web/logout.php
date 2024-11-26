<?php
session_start();
session_unset();  // Menghapus semua sesi
session_destroy();  // Menghancurkan sesi
header("Location: login.html");  // Arahkan kembali ke halaman login
exit();
?>
