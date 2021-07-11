<?php
include("../php/config.php");
$id = mysqli_real_escape_string($db, $_GET["id"]);
$sql = "DELETE from circuit where id='$id'";

if (mysqli_query($db, $sql)) {
    header("Location: ./adminpanel.php");
} else {
    echo mysqli_error($db);
}
