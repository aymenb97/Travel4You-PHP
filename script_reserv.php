<?php
include "php/config.php";


if(!isset($_SESSION['cin_id'])){
   header('Location: php/access_interdit.php');
}
$cin =mysqli_real_escape_string($db,$_SESSION['cin_id']);
$sql = "SELECT nom,prenom FROM client WHERE cin = '$cin'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$nom=$row['nom'];
$prenom=$row['prenom'];
if(isset($_POST['but_logout'])){
    session_destroy();
}
?>