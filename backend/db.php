<?php
$server = "loaclhost";
$user = "root";
$password = "";
$db = "backendDev";
$con = mysqli_connect($server,$user,$password,$db);
if (!$con) {
    echo "Databse Not Connected".mysqli_connect_error();
}
?>