<?php
include "config.php";
$cin =$_SESSION['cin_id'];
$numC = mysqli_real_escape_string($db, $_POST['numC']);
$dateDep= mysqli_real_escape_string($db, $_POST['dateDep']);
$heureDep= mysqli_real_escape_string($db, $_POST['heureDep']);
$nbrePerso= mysqli_real_escape_string($db, $_POST['nbrePerso']);

$sql = "INSERT INTO reserver (cin, NumC, dateDep,heureDep,nbrePerso) VALUES ('$cin', '$numC', '$dateDep','$heureDep','$nbrePerso')";
if(mysqli_query($db,$sql)){
    echo "success";
}else{
    echo "fail";
}
?>
