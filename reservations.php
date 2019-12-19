<?php
include "php/config.php";


if(!isset($_SESSION['cin_id'])){
   header('Location: php/access_interdit.php');
}
$cin =mysqli_real_escape_string($db,$_SESSION['cin_id']);


$sql = "SELECT * from reserver  WHERE cin = '$cin'";
$result = mysqli_query($db,$sql);


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
    <link rel="stylesheet" type="text/css" href="css/reserver.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/reserver.js"></script>
    <title>Mes Reservations</title>
</head>

<body>
    <div class="container">
        <h3> Mes Reservations</h3>
        <div>

            <table class="table table-striped">
                <tr>
                    <th>
                        Type Circuit
                    </th>
                    <th>
                        Date Depart
                    </th>
                    <th>
                        Heure Depart
                    </th>
                    <th>
                        Nombre De Personnes
                    </th>
                    <th>
                    </th>
                    <th>
                    </th>
                    <th>
                    </th>
                </tr>
                <?php 
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
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
    echo '<tr>';
    echo '<td>'.$nomC.'</td>';
    echo '<td>'.$row['dateDep'].'</td>';
    echo '<td>'.$row['heureDep'].'</td>';
    echo '<td>'.$row['nbrePerso'].'</td>';
    echo '<td>'.'<a href="modifier?datedepart='.$row['dateDep'].'">Modifier</a>'.'</td>';
    echo '<td>'.'<a href="imprimer.php?datedepart='.$row['dateDep'].'">Imprimer</a>'.'</td>';
    echo '<td> <a class="text-danger" href="php/annuler_reserv?datedepart='.$row['dateDep'].'">Annuler Reservation</a>'.'</td>';
    echo '</tr>';

}
            ?>
            </table>
            <div class="row">
                <a href="index.php" class="col-md-3">Revenir Vers La Page D'acceuil</a>
                <a href="reserver.php" class="col-md-3">Reserver Circuit</a>
                <div class="lien text-danger" id="but_logout">Se déconnecter</div>
            </div>

        </div>
    </div>
</body>

</html>
