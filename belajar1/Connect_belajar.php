<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "kenbelajar1";

$connect = mysqli_connect ($host, $user, $pass, $database); 

if (!$connect) {
    die("koneksi gagal:" . mysqli_connect_error());
}

echo "koneksi berhasil";

?>