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
$mat=@$_POST['matricule'];
$inscriptionpaie=@$_POST['inscriptionpaie'];
$generauxpaie=@$_POST['generauxpaie'];
$tranche1paie=@$_POST['tranche1paie'];
$tranche2paie=@$_POST['tranche2paie'];
$tranche3paie=@$_POST['tranche3paie'];
$tranche4paie=@$_POST['tranche4paie'];
$tranche5paie=@$_POST['tranche5paie'];
$nom=@$_POST['nom'];
$filiere=@$_POST['filiere'];
$niveau=@$_POST['niveau'];
$montant=@$_POST['mtp'];

?>


<?php  
//enregister paie
//la colonne datep de la table paie est la date du paiement du frais de la scolarit� : c'est la date au moment du paiement
if(isset($_POST['boutval'])&&!empty($mat)){
  if(!empty($inscriptionpaie)){
   mysqli_query($db,"update paie set mtp='$inscriptionpaie',datep=NOW() where ideleve='$mat' and type='inscription'");
    $mess='<h5 class="succes">Paiement validé !</h5>';
  }
  
  if(!empty($generauxpaie)){
   mysqli_query($db,"update paie set mtp='$generauxpaie',datep=NOW() where ideleve='$mat' and type='generaux'");
   $mess='<h5 class="succes">Paiement validé !</h5>'; 
  }
  
  if(!empty($tranche1paie)){
   mysqli_query($db,"update paie set mtp='$tranche1paie',datep=NOW() where ideleve='$mat' and type='tranche1'");
   $mess='<h5 class="succes">Paiement validé !</h5>'; $mess='<b class="succes">Paiement validé !</b>';
  }
  
  if(!empty($tranche2paie)){
   mysqli_query($db,"update paie set mtp='$tranche2paie',datep=NOW() where ideleve='$mat' and type='tranche2'");
   $mess='<h5 class="succes">Paiement validé !</h5>';
  }
  
  if(!empty($tranche3paie)){
   mysqli_query($db,"update paie set mtp='$tranche3paie',datep=NOW() where ideleve='$mat' and type='tranche3'");
   $mess='<h5 class="succes">Paiement validé !</h5>';
  }
  
  if(!empty($tranche4paie)){
   mysqli_query($db,"update paie set mtp='$tranche4paie',datep=NOW() where ideleve='$mat' and type='tranche4'");
   $mess='<h5 class="succes">Paiement validé !</h5>';
  }
  
  if(!empty($tranche5paie)){
   mysqli_query($db,"update paie set mtp='$tranche5paie',datep=NOW() where ideleve='$mat' and type='tranche5'");
   $mess='<h5 class="succes">Paiement validé !</h5>';
  }
  

  }
?>

<?php  
//suppr�ssion paie
/*
if(isset($_POST['boutsupp'])&&!empty($mat)){

$rq=mysqli_query($conn,"delete from paie where mois='$mois' and ideleve='$mat'");
if($rq){
$mess="<b class='succes'>Suppr�ssion r�ussie !</b>";

      
            
}
else
$mess="<b class='erreur'>Impossible de supprimer !</b>";
}
*/
?>


<link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/w3/w3.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/w3/w3-theme-blue.css">
    <link rel="stylesheet" type="text/css" href="public/fontAwesome/css/all.min.css">

    <style type="text/css">
         h5{
       color: green;
      
    }
    h2{
       color: red;
    }
    h3 {
        font-size: 15px;
        text-align: center;
        margin-bottom: 21px;
        margin-top:-10px;
        color: black;
        text-transform: uppercase;
        font-family: "Arial";
       }
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
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-image: url(images/980.jpg) !important;background-size:cover;">


                <!-- Topbar -->
            

                

                    <!-- Topbar Navbar -->
                    <h3 style="margin-top:20px;margin-left:50px;">Formulaire de paiement des frais de scolarite </h3>


             
                <!-- End of Topbar -->

               
                <div align="center">

	
	<?php /*l'ann�e scolaire s'�tend d'Octobre � Juin et le frais mensuel de scolarit� est de 20 �*/?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
 <?php print $mess;?>
  <table style="width:100px">
     
     <tr><td></td><td><input type="text"  value="Matricule" size="12" style="border:none;background-color:transparent;"></td>
     <td><input type="text" name="matricule"  value="<?php print $mat;?>" style=" background-image: 
            linear-gradient(100deg,rgba(14, 55, 78, 0.315),transparent,rgba(14, 55, 78, 0.315));" size="10"></td>
 

   <tr><td></td><td><input type="text" name="inscription"  value="Frais d'inscription" size="12" style="border:none;background-color:transparent;"></td>
      <td><input type="number" name="inscriptionpaie" min="0" max="10000000" value="<?php print $inscriptionpaie;?>" style=" background-image: 
            linear-gradient(100deg,rgba(14, 55, 78, 0.315),transparent,rgba(14, 55, 78, 0.315));" size="25"></td>
   </tr>
   
   <tr><td></td><td><input type="text" name="generaux"  value="Frais généraux" size="12" style="border:none;background-color:transparent;margin-right:20px;"></td>
      <td><input type="number" name="generauxpaie" min="0"max="10000000"  value="<?php print $generauxpaie;?>" style=" background-image: 
            linear-gradient(100deg,rgba(14, 55, 78, 0.315),transparent,rgba(14, 55, 78, 0.315));" size="25"></td>
   </tr>
   
    <tr><td></td><td><input type="text" name="tranche1"  value=" 1ere tranche" size="12" style="border:none;background-color:transparent;"></td>
      <td><input type="number" name="tranche1paie" min="0" max="10000000" value="<?php print $tranche1paie;?>" style=" background-image: 
            linear-gradient(100deg,rgba(14, 55, 78, 0.315),transparent,rgba(14, 55, 78, 0.315));" size="25"></td>
   </tr>
   
   <tr><td></td><td><input type="text" name="tranche2"  value=" 2e tranche" size="12" style="border:none;background-color:transparent;"></td>
      <td><input type="number" name="tranche2paie" min="0" max="10000000" value="<?php print $tranche2paie;?>" style=" background-image: 
            linear-gradient(100deg,rgba(14, 55, 78, 0.315),transparent,rgba(14, 55, 78, 0.315));" size="25"></td>
   </tr>
   
    <tr><td></td><td><input type="text" name="tranche3"  value="3e tranche" size="12" style="border:none;background-color:transparent;"></td>
      <td><input type="number" name="tranche3paie" min="0" max="10000000" value="<?php print $tranche3paie;?>" style=" background-image: 
            linear-gradient(100deg,rgba(14, 55, 78, 0.315),transparent,rgba(14, 55, 78, 0.315));" size="25"></td>
   </tr>
   
   <tr><td></td><td><input type="text" name="tranche4"  value="4e tranche" size="12" style="border:none;background-color:transparent;"></td>
      <td><input type="number" name="tranche4paie" min="0" max="10000000" value="<?php print $tranche4paie;?>" style=" background-image: 
            linear-gradient(100deg,rgba(14, 55, 78, 0.315),transparent,rgba(14, 55, 78, 0.315));" size="25"></td>
   </tr>
   
   <tr><td></td><td><input type="text" name="tranche5"  value="5e tranche" size="12" style="border:none;background-color:transparent;"></td>
      <td><input type="number" name="tranche5paie" min="0" max="10000000" value="<?php print $tranche5paie;?>" style=" background-image: 
            linear-gradient(100deg,rgba(14, 55, 78, 0.315),transparent,rgba(14, 55, 78, 0.315));" size="25"></td>
   </tr>
  
   
   
  
       
  </table>      
  <Button type="submit"  name="boutval"  style="width: 100px;height:30px;margin-right:5px;margin-top:10px;
                            border-top-left-radius: 20px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 20px; background-color: white;
                                color:green;box-shadow: 2px 2px 2px 2px green;" ><i class="fa fa-check-circle"></i> Valider </Button>
  <Button type="submit" name="boutvf"   style="width: 100px;height:30px;margin-right:5px;margin-top:10px;
                            border-top-left-radius: 20px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 20px; background-color: white;color:blue;
                                box-shadow: 2px 2px 2px 2px blue;" ><i class="fa fa-search-dollar"></i> Vérifier </Button>
  </form>
  <br>
 
                        
                        <div class="card-body">
                            <div class="table-responsive">
                              
  <?php 
    if(isset($_POST['boutvf'])){
      $qq2=mysqli_query($db,"select matricule,nom,filiere,niveau,type,mtp,datep from
      eleve inner join paie on eleve.matricule=paie.ideleve  where ideleve='$mat' ");  
      print'<table text-align:center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
      <tr><th>MATRICULE</th><th>NOM</th><th>FILIERE</th><th>NIVEAU</th><th>TYPE</th><th>MONTANT(ARIARY)</th><th>DATE</th></tr>';
	while($rst2=mysqli_fetch_assoc($qq2)){
	 print"<tr>";
	         echo"<td>".$rst2['matricule']."</td>";
	         echo"<td>".$rst2['nom']."</td>";
	         echo"<td>".$rst2['filiere']."</td>";
	         echo"<td>".$rst2['niveau']."</td>";
	         echo"<td>".$rst2['type']."</td>";
	         echo"<td>".$rst2['mtp']."</td>";
	         echo"<td>".$rst2['datep']."</td>";
	          
	         }
    
    }
   
  
  ?>
 </div></div>
  
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


</body>

</html>
