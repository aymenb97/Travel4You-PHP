<?php
include "../php/config.php";
$target_dir = "../images/";


$id = mysqli_real_escape_string($db, $_POST["id"]);
var_dump($id);
// Check if image file is a actual image or fake image


$theme_circuit = mysqli_real_escape_string($db, $_POST['theme']);
$description_circuit = mysqli_real_escape_string($db, $_POST['description']);
$duree_circuit = mysqli_real_escape_string($db, $_POST['duree']);
if (!empty($_FILES["image"]["name"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($check !== false) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        echo "File is an image - " . $check["mime"] . ".";
        $url = "images/" . $_FILES["image"]["name"];
        $sql = "UPDATE circuit SET theme_circuit='$theme_circuit',description_circuit='$description_circuit',url_image='$url',duree_circuit='$duree_circuit' WHERE id=$id";
        if (mysqli_query($db, $sql)) {
            header('Location: ./adminpanel');
        } else {
            echo mysqli_error($db);
        }
    } else {
        echo "File is not an image.";
    }
} else {
    $sql = "UPDATE circuit SET theme_circuit='$theme_circuit',description_circuit='$description_circuit',duree_circuit='$duree_circuit' WHERE id=$id";
    if (mysqli_query($db, $sql)) {
        header('Location: ./adminpanel');
    } else {
        echo mysqli_error($db);
    }
}
