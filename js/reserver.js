function addChamps(k) {
    var champNom = '<div class="form-row" id="champs">' + '<div class="form group col-md-2">' + '<label>Nom:</label>' + '<input type="text"+ class="form-control form-control-sm adNom" placeholder="Nom" required />' + '</div>' + '<div class="form group col-md-2">' + '<label>Prenom:</label>' + '<input type="text"+ class="form-control form-control-sm adPrenom" placeholder="Prenom" required />' + '</div>' + '<div class="form group col-md-1">' + '<label>Age:</label>' + '<input type="number" class="form-control form-control-sm adAge" id="age" name="age" min="5" max="100">' + '</div>';
    var n = 0;
    $("#add_perso").empty()
    for (i = 0; i < k; i++) {

        $("#add_perso").append(champNom);
        n++;
        document.getElementsByClassName("adNom")[i].setAttribute('id', 'nom' + (n));
        document.getElementsByClassName("adPrenom")[i].setAttribute('id', 'prenom' + (n));
        document.getElementsByClassName("adAge")[i].setAttribute('id', 'age' + (n));
    }
    return
}

function addNom(str) {
    var erreurp = "";
    $("#erreurperso").html(erreurp);
    switch (str) {
        case "2":
            addChamps(2);
            break;

        case "3":
            addChamps(3);
            break;

        case "4":
            addChamps(4);
            break;
        case "5":
            addChamps(5);
            break;


    }
    return str
}
$(document).ready(function () {
    $("#but_logout").click(function () {
        $.ajax({
            type: "POST",
            url: 'reserver.php',
            data: {
                'but_logout': 'but_logout',
            },
            success: function (response) {
                window.location = "index.php";
            }


        });

    });

});
$(document).ready(function () {
    $("#but_resv").click(function () {
        var sucess = "";
        var msg = "";
        var erreurp = "";
        $("#date_err").removeClass("alert alert-danger").html(msg);
        var dateDep = $("#dateDep").val().trim();
        var heureDep = $("#heureD").val().trim();
        var minDep = $("#minsD").val().trim();
        var heureDepC = heureDep + ":" + minDep;
        var numC = $('input[name=circuit]:checked').val();
        var nbrePerso = $("#get_val").val().trim();
        if (dateDep == "" || heureDep == "" || minDep == "") {
            msg = "Veuillez Choisir la Date de Depart et l'Heure de Depart!";
            $("#date_err").addClass("alert alert-danger").html(msg);

        } else {
            $.ajax({
                url: 'php/reserv_check.php',
                type: 'post',
                data: {

                    dateD: dateDep
                },
                success: function (response) {
                    var msg = "";
                    if (response == 1) {
                        msg = "vous avez déjà réservé un circuit à cette date";
                        $("#date_err").addClass("alert alert-danger").html(msg);
                    } else {


                        switch (nbrePerso) {
                            case "2":

                                var nom1 = $("#nom1").val();
                                var prenom1 = $("#prenom1").val();
                                var age1 = $("#age1").val();
                                var nom2 = $("#nom2").val();
                                var prenom2 = $("#prenom2").val();
                                var age2 = $("#age2").val();

                                if (nom1 == "" || prenom1 == "" || age1 == "" || nom2 == "" || prenom2 == "" || age2 == "") {
                                    erreurp = "Veuillez Saisir l'info de 2 Personnes";
                                    $("#erreurperso").html(erreurp);
                                } else {
                                    $.ajax({
                                        type: "POST",
                                        url: 'php/reserv_bd.php',
                                        data: {
                                            numC: numC,
                                            dateDep: dateDep,
                                            heureDep: heureDepC,
                                            nbrePerso: nbrePerso,
                                        },
                                        success: function (response) {

                                        }


                                    });
                                    $.ajax({
                                        type: "POST",
                                        url: 'php/perso_reserv.php',
                                        data: {
                                            numC: numC,
                                            dateDep: dateDep,
                                            nbrePerso: nbrePerso,
                                            nom1: nom1,
                                            prenom1: prenom1,
                                            age1: age1,
                                            nom2: nom2,
                                            prenom2: prenom2,
                                            age2: age2
                                        },
                                        success: function (response) {
                                            document.getElementById('success').style.display = "flex";
                                            sucess = "Circuit Reservé avec succès Pour 2 Personnes"
                                            $("#resv_succes").html(sucess);

                                        }


                                    });
                                }


                                break;

                            case "3":

                                var nom1 = $("#nom1").val();
                                var prenom1 = $("#prenom1").val();
                                var age1 = $("#age1").val();
                                var nom2 = $("#nom2").val();
                                var prenom2 = $("#prenom2").val();
                                var age2 = $("#age2").val();
                                var nom3 = $("#nom3").val();
                                var prenom3 = $("#prenom3").val();
                                var age3 = $("#age3").val();

                                if (nom1 == "" || prenom1 == "" || age1 == "" || nom2 == "" || prenom2 == "" || age2 == "" || nom3 == "" || prenom3 == "" || age3 == "") {
                                    erreurp = "Veuillez Saisir l'info de 3 Personnes";
                                    $("#erreurperso").html(erreurp);
                                } else {
                                    $.ajax({
                                        type: "POST",
                                        url: 'php/reserv_bd.php',
                                        data: {
                                            numC: numC,
                                            dateDep: dateDep,
                                            heureDep: heureDepC,
                                            nbrePerso: nbrePerso,
                                        },
                                        success: function (response) {

                                        }


                                    });
                                    $.ajax({
                                        type: "POST",
                                        url: 'php/perso_reserv.php',
                                        data: {
                                            numC: numC,
                                            dateDep: dateDep,
                                            nbrePerso: nbrePerso,
                                            nom1: nom1,
                                            prenom1: prenom1,
                                            age1: age1,
                                            nom2: nom2,
                                            prenom2: prenom2,
                                            age2: age2,
                                            nom3: nom3,
                                            prenom3: prenom3,
                                            age3: age3
                                        },
                                        success: function (response) {
                                            document.getElementById('success').style.display = "flex";
                                            sucess = "Circuit Reservé avec succès Pour 3 Personnes"
                                            $("#resv_succes").html(sucess);
                                        }


                                    });
                                }

                                break;

                            case "4":

                                var nom1 = $("#nom1").val();
                                var prenom1 = $("#prenom1").val();
                                var age1 = $("#age1").val();

                                var nom2 = $("#nom2").val();
                                var prenom2 = $("#prenom2").val();
                                var age2 = $("#age2").val();

                                var nom3 = $("#nom3").val();
                                var prenom3 = $("#prenom3").val();
                                var age3 = $("#age3").val();

                                var nom4 = $("#nom4").val();
                                var prenom4 = $("#prenom4").val();
                                var age4 = $("#age4").val();

                                if (nom1 == "" || prenom1 == "" || age1 == "" || nom2 == "" || prenom2 == "" || age2 == "" || nom3 == "" || prenom3 == "" || age3 == "" || nom4 == "" || prenom4 == "" || age4 == "") {
                                    erreurp = "Veuillez Saisir l'info de 4 Personnes";
                                    $("#erreurperso").html(erreurp);
                                } else {
                                    $.ajax({
                                        type: "POST",
                                        url: 'php/reserv_bd.php',
                                        data: {
                                            numC: numC,
                                            dateDep: dateDep,
                                            heureDep: heureDepC,
                                            nbrePerso: nbrePerso,
                                        },
                                        success: function (response) {



                                        }


                                    });
                                    $.ajax({
                                        type: "POST",
                                        url: 'php/perso_reserv.php',
                                        data: {
                                            numC: numC,
                                            dateDep: dateDep,
                                            nbrePerso: nbrePerso,
                                            nom1: nom1,
                                            prenom1: prenom1,
                                            age1: age1,
                                            nom2: nom2,
                                            prenom2: prenom2,
                                            age2: age2,
                                            nom3: nom3,
                                            prenom3: prenom3,
                                            age3: age3,
                                            nom4: nom3,
                                            prenom4: prenom3,
                                            age4: age3
                                        },
                                        success: function (response) {
                                            document.getElementById('success').style.display = "flex";
                                            sucess = "Circuit Reservé avec succès Pour 4 Personnes"
                                            $("#resv_succes").html(sucess);

                                        }


                                    });
                                }

                                break;
                            case "5":

                                var nom1 = $("#nom1").val();
                                var prenom1 = $("#prenom1").val();
                                var age1 = $("#age1").val();

                                var nom2 = $("#nom2").val();
                                var prenom2 = $("#prenom2").val();
                                var age2 = $("#age2").val();

                                var nom3 = $("#nom3").val();
                                var prenom3 = $("#prenom3").val();
                                var age3 = $("#age3").val();

                                var nom4 = $("#nom4").val();
                                var prenom4 = $("#prenom4").val();
                                var age4 = $("#age4").val();


                                var nom5 = $("#nom5").val();
                                var prenom5 = $("#prenom5").val();
                                var age5 = $("#age5").val();
                                if (nom1 == "" || prenom1 == "" || age1 == "" || nom2 == "" || prenom2 == "" || age2 == "" || nom3 == "" || prenom3 == "" || age3 == "" || nom4 == "" || prenom4 == "" || age4 == "" || nom5 == "" || prenom5 == "" || age5 == "") {
                                    erreurp = "Veuillez Saisir l'info de 5 Personnes";
                                    $("#erreurperso").html(erreurp);
                                } else {
                                    $.ajax({
                                        type: "POST",
                                        url: 'php/reserv_bd.php',
                                        data: {
                                            numC: numC,
                                            dateDep: dateDep,
                                            heureDep: heureDepC,
                                            nbrePerso: nbrePerso,
                                        },
                                        success: function (response) {


                                        }


                                    });
                                    $.ajax({
                                        type: "POST",
                                        url: 'php/perso_reserv.php',
                                        data: {
                                            numC: numC,
                                            dateDep: dateDep,
                                            nbrePerso: nbrePerso,
                                            nom1: nom1,
                                            prenom1: prenom1,
                                            age1: age1,
                                            nom2: nom2,
                                            prenom2: prenom2,
                                            age2: age2,
                                            nom3: nom3,
                                            prenom3: prenom3,
                                            age3: age3,
                                            nom4: nom4,
                                            prenom4: prenom4,
                                            age4: age4,
                                            nom5: nom5,
                                            prenom5: prenom5,
                                            age5: age5
                                        },
                                        success: function (response) {
                                            document.getElementById('success').style.display = "flex";
                                            sucess = "Circuit Reservé avec succès Pour 5 Personnes"
                                            $("#resv_succes").html(sucess)
                                        }


                                    });
                                }

                                break;


                        }
                    }
                    $("#message").html(msg);
                }
            });

        }

    });
    document.getElementsByClassName("close")[0].onclick = function () {
        document.getElementById('success').style.display = "none";
    }
    window.addEventListener("click", function (event) {
        if (event.target == document.getElementById('success')) {
            document.getElementById('success').style.display = "none";
        }
    });


});
