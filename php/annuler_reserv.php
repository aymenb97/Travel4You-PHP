<?php
include "config.php";
$cin =$_SESSION['cin_id'];
$dateDep = mysqli_real_escape_string($db, $_GET['datedepart']);
echo $dateDep;
if(mysqli_query($db,$sql2 = "DELETE FROM personne WHERE cin='$cin' and DateDep='$dateDep';"))
{
    header('Location: ../reservations.php');
}
else{
     echo "Erreur $sql2. " . mysqli_error($db);
}
if(mysqli_query($db,$sql = "DELETE FROM reserver WHERE cin='$cin' and DateDep='$dateDep';"))
{
    header('Location: ../reservations.php');
}
else{
     echo "Erreur $sql. " . mysqli_error($db);
}
