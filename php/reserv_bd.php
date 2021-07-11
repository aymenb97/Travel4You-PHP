<?php
include "config.php";
$id = $_SESSION['id'];
$numC = mysqli_real_escape_string($db, $_POST['numC']);
$dateDep = mysqli_real_escape_string($db, $_POST['dateDep']);
$heureDep = mysqli_real_escape_string($db, $_POST['heureDep']);
$nbrePerso = mysqli_real_escape_string($db, $_POST['nbrePerso']);

$sql = "INSERT INTO reservation (client_id, circuit_id, date_dep,heure_dep) VALUES ('$id', '$numC', '$dateDep','$heureDep')";
if (mysqli_query($db, $sql)) {
    echo "success";
} else {
    echo "fail";
}
