<?php

include "config.php";
$id = $_SESSION['id'];
$nbrePerso = mysqli_real_escape_string($db, $_POST['nbrePerso']);
$dateDep = mysqli_real_escape_string($db, $_POST['dateDep']);

$numC = mysqli_real_escape_string($db, $_POST['numC']);
switch ($nbrePerso) {

    case "2":
        $nom1 = mysqli_real_escape_string($db, $_POST['nom1']);
        $prenom1 = mysqli_real_escape_string($db, $_POST['prenom1']);
        $age1 = mysqli_real_escape_string($db, $_POST['age1']);

        $nom2 = mysqli_real_escape_string($db, $_POST['nom2']);
        $prenom2 = mysqli_real_escape_string($db, $_POST['prenom2']);
        $age2 = mysqli_real_escape_string($db, $_POST['age2']);

        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom1', '$prenom1', '$age1','$id','$dateDep','$numC');");
        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom2', '$prenom2', '$age2','$id','$dateDep','$numC');");
        $_SESSION['dateDep'] = $dateDep;

        break;
    case "3":
        $nom1 = mysqli_real_escape_string($db, $_POST['nom1']);
        $prenom1 = mysqli_real_escape_string($db, $_POST['prenom1']);
        $age1 = mysqli_real_escape_string($db, $_POST['age1']);

        $nom2 = mysqli_real_escape_string($db, $_POST['nom2']);
        $prenom2 = mysqli_real_escape_string($db, $_POST['prenom2']);
        $age2 = mysqli_real_escape_string($db, $_POST['age2']);

        $nom3 = mysqli_real_escape_string($db, $_POST['nom3']);
        $prenom3 = mysqli_real_escape_string($db, $_POST['prenom3']);
        $age3 = mysqli_real_escape_string($db, $_POST['age3']);

        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom1', '$prenom1', '$age1','$id','$dateDep','$numC');");
        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom2', '$prenom2', '$age2','$id','$dateDep','$numC');");
        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom3', '$prenom3', '$age3','$id','$dateDep','$numC');");
        $_SESSION['dateDep'] = $dateDep;
        break;
    case "4":
        $nom1 = mysqli_real_escape_string($db, $_POST['nom1']);
        $prenom1 = mysqli_real_escape_string($db, $_POST['prenom1']);
        $age1 = mysqli_real_escape_string($db, $_POST['age1']);

        $nom2 = mysqli_real_escape_string($db, $_POST['nom2']);
        $prenom2 = mysqli_real_escape_string($db, $_POST['prenom2']);
        $age2 = mysqli_real_escape_string($db, $_POST['age2']);

        $nom3 = mysqli_real_escape_string($db, $_POST['nom3']);
        $prenom3 = mysqli_real_escape_string($db, $_POST['prenom3']);
        $age3 = mysqli_real_escape_string($db, $_POST['age3']);

        $nom4 = mysqli_real_escape_string($db, $_POST['nom4']);
        $prenom4 = mysqli_real_escape_string($db, $_POST['prenom4']);
        $age4 = mysqli_real_escape_string($db, $_POST['age4']);

        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom1', '$prenom1', '$age1','$id','$dateDep','$numC');");
        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom2', '$prenom2', '$age2','$id','$dateDep','$numC');");
        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom3', '$prenom3', '$age3','$id','$dateDep','$numC');");
        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom4', '$prenom4', '$age4','$id','$dateDep','$numC');");
        $_SESSION['dateDep'] = $dateDep;
        break;
    case "5":
        $nom1 = mysqli_real_escape_string($db, $_POST['nom1']);
        $prenom1 = mysqli_real_escape_string($db, $_POST['prenom1']);
        $age1 = mysqli_real_escape_string($db, $_POST['age1']);

        $nom2 = mysqli_real_escape_string($db, $_POST['nom2']);
        $prenom2 = mysqli_real_escape_string($db, $_POST['prenom2']);
        $age2 = mysqli_real_escape_string($db, $_POST['age2']);

        $nom3 = mysqli_real_escape_string($db, $_POST['nom3']);
        $prenom3 = mysqli_real_escape_string($db, $_POST['prenom3']);
        $age3 = mysqli_real_escape_string($db, $_POST['age3']);

        $nom4 = mysqli_real_escape_string($db, $_POST['nom4']);
        $prenom4 = mysqli_real_escape_string($db, $_POST['prenom4']);
        $age4 = mysqli_real_escape_string($db, $_POST['age4']);

        $nom5 = mysqli_real_escape_string($db, $_POST['nom5']);
        $prenom5 = mysqli_real_escape_string($db, $_POST['prenom5']);
        $age5 = mysqli_real_escape_string($db, $_POST['age5']);

        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom1', '$prenom1', '$age1','$id','$dateDep','$numC');");
        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom2', '$prenom2', '$age2','$id','$dateDep','$numC');");
        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom3', '$prenom3', '$age3','$id','$dateDep','$numC');");
        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom4', '$prenom4', '$age4','$id','$dateDep','$numC');");
        mysqli_query($db, "INSERT INTO personne (nom, prenom, age, client_id, date_dep, num_circuit) VALUES ('$nom5', '$prenom5', '$age5','$id','$dateDep','$numC');");
        $_SESSION['dateDep'] = $dateDep;
        break;
    default:

        echo "Erreur";
}
