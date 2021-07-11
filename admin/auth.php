<?php
include "../php/config.php";
$login = mysqli_real_escape_string($db, $_POST["login"]);
$password = mysqli_real_escape_string($db, $_POST["password"]);
$sql = "SELECT id,password from admin  WHERE login = '$login'";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if (password_verify($password, $row['password'])) {
    $_SESSION["admin_id"] = $row['id'];
    header("Location: adminpanel.php");
} else {
    $_SESSION["error"] = "Login ou mot de passe invalide";
    header("Location: index.php");
}
