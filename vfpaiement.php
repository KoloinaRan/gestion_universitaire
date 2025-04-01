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
$type=@$_POST['type'];
?>
<!-- Created by TopStyle Trial - www.topstyle4.com -->

<link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/w3/w3.css">
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



                

<div style="
    margin-left: 10px;
    margin-top: 20px;
    text-align: center;
">
                    <!-- Topbar Navbar -->
                    <h3 style="/* margin-top:10px; *//* margin-left:400px; */margin-bottom: 0;">Vérification des payements </h3>
					( Liste des élèves retardataires)<br>
</div>


			
                <!-- End of Topbar -->

                <main >
				<div align="center">
 
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
<table style="width:200px; margin-left:40px; margin-top:20px;">

    
  <tr><td></td><td><select name="type" id="type"   style="width: 110px;height:30px;margin-right:10px;margin-top:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:black;
                               ">
        <option  value="" disabled selected> TRANCHES</option>
         <option  value="tranche1">1er Tranche</option>
          <option  value="tranche2">2e Tranche</option>
           <option  value="tranche3">3e Tranche</option>
            <option  value="tranche4">4e Tranche</option>
             <option  value="tranche5">5e Tranche</option>
             
        
     </select></td>
	 <td> <Button type="submit" name="bvf"   style="width: 100px;height:30px;margin-right:5px;margin-top:10px;
                            border-top-left-radius: 100px;border-top-right-radius: 100px;
                                border-bottom-left-radius: 100px;border-bottom-right-radius: 100px; background-color: white;color:blue;
                                " ><i class="fa fa-search-dollar"></i> Vérifier </Button></td>
     <td><button  onclick="printDiv('printableArea')"  style="width: 50px;height:30px;color:white;margin-top:10px;
                            border-top-left-radius: 100px;border-top-right-radius: 100px;
                                border-top-left-radius: 100px;border-top-right-radius: 100px;
                                    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;background-color:rgb(7, 18, 49);">
                                <h4><i class="fa fa-print"></i></h4>
                            </button></td></tr>
 
  </table>
   </form>
   <div id="printableArea">
   <H5 style="font-family:Arimo; color:darkred;margin-top:20px;"><CENTER> <h4>LES RETARDATAIRES</h4></CENTER></H5>
   <br>
   <?php 
    if(isset($_POST['bvf'])){
      $qq2=mysqli_query($db,"select matricule,nom,filiere,niveau,type,mtp,datep from
      eleve inner join paie on eleve.matricule=paie.ideleve  where type='$type' and mtp='0'  ");  
      print'<table style="text-align:center;" class="table table-bordered" id="dataTable"  cellspacing="0" >
      <tr><th>MATRICULE</th><th>NOM</th><th>FILIERE</th><th>NIVEAU</th><th>TYPE</th><th>MONTANT (Ariary)</th></tr>';
	while($rst2=mysqli_fetch_assoc($qq2)){
	 print"<tr>";
	         echo"<td>".$rst2['matricule']."</td>";
	         echo"<td>".$rst2['nom']."</td>";
	         echo"<td>".$rst2['filiere']."</td>";
	         echo"<td>".$rst2['niveau']."</td>";
	         echo"<td>".$rst2['type']."</td>";
             echo"<td>".$rst2['mtp']."</td>";
	         
	          
	         }
    
    }

  
  ?>
 </div> 
 <script> function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}</script>
	
	</div>

                       
              
                  </main>

        

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


</body>

</html>

