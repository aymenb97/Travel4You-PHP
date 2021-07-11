<?php
include "php/config.php";
$email = mysqli_real_escape_string($db, $_POST['email']);
$nom = mysqli_real_escape_string($db, $_POST['nom']);
$password   = password_hash(mysqli_real_escape_string($db, $_POST['password']), PASSWORD_DEFAULT);
$prenom = mysqli_real_escape_string($db, $_POST['prenom']);
$etat = mysqli_real_escape_string($db, $_POST['etat']);
$ville = mysqli_real_escape_string($db, $_POST['ville']);
$p_code = mysqli_real_escape_string($db, $_POST['pCode']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$sexe = mysqli_real_escape_string($db, $_POST['sexe']);

$sql = "INSERT INTO client (email, password, nom, prenom,etat,ville,codep,tel,sexe) VALUES ('$email','$password', '$nom', '$prenom','$etat','$ville','$p_code','$phone','$sexe')";
if ($result = mysqli_query($db, $sql)) {

    $_SESSION['id'] = mysqli_insert_id($db);
    return   http_response_code(200);
} else {
    echo "Erreur $sql. " . mysqli_error($db);
    return http_response_code(403);
}

// Close connection
mysqli_close($db);
