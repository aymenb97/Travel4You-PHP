<?php
include "../php/config.php";

if (!isset($_SESSION['admin_id'])) {
    header('Location: ./index.php');
    exit;
}
$sql = "SELECT * from client c, reservation r,circuit  WHERE c.id=r.client_id and r.circuit_id=circuit.id;";
$result = mysqli_query($db, $sql);
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
                    <h3>Gérer Reservations</h3>
                    <div class="card m-4 p-2">
                        <table class="table">
                            <tr>
                                <th scope="col">Client</th>
                                <th scope="col">Circuit</th>
                                <th scope="col">date Départ</th>
                                <th scope="col">Heure Départ</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <?php

                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo "
                                    <tr>
                                <td>" . $row['nom'] . "</td>
                                <td>" . $row['theme_circuit'] . "</td>
                                <td>" . $row['date_dep'] . "</td>
                                <td>" . $row['heure_dep'] . "</td>
                                <td><a href=\"consulter_reservation?id=" . $row['client_id']  . "&date_depart=" . $row['date_dep'] . "\">Consulter Reservation</a></td>
                                <td ><a class=\"text-danger\" href=\"supprimer_circuit?id=" . $row['client_id'] . "\">Annuler Reservation</a></td>
                                  </tr>  ";
                                }

                                ?>

                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>