 $(document).ready(function () {
     $("#but_login").click(function () {
         var cin = $("#cin_id").val().trim();
         var msg = "";
         $("#message").html(msg);
         if (cin != "") {
             $.ajax({
                 url: 'php/cin_check.php',
                 type: 'post',
                 data: {
                     cin: cin
                 },
                 success: function (response) {

                     if (response == 1) {
                         window.location = "reserver.php";
                     } else {
                         msg = "CIN est invalide";
                     }
                     $("#message").html(msg);
                 }
             });
         } else {
             msg = "Veuillez Saisir un CIN";
             $("#message").html(msg);
         }

     });

 });
 $(document).ready(function () {
     $("#but_ins").click(function () {
         var cin = $("#cin_ins").val().trim();
         var msg = "";
         var form_chk = "";
         $("#form_erreur").html(form_chk);
         $("#message_ins").html(msg);
         if (cin != "" && cin.length == 8 && $.isNumeric(cin)) {
             $.ajax({
                 url: 'php/cin_check.php',
                 type: 'post',
                 data: {
                     cin: cin
                 },
                 success: function (response) {

                     if (response == 1) {
                         msg = "CIN existe deja";
                         $("#message_ins").html(msg);
                     } else {

                         var vNom = $("#nom").val().trim();
                         var vPrenom = $("#prenom").val().trim();
                         var vEtat = $("#etat").val().trim();
                         var vVille = $("#ville").val().trim();
                         var vPcode = $("#pCode").val().trim();
                         var vPhone = $("#phone").val().trim();
                         var vSexe = $(".sexe:checked").val().trim();
                         if (vNom == "" && vPrenom == "" && vEtat == "" && vVille == "" && vPcode == "" && vPhone == "") {
                             form_chk = "Veuillez Remplir Tout Les Champs!";
                             $("#form_erreur").html(form_chk);
                         } else {

                             $.post("inscription.php", {
                                     cin: cin,
                                     nom: vNom,
                                     prenom: vPrenom,
                                     etat: vEtat,
                                     ville: vVille,
                                     pCode: vPcode,
                                     phone: vPhone,
                                     sexe: vSexe
                                 },
                                 function (response, status) {
                                     window.location = "reserver.php";

                                     $("#form")[0].reset();
                                 });
                         }

                     }

                 }

             });
         } else {
             msg = "Le CIN doit etre 8 chiffres";
             $("#message_ins").html(msg);
         }
     });

 });
