<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "contact_emet";
$con = mysqli_connect($server,$username,$password,$db);
if (!$con) {
    echo "Databse Connection Proble" . mysqli_connect_error();
}
?>