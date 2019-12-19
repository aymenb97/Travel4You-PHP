<?php 
include "php/config.php";


?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/form.js"></script>
    <title>Travel4You</title>
</head>

<body>
    <div id="nav-stick"></div>
    <div class="image-bg">

    </div>
    <div class="container">
        <header>
            <div class="row">
                <div class="col-sm-">
                    <img src="images/logo.png" alt="logo" style="height: 4rem;">
                </div>
                <div class="top">
                    <h3 class="col-sm-2  text-white">Travel4you</h3>
                </div>
            </div>
            <nav id="navbar" class="row nav-top">
                <a class="col-md-1 text-white" href="index.php">Acceuil</a>
                <a class="col-md-2 text-white" href="#circuit">Nos Circuits</a>
                <a class="col-md-1 text-white" href="#contact">A Propos</a>
            </nav>
        </header>
     
        <div class="mid-text text-white fixed">
            <h1>Partez en voyage de vos rêves!</h1>
            <p class="para-mid">Parfois, le problème n’est pas qu’il n’ya pas de temps pour voyager, mais qu’il n’ya pas de temps pour le planifier. Mais vous avez de la chance, vous nous avez. Gagnez du temps et utilisez notre service!</p>
        </div>
        <div class="row btns">
            <?php 
            if(!isset($_SESSION['cin_id'])){
           echo   '<button type="button" id="inscrire-btn" class="btn-t btn-sm col-sm-2">S inscrire</button>';
           echo '<button type="button" id="identifier-btn" class="btn btn-primary btn-sm col-sm-2 btn-space">S identifier</button>';
}else{
                echo   '<a href="reserver.php"  class="btn-t btn-sm col-sm-2">Reserver Circuit</a>';
           echo '<a href="reservations.php" class="btn btn-primary btn-sm col-sm-2 btn-space">Consulter Mes Reservations</a>';
            }
     
            ?>
        </div>
        <section class="align-center mid-group">
            <h2 class=" text-bold">Pourquoi Nous?</h2>
            <div class="mid-group-2">
                <div class="row">
                    <div class="col-sm">
                        <img src="images/icons/notes.png" alt="logo" style="height: 4rem;">
                        <h5>Meilleurs prix</h5>
                    </div>
                    <div class="col-sm">
                        <img src="images/icons/earth.png" alt="logo" style="height: 4rem;">
                        <h5>Service de classe mondiale</h5>
                    </div>
                    <div class="col-sm">
                        <img src="images/icons/tick.png" alt="logo" style="height: 4rem;">
                        <h5>Satisfaction des clients</h5>
                    </div>
                </div>
            </div>
        </section>
        <section section id="circuit" class="align-center mid-group">
            <h2>Nos Circuits</h2>
            <div class="mid-group-2">
                <div class="row">
                    <div class="col-sm">
                        <h5>Mer</h5>
                        <img src="images/circuits/mer-crop.jpg" class="img-thumbnail">

                        <ul class="left-align para-mid">
                            <li>excursion en bateau en méditerranée</li>
                            <li>Duree: 5 Heures</li>
                            <li>Moyen de Transport: Bateau</li>
                        </ul>

                    </div>
                    <div class="col-sm">
                        <h5>Montagne</h5>
                        <img src="images/circuits/montagne.jpg" class="img-thumbnail">
                        <ul class="left-align para-mid">
                            <li>excursion dans les montagnes de nord-ouest</li>
                            <li>Duree: 4 Heures</li>
                            <li>Moyen de Transport: AutoBus</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <h5>Sahara</h5>
                        <img src="images/circuits/sahara-crop.jpg" class="img-thumbnail">
                        <ul class="left-align para-mid">
                            <li>excursion dans le Sahara de Sud</li>
                            <li>Duree: 3 Heures</li>
                            <li>Moyen de Transport: Buggy/Jeep</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <div id="inscrire" class="inscrire">

        <div class="inscrire-content">
            <span class="close">&times;</span>
            <div class="container d-flex flex-column justify-content-end    ">
                <h3>Inscrivez Vous:</h3><br>
                <div>

                    <div class="form-group" id="formreset">
                        <label>CIN:</label>
                        <input type="text" name="cin" id="cin_ins" placeholder="Votre CIN" class="form-control form-control-sm col-md-3" pattern="[0-9]{8}" required />
                        <p class="text-danger" id="message_ins"></p>
                    </div>
                     <div class="form-group" id="formreset">
                        <label>Mot De Passe:</label>
                        <input type="password" name="pwd" id="pwd_ins" placeholder="Votre Mot De Passe" class="form-control form-control-sm col-md-3" required />
                         <p>Mot De Passe Doit Etre Lorem Ipsum</p>
                        <p class="text-danger" id="message_ins"></p>
                    </div>
                    <div class="form-row">

                        <div class="form group col-md-3">
                            <label>Nom:</label>
                            <input type="text" name="nom" id="nom" class="form-control form-control-sm" placeholder="Votre Nom" required />
                        </div>
                        <div class="form group col-md-3">
                            <label>Prenom:</label>
                            <input type="text" name="prenom" id="prenom" class="form-control form-control-sm" required placeholder="Votre Prenom" />
                        </div>

                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form group col-md-2">
                            <label>Etat:</label>
                            <input type="text" name="etat" id="etat" class="form-control form-control-sm" required placeholder="Etat" />
                        </div>
                        <div class="form group col-md-2">
                            <label>Ville:</label>
                            <input type="text" name="ville" id="ville" class="form-control form-control-sm" required placeholder="Ville" />
                        </div>
                        <div class="form group col-md-2 ">
                            <label>Code Postal:</label>
                            <input type="text" name="pCode" id="pCode" class="form-control form-control-sm " required placeholder="Code Postal" pattern="[0-9]{4}" />
                        </div>
                    </div>
                    <br>
                    <div class="form group">
                        <label>Tel:</label>
                        <input type="text" id="phone" name="phone" class="form-control form-control-sm  col-md-3" pattern="[0-9]{8}" placeholder="Votre Tel" required>
                    </div>
                    <br>
                    <label>Sexe:</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input sexe" name="sexe" value="Homme" checked>Homme<br>
                        <input type="radio" name="sexe" class="form-check-input sexe" value="Femme">Femme<br>
                    </div><br>
                    <div class="row">
                        <input type="button" id="but_ins" class="btn btn-primary col-md-2" value="S'inscrire" />
                        <div class="col-md-5 top">
                            <div class="text-danger top" id="form_erreur"></div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
    <div id="identifier" class="identifier">
        <div class="identifier-content">
            <div class="d-flex flex-row-reverse">
                <span class="close">&times;</span>
            </div>

            <div class="row">

                <h3 class="col">S'Identifier</h3>

            </div>

            <div class="row flex-align-center">
                <div>
                    <div class="row">
                        <span class="col">CIN:</span>
                    </div>
                    <div class="row">
                        <input type="text" id="cin_id" name="cin_id" placeholder="Votre CIN" class="form-control form-control-sm col" pattern="[0-9]{8}" required />
                    </div>
                    <div class="row">
                        <span class="col">Mot De Passe</span>
                    </div>
                    <div class="row">
                        <input type="password" id="pwd_id" name="pwd_id" placeholder="Votre Mot De Passe" class="form-control form-control-sm col" pattern="[0-9]{8}" required />
                    </div>
                    <div class="row" style="margin-top: 1em;">
                        <input type="submit" id="but_login" name="but_login" class="btn btn-primary col" value="S'identifier" />
                    </div>
                    <br>
                    <div class="row">
                        <p class="col text-danger" id="message"></p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <script src="js/popup_form.js">
    </script>
    <footer class="footer-black text-gray">
        <div class="footer-black">
        </div>
        <div id="contact" class="container">
            <h3 section class="align-center mid-group-2 margin-top">Contacter Nous:</h3>
            <div class="row">
                <div class="col-sm flex-align-center">
                    <ul>
                        <li>Email: contact@travel4you.com</li>
                        <li>Tel: 71 548 984</li>
                        <li>Adresse: 8 Rue Lorem Ipsum, Dolor, Tunis</li>
                    </ul>
                </div>
                <div class="col-sm flex-align-center">
                   
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
