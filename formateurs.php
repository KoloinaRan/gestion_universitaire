                                          <!-- *** Koloina RANDRIARISOA  *** -->
<?php 
include('connexion.php');
 // Declarations des variables
if (empty($_POST['nom']) or empty($_POST['autorisation']) or empty($_POST['contact']) 
or empty($_POST['matiere']) ) { ?>

	
	
	<center><div style="width: 60%; height: 160px; margin-top:200px;
	background-image: 
	linear-gradient(1000deg,rgb(7, 18, 49),rgb(15, 60, 102),rgb(7, 18, 49)); float:center;
	box-shadow: -2px 2px 2px 2px rgb(4, 13, 39);"><h2><span style="color: red;"><i class="fa fa-warning"></i><br>Erreur d'inscription</span></h2>
			<h5><span style="font:times;color:white">Il se peut que vous êtes en présence d'un ou plusieurs champs vides.</span></h5>
			<br>
				<a href="index.html">
				<button  class="w3-green" type="button" style="cursor: pointer; margin-top: -10px; width: 150px; height: 40px;
		border-top-left-radius: 10px;border-top-right-radius: 10px;
	        border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;">
		<i class="fa fa-sign-in"></i> Recommencer
	</button></center>
				</a></div>

<?php } else {
$nom = $_POST['nom'];
$autorisation =$_POST['autorisation'];
$adresse =$_POST['adresse'];
$contact = $_POST['contact'];
$matiere =$_POST['matiere'];



if ($contact == $adresse) {
?>
<center><div style="width: 60%; height: 130px; margin-top:230px;
	background-image: 
	linear-gradient(1000deg,rgb(7, 18, 49),rgb(15, 60, 102),rgb(7, 18, 49)); float:center;
	box-shadow: -2px 2px 2px 2px rgb(4, 13, 39);">
	<font color=white><h4><div style="font-family:'Times New Roman';margin-top:5px;"><br>Impossible d'enregistrer .<br>Veuillez réessayer.</h4></div></font>
			<a href="index.html">
			<button  class="w3-green" type="button" style="cursor: pointer; margin-top: -40px; width: 150px; height: 30px;
		border-top-left-radius: 10px;border-top-right-radius: 10px;
	        border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;">
		<i class="fa fa-sign-in"></i> Recommencer
	</button>
			</a></div></center>

			<?php
} else {

$requete3 = "INSERT INTO enseignants(nom) VALUES ('$nom)";
$resultat3 = mysqli_query($db,$requete3);

$requete4 = "INSERT INTO liste_enseignant(nom,autorisation,adresse,contact,matiere) VALUES ('$nom','$autorisation','$adresse','$contact','$matiere')";
$resultat4 = mysqli_query($db,$requete4);


if ($resultat3 = true) { ?>

<center><div style="width: 60%; height: 100px; margin-top:260px;
	background-image: 
	linear-gradient(10deg,rgb(7, 18, 49),rgb(15, 60, 102),rgb(7, 18, 49)); float:center;
	box-shadow: -2px 2px 2px 2px rgb(4, 13, 39);">
	<font color=white><h3><i class="fa fa-file-signature" style="margin-top:20px"></i><br>Inscription réussi</h3>
</font>
<br>
			<a href="liste_enseignant.php">
			<button  class="w3-blue-grey" type="button" style="cursor: pointer; margin-top: -20px; width: 150px; height: 30px;
		border-top-left-radius: 10px;border-top-right-radius: 10px;
	        border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;">
		<i class="fa fa-sign-in"></i> OK
	</button>
			</a></div></center>
<?php

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
