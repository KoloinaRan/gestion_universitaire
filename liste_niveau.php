<?php 
	$db_name='school';
	$db_username='root';
	$db_password='';
	$db_host='localhost';
	$db = mysqli_connect($db_host, $db_username, $db_password, $db_name);
	if (!$db){
		die("echec de la connexion:" .mysqli_connect_error());
	}
 ?>

<?php 
$nom=@$_POST["nom"];
$filiere=@$_POST["filiere"];
$niveau=@$_POST["niveau"];
$matricule=@$_POST["matricule"];
$date=@$_POST["date"];
$contact=@$_POST["contact"];
$pere=@$_POST["pere"];
$mere=@$_POST["mere"];
$adresse=@$_POST["adresse"];
$diplome=@$_POST["diplome"];
$numero=@$_POST["numero"];
$mess='';
?>

<?php 
//enregistrement séance cours
if(isset($_POST['benrg'])&&!empty($nom)&&!empty($filiere)
&&!empty($niveau)&&!empty($matricule)&&!empty($date)&&!empty($contact)
&&!empty($pere)&&!empty($mere)&&!empty($adresse)&&!empty($diplome)&&!empty($numer)){
 $sql=mysqli_query($db,"insert into liste_etudiant(nom,filiere,niveau,matricule,date,contact,pere,mere,adresse,diplome) VALUES ('$nom','$filiere','$niveau','$matricule','$date','$contact','$pere','$mere','$adresse','$diplome')");
if($sql){
 $mess="<b><h5>Enregistrement éffectué avec succès !</h5></b>";
}
else{
 $mess="<h2>Erreur !</h2>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Liste par niveau</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/c3.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="public/w3/w3.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/w3/w3-theme-blue.css">
    <link rel="stylesheet" type="text/css" href="public/fontAwesome/css/all.min.css">
<style type="text/css">

    h3 {
        font-size: 15px;
        text-align: center;
        margin-bottom: 21px;
        margin-top:-10px;
        color: black;
        text-transform: uppercase;
        font-family: "Arial";
       }
.form-holder {
    position: relative;
    margin-left: 1.3%; }
.form-holder i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 20px; }
h5{
    color: green;}
h2{
    color: red;}
body {
    background-image: url(images/login.jpg) !important;
    background-size: 100%;
    height: 100%;
    overflow: auto; 
    font-family: arial;
    color: #535252;
    overflow-x: hidden; }
</style>
</head>
<body id="page-top" style="font-family: Arial;">
<div id="wrapper">    
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <h3 style="margin-top: 5px;color:white;">Administrateur</h3>
            <h5 style="font-size: 12px;text-align: center;margin-bottom: 15px;margin-top:-10px;color:white;" id="horloge"> </h5>

            <hr class="sidebar-divider my-0">
            <li class="nav-item ">
                <a class="nav-link" href="index.html"><i class="fas fa-house-user"> </i><span> </span> <span> Accueil</span></a>
            </li>
    
            <hr class="sidebar-divider my-0">
            <li class="nav-item ">
                <a class="nav-link" href="liste.php"><i class="fas fa-person"></i><span> </span> <span>Etudiants</span></a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item ">
                <a class="nav-link" href="liste_enseignant.php"><i class="fas fa-users"></i><span> </span> <span>Formateurs</span></a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item ">
                <a class="nav-link" href="seance.php"><i class="fas fa-file-edit"></i><span> </span> <span>Séance de cours</span></a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item ">
                <a class="nav-link" href="edt.php"><i class="fas fa-timeline"></i><span> </span> <span>Emplois du temps</span></a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item ">
                 <a class="nav-link" href="" data-toggle="collapse" data-target="#collapsefrais" aria-expanded="true" aria-controls="collapseUtilities">
                 <i class="fas fa-dollar-sign"></i><span> </span> <span>Frais scolaires</span></a>
                    <div id="collapsefrais" class="collapse" aria-labelledby="headingUtilities"data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="paie.php">Enregistrement</a>
                            <a class="collapse-item" href="elevepaie.php">Registre</a>
                            <a class="collapse-item" href="payement.php">Payements</a>
                            <a class="collapse-item" href="vfpaiement.php">Retardataire</a>
                        </div>
                    </div>
            </li>

            <hr class="sidebar-divider  my-0">
            <li class="nav-item ">
                <a class="nav-link" href="" data-toggle="collapse" data-target="#collapseNote" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-table"></i><span> </span> <span>Notes</span></a>
                    <div id="collapseNote" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="note_enrg.php">Ajouts </a>
                            <a class="collapse-item" href="releve_note.php">Relevé de notes</a>
                        </div>
                    </div>
            </li>
            <hr class="sidebar-divider  my-0">
        </ul> 
        <div id="content-wrapper" class="d-flex flex-column" style=" background-image: url(images/R.jpg);background-size:cover;">
            <div id="content">
            <h3 style="margin-top:20px; margin-left:50px; font-family: 'El Messiri', sans-serif; font-size:25px;">
Listes des étudiants par filière et par niveaux</h3>
                <div class="container-fluid" >
                <div align="center" >
	<form action="" method="POST" >
	<table>
	<tr>
        <td><select name="filiere" id="filiere"style="min-width: 100px;height:30px;margin-left:335px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);" >
     <option  value="<?php echo $filiere; ?>"><?php echo $filiere; ?></option>
     <option  value="" disabled selected>Filière</option>
     <option  value="BTP ">BTP</option>
     <option  value="Droit ">Droit</option>
     <option  value="Hotellerie ">Hotellerie</option>
     <option  value="Gestion ">Gestion</option>
     <option  value="Informatique ">Informatique</option></td>
 
     </select></td>
        <td><select name="niveau" id="niveau"style="min-width: 100px;height:30px;margin-right:500px;margin-left:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);" >
     <option  value="<?php echo $niveau; ?>"><?php echo $niveau; ?></option>
     <option  value="" disabled selected>Niveaux</option>
         <option  value="1ere Année">1ere Année</option>
        <option  value="2e Année">2e Année</option>
        <option  value="3e Année">3e Année</option>
        <option  value="4e Année">4e Année</option>
        <option  value="5e Année">5e Année</option>
 
     </select></td>
     
     <td><input type="submit" name="baff" value="AFFICHER" class="bouton" style="min-width: 100px;height:30px;margin-left:-490px;
                            border-top-left-radius: 100px;border-top-right-radius: 100px;
                                border-bottom-left-radius: 100px;border-bottom-right-radius: 100px; background-color: rgb(7, 18, 49);color:white;"></td>

	<td><button  onclick="printDiv('printableArea')"  style="cursor: pointer; margin-top: 12px; width: 50px; height: 30px;color:white;margin-left:-380px;
                                border-top-left-radius: 100px;border-top-right-radius: 100px;
                                    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;margin-bottom: 10px;background-color:rgb(7, 18, 49);">
                                <h4><i class="fa fa-print"></i></h4>
                            </button></td></tr>
</table>
</form>
<div id="printableArea">
<H5 style="font-family:Arimo; color:darkred;margin-top:10px;"><CENTER> ~ <?php echo $filiere; ?> ~ <br> <?php echo $niveau; ?> </CENTER></H5>
<?php
// Afficher les séances de cours de la semaine par matière et par classe
if (isset($_POST['baff']) && !empty($filiere) && !empty($niveau)) {
    // Requête pour récupérer les étudiants
    $rq2 = mysqli_query($db, "SELECT * FROM liste_etudiant WHERE filiere='$filiere' AND niveau='$niveau' ORDER BY nom");

    // Vérification si la requête a réussi
    if ($rq2) {
        
        print '<table style="text-align:center;" id="table" data-toggle="table" data-toolbar="#toolbar">
        <thead> 
            <tr>
                <th data-field="nom">Nom &amp; Prénom</th>
                <th data-field="matricule">Matricule</th>
                <th> Obsérvations </th>
            </tr>
        </thead>';

    // Boucle sur les résultats de la requête
    while ($rst2 = mysqli_fetch_assoc($rq2)) {
        print "<tr>";
        echo "<td>" . $rst2['nom'] . "</td>";
        echo "<td>" . $rst2['matricule'] . "</td>";
        echo "<td></td>";
        
        print "</tr>";
    }

    print '</table>';
    } else {
        // Affichage d'un message d'erreur si la requête échoue
        echo "Erreur lors de l'exécution de la requête : " . mysqli_error($db);
    }

    // Fermer la connexion à la base de données
    mysqli_close($db);
}
?>
    <h6><b style="margin-left:800px;color:black;font-family:Arimo;">Nombres des étudiants : <span id="nombre-lignes"></span></b></h6> </h3>
</div>
  <script>
    // Calculer et afficher le nombre total de lignes du tableau
    window.onload = function() {
      var tableau = document.getElementById("table");
      var nombreLignes = tableau.getElementsByTagName("tr").length;

      document.getElementById("nombre-lignes").innerHTML = nombreLignes - 1; // Soustraire 1 pour exclure la ligne d'en-tête
    };
  </script>

  <script> function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}</script>

<script>
    // Obtenir l'élément HTML où afficher l'heure et la date
    var horlogeElement = document.getElementById("horloge");
    
    // Fonction pour obtenir l'heure et la date actuelles
    function afficherHeureDate() {
      // Obtenir la date et l'heure actuelles
      var date = new Date();
      
      // Obtenir les composants de l'heure
      var heures = date.getHours();
      var minutes = date.getMinutes();
      var secondes = date.getSeconds();
      
      // Obtenir les composants de la date
      var jour = date.getDate();
      var mois = date.getMonth() + 1; // Les mois commencent à partir de 0, donc ajouter 1
      var annee = date.getFullYear();
      
      // Formater les composants de l'heure et de la date avec des zéros devant si nécessaire
      heures = heures < 10 ? "0" + heures : heures;
      minutes = minutes < 10 ? "0" + minutes : minutes;
      secondes = secondes < 10 ? "0" + secondes : secondes;
      
      jour = jour < 10 ? "0" + jour : jour;
      mois = mois < 10 ? "0" + mois : mois;
      
      // Construire la chaîne de l'heure et de la date
      var heureDateString = jour + "/" + mois + "/" + annee+ " - " + heures + ":" + minutes + ":" + secondes; 
      
      // Afficher l'heure et la date dans l'élément HTML
      horlogeElement.textContent = heureDateString;
    }
    
    // Appeler la fonction pour afficher l'heure et la date initialement
    afficherHeureDate();
    
    // Mettre à jour l'heure et la date toutes les secondes
    setInterval(afficherHeureDate, 1000);
    
                        </script>   
</div>
</center>
</div>
     </div>
        </div>
            </div>
            </div>
        </div>
    </div>

     <script>
        //obtenir la date actuelle
        var dateActuelle = new Date();
        //formatage de l'annee actuelle au format aaaa-mm-jj
        var jour = ("0"+ dateActuelle.getDate()).slice(-2);
        var mois = ("0"+(dateActuelle.getMonth()+1)).slice(-2);
        var annee = dateActuelle.getFullYear();
        var dateFormatee = annee + "-" + mois + "-" + jour;
        //pre remplir le champ de date avec l'annee actuelle
        document.getElementById("date").value =dateFormatee;
     </script>               
                    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <script src="js/main.js"></script>

</body>

</html>