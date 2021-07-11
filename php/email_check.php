<?php
include "config.php";
$email = mysqli_real_escape_string($db, $_POST['email']);

if ($email != "") {

    $sql = "SELECT email FROM client WHERE email = '$email'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['email'];
    $count = mysqli_num_rows($result);


    if ($count > 0) {
        echo 1;
    } else {
        echo 0;
    }
}
