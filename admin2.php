                                          <!-- *** Koloina RANDRIARISOA  *** -->
<?php 
include('connexion.php');

// Déclarations des variables
if (empty($_POST['nom']) or empty($_POST['contact']) or empty($_POST['email']) or empty($_POST['mdp']) or empty($_POST['cmdp'])) { 
    // Affichage du message d'erreur si des champs sont vides
    echo '<center><div style="width: 60%; height: 160px; margin-top:200px; background-image: linear-gradient(1000deg,rgb(7, 18, 49),rgb(15, 60, 102),rgb(7, 18, 49)); float:center; box-shadow: -2px 2px 2px 2px rgb(4, 13, 39);"><h2><span style="color: red;"><i class="fa fa-warning"></i><br>Erreur d\'inscription</span></h2>
          <h5><span style="font:times;color:white">Il se peut que vous êtes en présence d\'un ou plusieurs champs vides.</span></h5>
          <br><a href="index.html">
          <button class="w3-green" type="button" style="cursor: pointer; margin-top: -10px; width: 150px; height: 40px; border-top-left-radius: 10px;border-top-right-radius: 10px; border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;">
          <i class="fa fa-sign-in"></i> Recommencer</button></center></a></div>';
} else {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $cmdp = $_POST['cmdp'];
    $hash_mdp = md5($mdp);
    $hash_cmdp = md5($cmdp);

    // Vérification des mots de passe
    if ($hash_mdp != $hash_cmdp) {
        echo '<center><div style="width: 60%; height: 130px; margin-top:230px; background-image: linear-gradient(1000deg,rgb(7, 18, 49),rgb(15, 60, 102),rgb(7, 18, 49)); float:center; box-shadow: -2px 2px 2px 2px rgb(4, 13, 39);">
              <font color=white><h4><div style="font-family:\'Times New Roman\';margin-top:5px;"><br>Le mot de passe ne correspond pas.<br>Veuillez réessayer.</h4></div></font>
              <a href="index.html"><button class="w3-green" type="button" style="cursor: pointer; margin-top: -40px; width: 150px; height: 30px; border-top-left-radius: 10px;border-top-right-radius: 10px; border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;">
              <i class="fa fa-sign-in"></i> Recommencer</button></a></div></center>';
    } else {
        // Vérification si le nom ou l'email existe déjà dans la base de données
        $requete_check_nom = "SELECT * FROM inscription_admin2 WHERE nom = '$nom'";
        $resultat_check_nom = mysqli_query($db, $requete_check_nom);

        if (mysqli_num_rows($resultat_check_nom) > 0) {
            // Si le nom existe déjà, afficher un message d'erreur
            echo '<center><div style="width: 60%; height: 160px; margin-top:200px; background-image: linear-gradient(1000deg,rgb(7, 18, 49),rgb(15, 60, 102),rgb(7, 18, 49)); float:center; box-shadow: -2px 2px 2px 2px rgb(4, 13, 39);">
                  <h2><span style="color: red;"><i class="fa fa-warning"></i><br>Erreur : Nom déjà utilisé</span></h2>
                  <h5><span style="font:times;color:white">Le nom que vous avez entré est déjà pris. Veuillez en choisir un autre.</span></h5>
                  <br><a href="index.html"><button class="w3-green" type="button" style="cursor: pointer; margin-top: -10px; width: 150px; height: 40px; border-top-left-radius: 10px;border-top-right-radius: 10px; border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;">
                  <i class="fa fa-sign-in"></i> Recommencer</button></a></div></center>';
        } else {
            // Si le nom n'existe pas, procéder à l'insertion
            $requete3 = "INSERT INTO inscription_admin2(nom,contact,email,mdp,cmdp) VALUES ('$nom', '$contact','$email','$hash_mdp', '$hash_cmdp')";
            $resultat3 = mysqli_query($db, $requete3);

            // Insertion dans la table login
            $requete4 = "INSERT INTO login(email,mdp) VALUES ('$email','$hash_mdp')";
            $resultat4 = mysqli_query($db, $requete4);

            if ($resultat3 && $resultat4) {
                echo '<center><div style="width: 60%; height: 160px; margin-top:210px; background-image: linear-gradient(10deg,rgb(7, 18, 49),rgb(15, 60, 102),rgb(7, 18, 49)); float:center; box-shadow: -2px 2px 2px 2px rgb(4, 13, 39);">
                      <font color=white><h3><i class="fa fa-file-signature" style="margin-top:5px"></i><br>Inscription réussie</h3>
                      Bienvenue dans notre équipe éducative !</font>
                      <br><a href="index.html"><button class="w3-blue-grey" type="button" style="cursor: pointer; margin-top: 10px; width: 150px; height: 30px; border-top-left-radius: 10px;border-top-right-radius: 10px; border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;">
                      <i class="fa fa-sign-in"></i> OK</button></a></div></center>';
            }
        }
    }
}
?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Reponse</title>
 	<meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="public/w3/w3.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/w3/w3-theme-blue.css">
    <link rel="stylesheet" type="text/css" href="public/fontAwesome/css/all.min.css">
	
 	<style type="text/css">
 	body {
    background-image: url(images/login.jpg) !important;
    background-size: 100%;
    height: 100%;
    overflow: hidden; 
    font-family: arimo;
    color: #535252;
    overflow-x: hidden; }
 	</style>
 </head>
 <body>
 </body>
 </html>
