<?php
include "php/config.php";

if (!isset($_SESSION['id'])) {
    header('Location: php/access_interdit.php');
}
$id = mysqli_real_escape_string($db, $_SESSION['id']);
$sql = "SELECT nom,prenom FROM client WHERE id = '$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$nom = $row['nom'];
$prenom = $row['prenom'];
