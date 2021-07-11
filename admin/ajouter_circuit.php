<?php
include "../php/config.php";

if (!isset($_SESSION['admin_id'])) {
    header('Location: ./index.php');
    exit;
}

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
                            <form method="POST" action="script_ajout_circuit" enctype="multipart/form-data">
                                <div class="w-25 m-2">
                                    <label>Thème:</label>
                                    <input name="theme" type="text" class="form-control">
                                </div>
                                <div class="w-25 m-2">
                                    <label>Description:</label>
                                    <textarea name="description" type="text-area" class="form-control">
                                    </textarea>
                                </div>
                                <div class="w-25 m-2">
                                    <label>Durée:</label>
                                    <input name="duree" type="text" class="form-control">
                                </div>
                                <div class="w-25 m-2">
                                    <label>Image:</label>
                                    <input name="image" type="file">
                                </div>
                                <div class="m-2 w-25">
                                    <input type="submit" value="Ajouter Circuit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>