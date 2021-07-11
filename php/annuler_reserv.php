<?php
include "config.php";
$id = $_SESSION['id'];
$dateDep = mysqli_real_escape_string($db, $_GET['datedepart']);
echo $dateDep;
if (mysqli_query($db, $sql2 = "DELETE FROM personne WHERE client_id='$id' and date_dep='$dateDep';")) {
} else {
    echo "Erreur $sql2. " . mysqli_error($db);
}
if (mysqli_query($db, $sql = "DELETE FROM reservation WHERE client_id='$id' and date_dep='$dateDep';")) {
    header('Location: ../reservations.php');
} else {
    echo "Erreur $sql. " . mysqli_error($db);
}
