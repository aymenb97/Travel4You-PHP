const emailRegEx =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
$(document).ready(function () {
  $("#but_login").click(function () {
    var email = $("#emailLogin").val().trim();
    var password = $("#passwordLogin").val().trim();
    var msg = "";
    $("#message").html(msg);
    console.log(email);
    if (emailRegEx.test(email)) {
      $.ajax({
        url: "php/auth_check.php",
        type: "post",
        data: {
          email: email,
          password: password,
        },
        success: function (response) {
          if (response == 1) {
            window.location = "reserver_circuit.php";
          } else {
            msg = "Email ou mot de passe invalide";
          }
          $("#message").html(msg);
        },
      });
    } else {
      msg = "Veuillez Saisir un Email valide";
      $("#message").html(msg);
    }
  });
});
$(document).ready(function () {
  $("#but_ins").click(function () {
    var email = $("#email").val().trim();
    var msg = "";
    var form_chk = "";

    $("#form_erreur").html(form_chk);
    $("#message_ins").html(msg);
    if (emailRegEx.test(email)) {
      $.ajax({
        url: "php/email_check.php",
        type: "post",
        data: {
          email: email,
        },
        success: function (response) {
          if (response == 1) {
            msg = "Email existe deja";
            $("#message_ins").html(msg);
          } else {
            var vNom = $("#nom").val().trim();
            var vEmail = $("#email").val().trim();
            var vPassword = $("#password").val();
            var vPrenom = $("#prenom").val().trim();
            var vEtat = $("#etat").val().trim();
            var vVille = $("#ville").val().trim();
            var vPcode = $("#pCode").val().trim();
            var vPhone = $("#phone").val().trim();
            var vSexe = $(".sexe:checked").val().trim();

            if (
              vEmail == "" &&
              vNom == "" &&
              vPassword == "" &&
              vPrenom == "" &&
              vEtat == "" &&
              vVille == "" &&
              vPcode == "" &&
              vPhone == ""
            ) {
              form_chk = "Veuillez Remplir Tout Les Champs!";
              $("#form_erreur").html(form_chk);
            } else {
              $.post(
                "inscription.php",
                {
                  email: vEmail,
                  password: vPassword,
                  nom: vNom,
                  prenom: vPrenom,
                  etat: vEtat,
                  ville: vVille,
                  pCode: vPcode,
                  phone: vPhone,
                  sexe: vSexe,
                },
                function (response, status) {
                  window.location = "reserver_circuit.php";
                  $("#form")[0].reset();
                }
              ).fail(function (res, status) {
                alert(res);
              });
            }
          }
        },
      });
    } else {
      msg = "Veuillez saisir un mail valide";
      $("#message_ins").html(msg);
    }
  });
});
