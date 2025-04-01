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
 
$mess='';

?>

<?php  
//insertion des notes de controle
$matricule=@$_POST['matricule'];
$nom=@$_POST['nom'];
$matiere=@$_POST['matiere'];
$filiere=@$_POST['filiere'];
$niveau=@$_POST['niveau'];
$examen=@$_POST['examen'];
$coefficient=@$_POST['coefficient'];
if(isset($_POST['bcontrole'])&&!empty($matricule)){
$rq=mysqli_query($db,"insert into note(matricule,nom,matiere,filiere,niveau,examen,coefficient) values('$matricule','$nom','$matiere','$filiere','$niveau','$examen','$coefficient')");
if($rq){
$mess='<b class="succes">Insertion réussie !</b>';
}
else
$mess="<b class='erreur'>Impossible d'insérer !</b>";
}

?>





<?php 
//supprimer notes
if(isset($_POST['bsupp'])&&!empty($matricule)){
$rq=mysqli_query($db,"delete from note  where matricule='$matricule' and matiere='$matiere'");
if($rq){
$mess='<h2 class="succes">Suppréssion réussie !</h2>';
}
else
$mess="<h5 class='erreur'>Impossible de supprimer !</h5>";
}
?>
<!-- Created by TopStyle Trial - www.topstyle4.com -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>




    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="styles.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
        <link href="theme.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="public/w3/w3.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
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
       color: green;
    }
    h2{
       color: red;
    }
   b{text-decoration:underline;
    margin-left:-400px;
    text-align:left;
    font-family: "arimo";
font-size:18px; }
    
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
            <div id="content" style=" background-image: url(images/R.jpg);	background-size:cover;  ">
            <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow" style=" background-image: 
            linear-gradient(100deg,rgba(14, 55, 78, 0.315),transparent,rgba(14, 55, 78, 0.315));">

                

          
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
  
  <table align="">
  <td><input placeholder=" Nom"name="nom" id="nom" style="width: 200px;height:30px;margin-left:170px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; " >
</td>
 <td><input placeholder="Matricule "name="matricule" id="matricule" style="width: 200px;height:30px;margin-left:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
</td>
<td><select name=filiere id="filiere" style="width: 150px;height:30px;margin-left:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; " >
 
   <option  value="" disabled selected>  Filière</option>
   <option  value="BTP ">BTP</option>
   <option  value="Droit ">Droit</option>
   <option  value="Hotelerie ">Hotelerie</option>
   <option  value="Gestion ">Gestion</option>
   <option  value="Informatique ">Informatique</option></select></td>
<td></td><td><select name=niveau id="niveau" style="width: 150px;height:30px;margin-left:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; " >
   <option  value="" disabled selected> Niveaux</option>
         <option  value="1ere Année">1ere Année</option>
        <option  value="2e Année">2e Année</option>
        <option  value="3e Année">3e Année</option>
        <option  value="4e Année">4e Année</option>
        <option  value="5e Année">5e Année</option>
     </select></td>
<td><button  type="submit" name="brech" value="" style="width: 50px;height:30px;margin-left:10px;
                                border-top-left-radius: 100px;border-top-right-radius: 100px;
                                    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;">
                                <h5><i class="fa  fa-user-plus "></i></h5>
                            </button></td>  
                        
	<td><button  onclick="printDiv('printableArea')"  style="width: 50px;height:30px;margin-left:5px;
                                border-top-left-radius: 100px;border-top-right-radius: 100px;
                                    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;">
                                <h5><i class="fa fa-print"></i></h5>
                            </button></td></tr>
</table>
  </form>


                </nav>
       

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <br><br>
	<div align="center">
    <div id="printableArea">
    <center><div style="width: 50%; 
            background-color: white;
          
            box-shadow: 2px 2px 2px 2px black;
	">
<br>
  <h3>RELEVE DE NOTES</h3>

  <br>
  <div style="
    margin-left:10px;
    text-align: left;">
  <?php print $matricule;?>
  <br>
 <?php print $nom;?>
 <br>
 <?php print $filiere;?>
 <br>
 <?php print $niveau;?>
</div>
<br>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/></head><body>
<?php
// Liste des notes
if (isset($_POST['brech'])) {
    $sql = mysqli_query($db, "SELECT * FROM note WHERE matricule='$matricule'");

    // Vérifier si des notes ont été trouvées
    if (mysqli_num_rows($sql) > 0) {
        // Initialisation des variables
        $sumCoefficients = 0; // Somme des coefficients
        $sumExams = 0; // Somme des notes d'examen

        print '<table style="text-align:center;" class="table table-bordered"  data-search="true" id="dataTable" width="100%" cellspacing="0">
            <tr><th>Matiere</th><th>Coefficient</th><th>Note finale</th></tr>';

        while ($rst2 = mysqli_fetch_assoc($sql)) {
            print "<tr>";
            echo "<td>".$rst2['matiere']."</td>";
            echo "<td>".$rst2['coefficient']."</td>";

            $examen = $rst2['examen']; // Récupère la valeur de la colonne "examen"
            $coefficient = $rst2['coefficient']; // Récupère la valeur de la colonne "coefficient"
            $noteFinale = $examen * $coefficient; // Calcule la note finale

            echo "<td>".$noteFinale."</td>";

            $sumCoefficients += $coefficient; // Ajoute le coefficient à la somme des coefficients
            $sumExams += $noteFinale; // Ajoute la note finale à la somme des notes d'examen

            print "</tr>";
        }

        // Calcul de la moyenne finale
        $moyenneFinale = $sumExams / $sumCoefficients;

        // Affichage de la moyenne finale
        echo "<br> L'étudiant(e) a obtenu(e) une moyenne de ".number_format($moyenneFinale, 3)."";

        // Détermination du statut final en fonction de la moyenne
        $statutFinal = "";
        if ($moyenneFinale >= 0 && $moyenneFinale < 7) {
            $statutFinal = "Remise à sa famille";
        } elseif ($moyenneFinale >= 7 && $moyenneFinale < 10) {
            $statutFinal = "Redouble";
        } elseif ($moyenneFinale >= 10 && $moyenneFinale < 12) {
            $statutFinal = "Passable";
        } elseif ($moyenneFinale >= 12 && $moyenneFinale < 14) {
            $statutFinal = "Assez-bien";
        } elseif ($moyenneFinale >= 14 && $moyenneFinale < 16) {
            $statutFinal = "Bien";
        } elseif ($moyenneFinale >= 16 && $moyenneFinale < 18) {
            $statutFinal = "Très bien";
        } elseif ($moyenneFinale >= 18 && $moyenneFinale <= 20) {
            $statutFinal = "Honorable";
        }

        // Affichage du statut final
        echo "<br> Statut final : ".$statutFinal."</table>";
    } else {
        echo "Aucune note trouvée.";
    }
}
?>
</p></body></html>

<div  style="margin-right:-250px; font-family:arimo;">
<br>
<strong>Le directeur des études </strong></div>
<br><br><br><br>
<div  style="margin-right:-250px; font-family:arimo;">
Fait à ___________ . Le _____________</div>
<br>

</div>
	</center>  </div>
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

  </body>
</html>
        </div>
    </div>
    <!----------FIN ------------------->
    


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

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>

</body>
</html>