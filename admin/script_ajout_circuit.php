<?php
include "../php/config.php";
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
var_dump($target_dir);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
$theme_circuit = mysqli_real_escape_string($db, $_POST['theme']);
$description_circuit = mysqli_real_escape_string($db, $_POST['description']);
$duree_circuit = mysqli_real_escape_string($db, $_POST['duree']);
$check = getimagesize($_FILES["image"]["tmp_name"]);
if ($check !== false) {
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}
$url = "images/" . $_FILES["image"]["name"];
$sql = "INSERT INTO circuit(theme_circuit,description_circuit,url_image,duree_circuit) VALUES('$theme_circuit','$description_circuit','$url','$duree_circuit')";
if (mysqli_query($db, $sql)) {
    header('Location: ./adminpanel');
}
