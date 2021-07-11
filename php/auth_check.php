<?php
include "config.php";
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = $_POST['password'];
if ($email != "" && $password != "") {
    $sql = "SELECT id,email,password FROM client WHERE email = '$email'";

    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $email = $row['email'];

    $id = $row['id'];


    if (password_verify($password, $row['password'])) {
        $_SESSION["id"] = $id;
        echo 1;
    } else {
        echo 0;
    }
}
