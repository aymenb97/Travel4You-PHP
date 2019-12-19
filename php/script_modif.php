<?php 
include "config.php";

$cin =mysqli_real_escape_string($db,$_SESSION['cin_id']);
$date_Dep_old=mysqli_real_escape_string($db,$_POST['datedepart']);
$numC_old =mysqli_real_escape_string($db, $_POST['numC']);

$numC_new = mysqli_real_escape_string($db, $_POST['numC']);
$dateDep_new= mysqli_real_escape_string($db, $_POST['dateDep']);
$heureDep= mysqli_real_escape_string($db, $_POST['heureDep']);
$nbrePerso= mysqli_real_escape_string($db, $_POST['nbrePerso']);

$sql = "UPDATE reserver  SET NumC ='$numC_new', dateDep='$dateDep_new', heureDep='$heureDep', nbrePerso='$nbrePerso'   WHERE cin = '$cin' and dateDep='$date_Dep_old';";
if(mysqli_query($db,$sql)){
    echo "success";
}else{
    echo "erreur :".$sql.mysqli_error($db);
}
switch ($nbrePerso) {
        
    case "2":
        $nom1=mysqli_real_escape_string($db, $_POST['nom1']);
        $prenom1=mysqli_real_escape_string($db, $_POST['prenom1']);
        $age1=mysqli_real_escape_string($db, $_POST['age1']);
        
        $nom2=mysqli_real_escape_string($db, $_POST['nom2']);
        $prenom2=mysqli_real_escape_string($db, $_POST['prenom2']);
        $age2=mysqli_real_escape_string($db, $_POST['age2']);
        mysqli_query($db,"DELETE from personne Where cin='$cin' and dateDep='$date_Dep_old';");
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom1', '$prenom1', '$age1','$cin','$dateDep_new','$numC_new');");
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom2', '$prenom2', '$age2','$cin','$dateDep_new','$numC_new');");                 
       

        break;
    case "3":
        $nom1=mysqli_real_escape_string($db, $_POST['nom1']);
        $prenom1=mysqli_real_escape_string($db, $_POST['prenom1']);
        $age1=mysqli_real_escape_string($db, $_POST['age1']);
        
        $nom2=mysqli_real_escape_string($db, $_POST['nom2']);
        $prenom2=mysqli_real_escape_string($db, $_POST['prenom2']);
        $age2=mysqli_real_escape_string($db, $_POST['age2']);
        
        $nom3=mysqli_real_escape_string($db, $_POST['nom3']);
        $prenom3=mysqli_real_escape_string($db, $_POST['prenom3']);
        $age3=mysqli_real_escape_string($db, $_POST['age3']);
        mysqli_query($db,"DELETE from personne Where cin='$cin' and dateDep='$date_Dep_old';");
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom1', '$prenom1', '$age1','$cin','$dateDep_new','$numC_new');");
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom2', '$prenom2', '$age2','$cin','$dateDep_new','$numC_new');");     
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom3', '$prenom3', '$age3','$cin','$dateDep_new','$numC_new');");  
       
        break;
    case "4":
        $nom1=mysqli_real_escape_string($db, $_POST['nom1']);
        $prenom1=mysqli_real_escape_string($db, $_POST['prenom1']);
        $age1=mysqli_real_escape_string($db, $_POST['age1']);
        
        $nom2=mysqli_real_escape_string($db, $_POST['nom2']);
        $prenom2=mysqli_real_escape_string($db, $_POST['prenom2']);
        $age2=mysqli_real_escape_string($db, $_POST['age2']);
        
        $nom3=mysqli_real_escape_string($db, $_POST['nom3']);
        $prenom3=mysqli_real_escape_string($db, $_POST['prenom3']);
        $age3=mysqli_real_escape_string($db, $_POST['age3']);
        
        $nom4=mysqli_real_escape_string($db, $_POST['nom4']);
        $prenom4=mysqli_real_escape_string($db, $_POST['prenom4']);
        $age4=mysqli_real_escape_string($db, $_POST['age4']);
        mysqli_query($db,"DELETE from personne Where cin='$cin' and dateDep='$date_Dep_old';");
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom1', '$prenom1', '$age1','$cin','$dateDep_new','$numC_new');");
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom2', '$prenom2', '$age2','$cin','$dateDep_new','$numC_new');");     
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom3', '$prenom3', '$age3','$cin','$dateDep_new','$numC_new');");
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom4', '$prenom4', '$age4','$cin','$dateDep_new','$numC_new');");
      
        break;
   case "5":
         $nom1=mysqli_real_escape_string($db, $_POST['nom1']);
        $prenom1=mysqli_real_escape_string($db, $_POST['prenom1']);
        $age1=mysqli_real_escape_string($db, $_POST['age1']);
        
        $nom2=mysqli_real_escape_string($db, $_POST['nom2']);
        $prenom2=mysqli_real_escape_string($db, $_POST['prenom2']);
        $age2=mysqli_real_escape_string($db, $_POST['age2']);
        
        $nom3=mysqli_real_escape_string($db, $_POST['nom3']);
        $prenom3=mysqli_real_escape_string($db, $_POST['prenom3']);
        $age3=mysqli_real_escape_string($db, $_POST['age3']);
        
        $nom4=mysqli_real_escape_string($db, $_POST['nom4']);
        $prenom4=mysqli_real_escape_string($db, $_POST['prenom4']);
        $age4=mysqli_real_escape_string($db, $_POST['age4']);
        
        $nom5=mysqli_real_escape_string($db, $_POST['nom5']);
        $prenom5=mysqli_real_escape_string($db, $_POST['prenom5']);
        $age5=mysqli_real_escape_string($db, $_POST['age5']);
        mysqli_query($db,"DELETE from personne Where cin='$cin' and dateDep='$date_Dep_old';");
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom1', '$prenom1', '$age1','$cin','$dateDep_new','$numC_new');");
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom2', '$prenom2', '$age2','$cin','$dateDep_new','$numC_new');");     
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom3', '$prenom3', '$age3','$cin','$dateDep_new','$numC_new');");
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom4', '$prenom4', '$age4','$cin','$dateDep_new','$numC_new');");
        mysqli_query($db,"INSERT INTO personne (nom, prenom, age, cin, dateDep, numC) VALUES ('$nom5', '$prenom5', '$age5','$cin','$dateDep_new','$numC_new');");

        break;
    default:
        
        echo"Erreur";
} 



?>