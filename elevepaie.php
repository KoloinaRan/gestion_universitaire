<?php 


	/// NOM BDD
	$db_name='school';
	/// UTILISATEUR BDD WAMP
	$db_username='root';
	/// MDP BDD WAMP
	$db_password='';
	/// HOST WAMP => localhost
	$db_host='localhost';
	/// mysqli_connect(host, user, password, dbname)
	$db = mysqli_connect($db_host, $db_username, $db_password, $db_name);
	//or die('could not connect to database');

	if (!$db){
		die("echec de la connexion:" .mysqli_connect_error());
	}
 ?>
<?php 
$id=@$_POST["id"];
$matricule=@$_POST["ideleve"];
$type=@$_POST["type"];
$montant=@$_POST["mtp"];
$datep=@$_POST["datep"];
$type=@$_POST['type'];
$mess='';
?>
<?php 
// enregistrement séance cours
if (isset($_POST['benrg']) && !empty($matricule) && !empty($type) && !empty($datep)) {
    $sql = mysqli_query($db, "INSERT INTO paie (ideleve, type, mtp, datep) VALUES ('$matricule', '$type', '$montant', '$datep')");

    if ($sql) {
        $mess = "<h5>Enregistrement effectué avec succès !</h5>";
    } else {
        $mess = "<h2>Erreur lors de l'enregistrement : " . mysqli_error($db) . "</h2>";
    }}



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/w3/w3.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/w3/w3-theme-blue.css">
    <link rel="stylesheet" type="text/css" href="public/fontAwesome/css/all.min.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">

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
       body {
    background-image: url(images/login.jpg) !important;
    background-size: 100%;
    height: 100%;
    overflow: auto; 
    font-family: arial;
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

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-image: url(images/980.jpg) !important;background-size:cover;">



                

                    <!-- Topbar Navbar -->
                    <h3 style="margin-top:20px;margin-left:30px;">Formulaire d'enregistrement des types de payements</h3>


               
                <div align="center">
<br>





<div class="container">
    <div>
        
 
<form action="" method="POST" >

	
	<table style="width:200px">
	<TR><td><input placeholder=" Matricule" type="text" name="ideleve" style="width: 200px;height:30px;margin-left:10px;margin-right:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);"value=""></td>
        
       	<td><select name="type" id="type" style="width: 150px;height:30px;margin-right:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);">
     <option  value="<?php echo $type; ?>"><?php echo $type; ?></option>
	 <option  value="" disabled selected>Types</option>
         <option  value="inscription">Frais d'inscription</option>
        <option  value="generaux">Frais généraux</option>
        <option  value="tranche1">Tranche 1</option>
        <option  value="tranche2">Tranche 2</option>
        <option  value="tranche3">Tranche 3</option>
        <option  value="tranche4">Tranche 4</option>
        <option  value="tranche5">Tranche 5</option>

     </select></td>
       
       

	<td><input placeholder="Montant  "  type="text" name="mtp" style="width: 200px;height:30px;margin-left:10px;margin-right:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);" value=""></td>
	
    

<td><input   type="date" name="datep" style="width: 100px;height:30px;margin-left:10px;margin-right:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);" value=""></td>
	
  

<td><button   type="submit" name="benrg" value="" style="color:green ; cursor: pointer; margin-top: 12px; width: 50px; height: 30px;
                                border-top-left-radius: 100px;border-top-right-radius: 100px;
                                    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;margin-bottom: 10px;background-color:white;">
                                <h4><i class="fa fa-floppy-disk"></i></h4>
                            </button>
</td>
<td><button    value="" style="cursor: pointer; margin-top: 12px; width: 80px; height: 30px;margin-left:10px;
                                border-top-left-radius: 100px;border-top-right-radius: 100px;
                                    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;margin-bottom: 10px;background-color:white;">
                                <a href="somme.php" style="color:red ;text-decoration:none;">Rapport</a>
                            </button>
</td>
	</tr>
	</TR></table>
    <center><?php print $mess;?></center>
	
    </div>
</form>
 

<div class="data-table-area mg-b-15">
               
                        <div class="card-body">
                            <div class="table-responsive">
 
   
<?php
print "<br><br>";

// Code de recherche
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Affichage de la barre de recherche
print '<form action="" method="GET">';
print '<input type="text" name="search"  style=" cursor: pointer; margin-top: 10px; width: 200px; height: 30px;
border-top-left-radius: 100px;border-top-right-radius: 100px;
    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;margin-bottom: 10px;background-color:white;" placeholder="Rechercher..." value="' . $searchTerm . '">';
print '<button   type="submit" name="benrg" value="" style="color:blue ; cursor: pointer; margin-top: 14px; width: 50px; height: 30px;
border-top-left-radius: 100px;border-top-right-radius: 100px;margin-left:10px;
    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;background-color:white;">
<i class="fa fa-search"></i>
</button>
';
print '</form>';

// Affichage de la table
print '<table style="text-align:center;" class="table table-bordered" data-search="true" id="dataTable" width="100%" cellspacing="0">';
print '<tr>';
print '<th data-field="nom"> Matricules</th>';
print '<th data-field="filiere">Types</th>';
print '<th data-field="niveau">Montant (Ariary)</th>';
print '<th data-field="matricule">Date de payement</th>';
print '</tr>';

// Requête SQL pour récupérer les données
$rq2 = mysqli_query($db, "SELECT * FROM paie");

// Boucle pour afficher les données filtrées ou non
while ($rst2 = mysqli_fetch_assoc($rq2)) {
  // Vérifier si les données correspondent au terme de recherche
  if (empty($searchTerm) || strpos(strtolower($rst2['ideleve']), strtolower($searchTerm)) !== false || strpos(strtolower($rst2['type']), strtolower($searchTerm)) !== false || strpos(strtolower($rst2['mtp']), strtolower($searchTerm)) !== false || strpos(strtolower($rst2['datep']), strtolower($searchTerm)) !== false) {
    print "<tr>";
    echo "<td>" . $rst2['ideleve'] . "</td>";
    echo "<td>" . $rst2['type'] . "</td>";
    echo "<td>" . $rst2['mtp'] . "</td>";
    echo "<td>" . $rst2['datep'] . "</td>";
    print "</tr>";
  }
}

print '</table>';
?>

</div></div></div>


    

    </div>
   



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



                    
            
             
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
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

        <!-- bootstrap js editeur de texte-->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/summernote/summernote-updated.min.js"></script>
        <script src="js/summernote/summernote-active.js"></script>
         <!-- fin bootstrap js de l'editeur de texte  -->
         <script src="js/data-table/bootstrap-table-export.js"></script>
         <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
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