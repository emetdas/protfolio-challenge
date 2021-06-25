<?php
include 'config.php';
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$meassage = mysqli_real_escape_string($con, $_POST['message']);
if (!empty($name) && !empty($email) && !empty($meassage)) {
    $sql = "INSERT INTO message(name,email,message) VALUES('{$name}','{$email}','{$meassage}')";
    $query = mysqli_query($con,$sql);
    if ($query) {
        echo "Successfully Message Send";
    }
}
else {
    echo "All input fields are reqired";
}
?>