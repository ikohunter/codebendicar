<?php
 $namahost = "localhost";
 $username = "root";
 $password = ""; //password MySQLi anda
 $database = "db_bendicar"; //database anda
 mysqli_connect($namahost,$username,$password) or die("Failed");
 mysqli_select_db($database) or die("Database not exist");
?>