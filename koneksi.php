<?php
$host = "localhost"; //host database
$username = "root";
$password = "";
$db = "profile";

$koneksi = new mysqli($host, $username, $password, $db);


// if ($koneksi->connect_error) {
//     die("koneksi ke database gagal");
// } else {
//     echo "Koneksi ke database berhasil";
// }
