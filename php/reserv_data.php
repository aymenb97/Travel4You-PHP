<?php
include "config.php";
if (!isset($_SESSION['id'])) {
    header('Location: php/access_interdit.php');
}
$cin = mysqli_real_escape_string($db, $_SESSION['id']);
$datedepart = mysqli_real_escape_string($db, $_POST['DateDep']);


$sql = "SELECT * from reservation  WHERE id = '$id' and date_dep='$datedepart';";
$sql2 = "SELECT nom,prenom,age from personne  WHERE id = '$id' and date_dep='$datedepart';";
$result = mysqli_query($db, $sql);
$result2 = mysqli_query($db, $sql2);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
while ($row = mysqli_fetch_assoc($result2)) {
    $data[] = $row;
}

echo json_encode($data);
