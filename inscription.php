<?php
include "php/config.php";
$cin = mysqli_real_escape_string($db, $_POST['cin']);
$nom = mysqli_real_escape_string($db, $_POST['nom']);
$prenom= mysqli_real_escape_string($db, $_POST['prenom']);
$etat= mysqli_real_escape_string($db, $_POST['etat']);
$ville= mysqli_real_escape_string($db, $_POST['ville']);
$p_code=mysqli_real_escape_string($db, $_POST['pCode']);
$phone=mysqli_real_escape_string($db, $_POST['phone']);
$sexe=mysqli_real_escape_string($db, $_POST['sexe']);
$sql = "INSERT INTO client (cin, nom, prenom,etat,ville,codep,tel,sexe) VALUES ('$cin', '$nom', '$prenom','$etat','$ville','$p_code','$phone','$sexe')";




if(mysqli_query($db, $sql)){
     $_SESSION['cin_id'] = $cin;  
    echo "done!!";
} else{
    echo "Erreur $sql. " . mysqli_error($db);
}
 
// Close connection
mysqli_close($db);
?>
