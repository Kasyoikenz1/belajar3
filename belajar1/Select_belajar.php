<table border= "1">
    <tr>
        <th> No </th>  <th> Nama </th>  <th> Kelas </th>  <th> Id </th>  
</tr>

<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "kenbelajar1";

$connect = mysqli_connect($host,$user,$pass,$database);

$tbl = "select from kenbelajar";

if($datares = mysqli_query($connect,$tbl)) {
if(mysqli_num_rows($datares)) {

        while ($dattbl = mysqli_fetch_array($datares)) {

            echo "<tr>
            <td>$datarow[0]</td>
             <td>$datarow[1]</td>
              <td>$datarow[2]</td>
               <td>$datarow[3]</td>
               <td> <a href='Delete_belajar.php?pilno=$datarow[0]'> HAPUS </td>

               </tr>";




        }
}

}

?>
</table>









}