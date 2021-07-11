<?php
include "config.php";
var_dump($_SESSION['id']);
if (isset($_SESSION['id'])) {
    $_SESSION = [];
    session_destroy();

    header('Location: ../index.php');
} else {

    header('Location: ../index.php');
}
