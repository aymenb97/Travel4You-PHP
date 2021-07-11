<?php
$client_id = mysqli_real_escape_string($db, $_GET["client_id"]);
$circuit_id = mysqli_real_escape_string($db, $_GET["circuit_id"]);
$date_dep = mysqli_real_escape_string($db, $_GET["date_dep"]);
$sql = "DELETE FROM reservation where client_id='$client_id' and circuit_id='$circuit_id' and date_dep='$date_dep'";

if (mysqli_query($db, $sql)) {
    header("Location: ./gerer_reservations");
} else {
    echo mysqli_error($db);
}
