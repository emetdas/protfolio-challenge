<?php
include 'config.php';
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$meassage = mysqli_real_escape_string($con, $_POST['meassage']);
if (!empty($name) && !empty($password) && !empty($meassage)) {
    $sql = "INSERT INTO meassage(name,email,message) VALUES ('{$name}','{$email}','{$meassage}')";
    echo "Successfully Message Send";
}
else {
    echo "All input fields are reqired";
}
?>