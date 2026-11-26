
<?php

$Nama = $errornama = "";
$Kelas = $errorkelas = "";
$Id = $errorId = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['Nama'])) {
        $errornama = "Nama belum diisi";
    } else {
        $Nama = test_input($_POST['Nama']);
    }

    if (empty($_POST['Kelas'])) {
        $errorkelas = "Kelas belum diisi";
    } else {
        $Kelas = test_input($_POST['Kelas']);
    }

    if (empty($_POST['Id'])) {
        $errorId = "Id belum diisi";
    } else {
        $Id = test_input($_POST['Id']);
    }

    if ($Nama != "" && $Kelas != "" && $Id != "") {
        insert();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

function insert() {
    include "Insert_belajar.php";
}

?>


<form method="POST" action="?" enctype="multipart/form-data">
    Nama: <input type="text" name="Nama"> <?php echo $errornama ?>
    <span class="error"></span>
    <br><br>

    Kelas: <input type="text" name="Kelas"> <?php echo $errorkelas ?>
    <span class="error"></span>
    <br><br>

    Your ID:
    <input type="text" name="Id"> <?php echo $errorId ?>
    <br><br>
    <input type="submit" name="submit" value="submit">
    <br><br>

</form>

<?php
echo "<h2>Your Input:</h2>";
echo "<br>";
echo $Nama;
echo "<br>";
echo $Kelas;
echo "<br>";
echo $Id;
echo "<br>";


?>