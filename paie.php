                                          <!-- *** Koloina RANDRIARISOA  *** -->
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
/*$mess2='';
$mess3='';
$classe2=@$_POST['classe2'];*/
?>
<?php  
//ajouter eleve
$mat=@$_POST['matricule'];
$nom=@$_POST['nom'];
$filiere=@$_POST['filiere'];
$niveau=@$_POST['niveau'];
$montan=@$_POST['montan'];
if(isset($_POST['boutadd'])&&!empty($mat)){
$rq=mysqli_query($db,"insert into eleve values('$mat','$nom','$filiere','$niveau','$montan')");
if($rq){
$mess='<b class="succes">Insertion réussie !</b>';
mysqli_query($db,"insert into paie(ideleve,type,mtp,datep) 
values('$mat','inscription','0','NULL'),
  ('$mat','generaux','0','NULL'),
  ('$mat','tranche1','0','NULL'),
  ('$mat','tranche2','0','NULL'),
  ('$mat','tranche3','0','NULL'),
  ('$mat','tranche4','0','NULL'),
  ('$mat','tranche5','0','NULL');
  
                              ");
}
else
$mess="<b class='erreur'>Impossible d'insérer !</b>";
}

?>
<?php  
//modification
if(isset($_POST['boutmod'])&&!empty($mat)){
$rq=mysqli_query($db,"update eleve set nom='$nom',filiere='$filiere',niveau='$niveau',mta='$montan' where matricule='$mat' ");
if($rq){
$mess='<b class="succes">Modification réussie !</b>';
}
else
$mess="<b class='erreur'>Impossible de modifier !</b>";
}

?>
<?php  
//supprimer élève
if(isset($_POST['boutsupp'])&&!empty($mat)){
$rq=mysqli_query($db,"delete from paie where ideleve='$mat'");
if($rq){
$mess='<b class="succes">Suppréssion réussie !</b>';
mysqli_query($db,"delete from eleve where matricule='$mat'");
}
else
$mess="<b class='erreur'>Impossible de supprimer !</b>";
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
                    <h3 style="margin-top:20px;margin-left:50px;">Formulaire d'enregistrement des étudiants</h3>
               
                      <div class="container-fluid">
                      <center><?php print $mess;?></center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >

  <table align="">
  
     
    <tr><td><input placeholder=" Matricule" type="text" name="matricule" value="<?php print $mat;?>" style="width: 200px;height:30px;margin-left:10px;margin-right:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);"value=""></td>
 <td><input placeholder=" Nom" type="text" name="nom" class="champ" value="<?php print $nom;?>" style="width: 200px;height:30px;margin-left:10px;margin-right:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);"value=""></td>
<td><select  name="filiere" id="filiere"  style="width: 100px;height:30px;margin-left:20px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; " >
   <option  value="" disabled selected> Filière </option>
                                                    <option  value="BTP ">BTP</option>
                                                    <option  value="Droit ">Droit</option>
                                                    <option  value="Hotelerie ">Hotellerie</option>
                                                    <option  value="Gestion ">Gestion</option>
                                                    <option  value="Informatique ">Informatique</option></select></td>
<td><select  name="niveau" id="niveau"  style="width: 100px;height:30px;margin-left:20px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; " >
 
  <option  value="" disabled selected> Niveaux</option>
         <option  value="1ere Année">1ere Année</option>
        <option  value="2e Année">2e Année</option>
        <option  value="3e Année">3e Année</option>
        <option  value="4e Année">4e Année</option>
        <option  value="5e Année">5e Année</option>
     </select></td>
     <td><input placeholder="Montant frais " type="text" name="montan" class="champ" value="<?php print $montan;?>" style="width: 150px;height:30px;margin-left:10px;margin-right:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);"value=""></td>
<td><button   type="submit" name="boutadd" value="Enregistrer" style="color:green ; cursor: pointer; margin-top: 12px; width: 50px; height: 30px;
                                border-top-left-radius: 100px;border-top-right-radius: 100px;
                                    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;margin-bottom: 10px;background-color:white;">
                                <h4><i class="fa fa-floppy-disk"></i></h4>
                            </button>
</td>
<td><button  type="submit" name="boutsupp" value="Supprimer" style="color:red ; cursor: pointer; margin-top: 12px; width: 50px; height: 30px;
                                border-top-left-radius: 100px;border-top-right-radius: 100px;
                                    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;margin-bottom: 10px;background-color:white;">
                                <h4><i class="fa fa-trash"></i></h4>
                            </button>
</td>
<td><button type="submit" name="boutmod" value="Modifier" style="color:blue ; cursor: pointer; margin-top: 12px; width: 50px; height: 30px;
                                border-top-left-radius: 100px;border-top-right-radius: 100px;
                                    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;margin-bottom: 10px;background-color:white;">
                                <h4><i class="fa fa-edit"></i></h4>
                            </button>
          </td>
</tr>
  </table>
   </form>
  
 
  <br>
 
  <div class="data-table-area mg-b-15">
               
                        <div class="card-body">
                            <div class="table-responsive">
	<?php 



// Code de recherche
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Affichage de la barre de recherche
print '<form action="" method="GET">';
print '<input type="text" name="search"  style=" cursor: pointer; margin-top: 10px; width: 200px; height: 30px;
border-top-left-radius: 100px;border-top-right-radius: 100px;margin-left:380px;
    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;margin-bottom: 10px;background-color:white;" placeholder="Rechercher..." value="' . $searchTerm . '">';
    print '<button   type="submit" name="benrg" value="" style="color:blue ; cursor: pointer; margin-top: 14px; width: 50px; height: 30px;
    border-top-left-radius: 100px;border-top-right-radius: 100px;margin-left:10px;
        border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;background-color:white;">
    <i class="fa fa-search"></i>
    </button>
    ';
    
    $qq2=mysqli_query($db,"select * from eleve ");
  //inner join vente on produit.codeprod=vente.idprod group by codeprod
  print' <table style="text-align:center;" class="table table-bordered"  data-search="true" id="dataTable" width="100%" cellspacing="0">
  <tr><th>Matricule</th><th>Nom</th>
  <th>Filiere</th><th>Niveau</th><th>Frais de formation annuel (Ariary )</th></tr>';
	while($rst2=mysqli_fetch_assoc($qq2)){
        if (empty($searchTerm) || strpos(strtolower($rst2['matricule']), strtolower($searchTerm)) !== false || strpos(strtolower($rst2['nom']), 
        strtolower($searchTerm)) !== false || strpos(strtolower($rst2['filiere']), strtolower($searchTerm)) !== false || strpos(strtolower($rst2['niveau']), strtolower($searchTerm)) !== false || strpos(strtolower($rst2['mta']), strtolower($searchTerm)) !== false){

	 print"<tr>";
	         echo"<td>".$rst2['matricule']."</td>";
	         echo"<td>".$rst2['nom']."</td>";
	         echo"<td>".$rst2['filiere']."</td>";
	         echo"<td>".$rst2['niveau']."</td>";
	         echo"<td>".$rst2['mta']."</td>"; 
	         } 
            }
  ?></div></div></div>
                      </div>
               

         

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>




                    <!----------Editeur------------------->
                    
                    <!----------FIN ------------------->
                    
     <script>
        //obtenir la date actuelle
        var dateActuelle = new Date();
        //Pour formater l'année actuelle au format AAAA-MM-JJ
        var jour = ("0"+ dateActuelle.getDate()).slice(-2);
        var mois = ("0"+(dateActuelle.getMonth()+1)).slice(-2);
        var annee = dateActuelle.getFullYear();
        var dateFormatee = annee + "-" + mois + "-" + jour;
        //Remplissage du champ date par la date actuelle 
        document.getElementById("date").value =dateFormatee;
     </script>               
       
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

</body>

</html>
