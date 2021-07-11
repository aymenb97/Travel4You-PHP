<?php
include "script_reserv.php";
?>
<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/reserver.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/getdata.js"></script>
</head>

<body>


   <div class="container">

        <h3>Bonjour,
            <?php echo $nom.' '.$prenom ?></h3>
        <h3><a href="reservations.php">Consulter Mes Reservations</a></h3>
        <h3>Modifier Votre Reservation</h3>

        <div>
            <h5>Choisir Circuit:</h5>
            <div class="row">
                <div class="col-sm-2">
                    <h5>Mer</h5>
                    <label>
                        <img src="images/circuits/mer-thumbnail.jpg" class="img-circuit">
                        <input type="radio" name="circuit" id="1" value="1" checked><br>
                    </label>

                </div>

                <div class="col-sm-2">
                    <h5>Montagne</h5>
                    <label>
                        <img src="images/circuits/montagne-thumbnail.jpg" class="img-circuit">
                        <input type="radio" name="circuit" class=""  id="2" value="2"><br>
                    </label>

                </div>
                <div class="col-sm-2">
                    <h5>Sahara</h5>
                    <label>
                        <img src="images/circuits/sahara-thumbnail.jpg" class="img-circuit">
                        <input type="radio" name="circuit" id="3" value="3"><br>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label>Date de Départ:</label>
                        <input type="date" data-date-format="DD MM YYYY" id="dateDep" class="form-control form-control-sm col-md-"  required />
                    </div>


                    <div class="form-group col-md-3">
                        <label>Heure de Départ:</label>
                        <div class="form-row">
                            <div class="col-md-3">
                                <input type="number" id="heureD" class="form-control form-control-sm " min='8' max='19' required />
                            </div>
                            <div>h :</div>
                            <div class="col-md-3">
                                <input type="number" id="minsD" class="form-control form-control-sm " min='0' max='59' step="10" required />
                            </div>
                            <div>min</div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div id="date_err"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="w col-md-5">
                        <label>Choisir le nombre de personnes:</label>
                        <select class="col-md-" id="get_val" onchange="addNom(this.value)">
                            <option value="2">2&emsp;</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <p class="text-danger" id="message_ins"></p>
            </div>
            <div id="add_perso">
                <!--<div class="form-row" id="champs">

                    <div class="form group col-md-2">
                        <label>Nom:</label>
                        <input type="text" name="nom" id="nom" class="form-control form-control-sm" placeholder="Nom" required />
                    </div>
                    <div class="form group col-md-2">
                        <label>Prenom:</label>
                        <input type="text" name="prenom" id="prenom" class="form-control form-control-sm" required placeholder="Prenom" />
                    </div>
                    <div class="form group col-md-1">
                        <label>Age:</label>
                        <input type="number" class="form-control form-control-sm" id="age" name="age" min="5" max="100">
                    </div>

                </div>-->
    
                <div class='form-row'>

                    <div class='form group col-md-2'>
                        <label>Nom:</label>
                        <input type='text' name='nom1' id='nom1' class='form-control form-control-sm' placeholder='Nom' required />
                    </div>
                    <div class='form group col-md-2'>
                        <label>Prenom:</label>
                        <input type='text' name='prenom1' id='prenom1' class='form-control form-control-sm' required placeholder='Prenom' />
                    </div>
                    <div class='form group col-md-1'>
                        <label>Age:</label>
                        <input type='number' class='form-control form-control-sm' id='age1' name='age' min='5' max='100'>
                    </div>

                </div>
                <div class='form-row'>

                    <div class='form group col-md-2'>
                        <label>Nom:</label>
                        <input type='text' id='nom2' class='form-control form-control-sm' placeholder='Nom' required />
                    </div>
                    <div class='form group col-md-2'>
                        <label>Prenom:</label>
                        <input type='text' id='prenom2' class='form-control form-control-sm' required placeholder='Prenom' />
                    </div>
                    <div class='form group col-md-1'>
                        <label>Age:</label>
                        <input type='number' class='form-control form-control-sm' id='age2' name='age' min='5' max='100'>
                    </div>

                </div>


            </div>
            <div id="erreurperso" class="text-danger"></div>
            <div class="row margin-top">
                <div class='col-md-2'>
                    <input type="button" id="but_resv" class="btn btn-primary col-md" value="Modifier" />
                </div>
                <div class='col-md-2 dcnt'>
                    <div class="lien text-danger" id="but_logout">Se déconnecter</div>
                    
                </div>
            </div>
        </div>



    </div>
    <div id="success" class="modal">


  <div class="modal-content">
    <span class="close">&times;</span>
    <p id="resv_succes"></p>
  </div>

</div> 
</body>

</html>
