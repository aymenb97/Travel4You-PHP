<?php
include "../php/config.php";

if (!isset($_SESSION['admin_id'])) {
    header('Location: ./index.php');
    exit;
}
$sql = "SELECT * from circuit where 1";
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
                    <h3>Gérer Circuits</h3>
                    <div class="card m-4 p-2">
                        <div class="m-2">
                            <a href="ajouter_circuit" class="btn btn-primary">Ajouter Circuit</a>

                        </div>
                        <table class="table">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Thème</th>
                                <th scope="col">Description</th>
                                <th scope="col">Durée</th>

                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <?php

                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo "
                                    <tr>
                                <td>" . $row['id']  . "</td>
                                <td>" . $row['theme_circuit'] . "</td>
                                <td>" . $row['description_circuit'] . "</td>
                                <td>" . $row['duree_circuit'] . "</td>
                                <td><a href=\"modifier_circuit?id=" . $row['id'] . "\">Modifier Circuit</a></td>
                                <td ><a class=\"text-danger\" href=\"supprimer_circuit?id=" . $row['id'] . "\">Supprimer Circuit</a></td>
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