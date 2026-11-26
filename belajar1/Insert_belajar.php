<?php
$host="localhost";
$user="root";
$pass="";
$database="kenbelajar1";
$connect = mysqli_connect($host, $user, $pass, $database);

$Nama=$_POST['Nama'];
$Kelas=$_POST['Kelas'];
$Id=$_POST['Id'];


$simpandb = "insert into kenbelajar (Nama,Kelas,Id) values('$Nama','$Kelas','$Id')";

if ($simpanqr = mysqli_query($connect, $simpandb)) {
    echo "<br>". "data sudah tersimpan";
}


?>
