<?php
include "../php/config.php";
if (isset($_SESSION['admin_id'])) {
    header("Location: ./adminpanel.php");
    exit;
}

?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Travel4You</title>
</head>

<body>

    <div class="container vh-100 d-flex align-center">

        <div class="card w-50 shadow m-auto p-3">
            <div class="align-center ">
                <form action="auth.php" method="POST">
                    <div class="w-50 m-auto  align-center">
                        <label>Login:</label>
                        <input name="login" class=" form-control" type="text">
                    </div>
                    <div class="w-50  mx-auto align-content-center mt-1">
                        <label>Mot de passe:</label>
                        <input name="password" class=" form-control" type="password">
                    </div>

                    <?php
                    if (isset($_SESSION["error"])) {


                        echo " <div class='mt-2'>
                        <p class='text-danger'>" . $_SESSION["error"] . "</p>
                    </div>";
                        unset($_SESSION['error']);
                    }
                    ?>
                    <div class="mt-2">
                        <input type="submit" class="w-25 btn btn-primary" value="Login"></input>
                    </div>

                </form>
            </div>
        </div>

    </div>
</body>

</html>