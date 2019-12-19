<?php
include "config.php";


if(!isset($_SESSION['cin_id'])){
   header('Location: php/access_interdit.php');
}
$cin =mysqli_real_escape_string($db,$_SESSION['cin_id']);
$datedepart=mysqli_real_escape_string($db,$_POST['DateDep']);


$sql = "SELECT * from reserver  WHERE cin = '$cin' and dateDep='$datedepart';";
$sql2 ="SELECT nom,prenom,age from personne  WHERE cin = '$cin' and dateDep='$datedepart';";
$result = mysqli_query($db,$sql);
$result2 = mysqli_query($db,$sql2);
$data=Array();
while($row = mysqli_fetch_assoc($result)){
    $data[]=$row;
   
}
while($row = mysqli_fetch_assoc($result2)){
    $data[]=$row;
   
}
   
 echo json_encode($data);

if(isset($_POST['but_logout'])){
    session_destroy();
}
?>
    