<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "kenbelajar1";

$delete = mysqli_connect ($host, $user, $pass, $database);
$hapus ="delete from kenbelajar where no='$GET_[pilno]'";
if ($dataqu = mysqli_query($delete, $hapus)) {
echo "Data berhasil dihapus";

}

?>


