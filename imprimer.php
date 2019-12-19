<?php
include "php/config.php";


if(!isset($_SESSION['cin_id'])){
   header('Location: php/access_interdit.php');
}
$cin =mysqli_real_escape_string($db,$_SESSION['cin_id']);
$dateDep=mysqli_real_escape_string($db, $_GET['datedepart']);
echo $cin.' '.$dateDep.'<br>    ';
$sql = "SELECT * from reserver  WHERE cin = '$cin' && dateDep='$dateDep'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$num=$row['NumC'];
$nomC;
switch($num){
    case '1':
        $nomC="Mer";
        break;
    case '2':
        $nomC="Montagne";
        break;
    case '3':
        $nomC="Sahara";
        break;
}
$dateDep=$row['dateDep'];
$heureDep=$row['heureDep'];
$nbrePerso=$row['nbrePerso'];
$sql2= "SELECT nom,prenom,age from personne WHERE cin = '$cin' && dateDep='$dateDep'";
$result2 = mysqli_query($db,$sql2);
$i=1;


if(isset($_POST['but_logout'])){
    session_destroy();
}
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/imprimer.css">
    <link rel="stylesheet" type="text/css" href="css/reserver.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/form.js"></script>
    <script src="js/reserver.js"></script>
    <title>Imprimer</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3>Imprimer Reservation Circuit</h3>
        </div>

        <div class="box">

            <div class="row">
                <div class="col-md-12">Type Circuit: <span>
                        <?php echo $nomC ?>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">Date Depart: <span>
                        <?php echo $dateDep ?>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">Heure Depart:<span>
                        <?php echo $heureDep ?>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">Nbre Personne:<span>
                        <?php echo $nbrePerso ?>
                    </span>
                </div>
            </div>
            <hr>
            <div>
                <?php while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
            echo '<h5>Personne '.$i++.':</h5><br>';
            echo '<div class="col-sm-6"> Nom: '.$row2['nom'].'<br> Prenom: '.$row2['prenom'].'<br> Age: '.$row2['age'].'</div>';
            echo '<hr>';
            echo '<br>';
            } ?>
            </div>


            <script>
                function myFunction() {
                    window.print();
                }

            </script>

        </div>
        <br>
        <div class="row">
            <button class="btn btn-primary col-sm-3" onclick="myFunction()">Imprimer</button>
            <div class="col-md-2 dcnt">
                <a href="reservations.php" class="text-info">Retour</a>
            </div>
        </div>
        <br>
    </div>
</body>

</html>
