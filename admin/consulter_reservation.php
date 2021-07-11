<?php
include "../php/config.php";

if (!isset($_SESSION['admin_id'])) {
    header('Location: ./index.php');
    exit();
}
$id = mysqli_real_escape_string($db, $_GET['id']);
$dateDep = mysqli_real_escape_string($db, $_GET['date_depart']);

$sql = "SELECT * from client c, reservation r,circuit  WHERE c.id=r.client_id and r.circuit_id=circuit.id and r.client_id='$id' and r.date_dep='$dateDep'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$sql2 = "SELECT nom,prenom,age from personne WHERE client_id = '$id' && date_dep='$dateDep'";
$result2 = mysqli_query($db, $sql2);
$i = 1
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Travel4You</title>
</head>

<body>

    <div class="container-fluid ">

        <div class="row">
            <div class="col-md-2 vh-100 border-right p-0  shadow-sm">
                <div class="pt-3">
                    <div class="mt-3 mx-0 border-bottom p-2"><a href="./adminpanel.php">Gérer Circuits</a></div>
                    <div class="mt-3 mx-0 border-bottom p-2"><a href="./gerer_reservations.php">Gérer Réservations</a></div>
                </div>
            </div>
            <div class="col-md-10 bg-gray ">
                <div class="p-1">

                    <div class="card m-4 p-2">
                        <div class="m-2">
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-12 "><span class="font-weight-bold">Nom et Prénom :</span><br> <span>
                                            <?php echo $row['prenom'] . " " . $row['nom'] ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12 "><span class="font-weight-bold">Téléphone :</span><br> <span>
                                            <?php echo $row['tel'] ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12 "><span class="font-weight-bold">Addresse :</span><br> <span>
                                            <?php echo $row['etat'] . " " . $row['ville'] . " " . $row['codeP'];  ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12"><span class="font-weight-bold">Thème Circuit :</span> <br><span>
                                            <?php echo $row['theme_circuit'] ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row mt-4    ">
                                    <div class="col-md-12"><span class="font-weight-bold">Date Départ :</span> <br><span>
                                            <?php echo $row['date_dep'] ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12"><span class="font-weight-bold">Heure Départ :</span> <br><span>
                                            <?php echo $row['heure_dep']  ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                </div>

                                <hr>
                                <div>
                                    <?php while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
                                        echo '<h5>Personne ' . $i++ . ':</h5><br>';
                                        echo '<div class="col-sm-6"> Nom: ' . $row2['nom'] . '<br> Prenom: ' . $row2['prenom'] . '<br> Age: ' . $row2['age'] . '</div>';
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
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>