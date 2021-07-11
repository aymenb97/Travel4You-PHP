<?php
include "php/config.php";


if (!isset($_SESSION['id'])) {
    header('Location: php/access_interdit.php');
}
$id = mysqli_real_escape_string($db, $_SESSION['id']);


$sql = "SELECT * from reservation  WHERE client_id = '$id'";
$result = mysqli_query($db, $sql);


if (isset($_POST['but_logout'])) {
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
                    </th>
                    <th>
                    </th>
                    <th>
                    </th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $num = $row['circuit_id'];
                    $nomC = "Sahara";
                    switch ($num) {
                        case '1':
                            $nomC = "Mer";
                            break;
                        case '2':
                            $nomC = "Montagne";
                            break;
                        case '3':
                            $nomC = "Sahara";
                            break;
                    }
                    echo '<tr>';
                    echo '<td>' . $nomC . '</td>';
                    echo '<td>' . $row['date_dep'] . '</td>';
                    echo '<td>' . $row['heure_dep'] . '</td>';
                    echo '<td>' . '<a href="modifier_reservation.php?datedepart=' . $row['date_dep'] . '">Modifier</a>' . '</td>';
                    echo '<td>' . '<a href="imprimer.php?datedepart=' . $row['date_dep'] . '">Imprimer</a>' . '</td>';
                    echo '<td> <a class="text-danger" href="php/annuler_reserv?datedepart=' . $row['date_dep'] . '">Annuler Reservation</a>' . '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
            <div class="row">
                <a href="index.php" class="col-md-3">Revenir Vers La Page D'acceuil</a>
                <a href="reserver_circuit.php" class="col-md-3">Reserver Circuit</a>
                <a href="php/logout.php" class="lien text-danger" id="but_logout">Se déconnecter</a>
            </div>

        </div>
    </div>
</body>

</html>