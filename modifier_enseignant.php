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
 ?>
<?php 
$contact=@$_POST["contact"];
$nom=@$_POST["nom"];
$adresse=@$_POST["adresse"];
$mess='';
?>

<?php 
//modification enseignant
if(isset($_POST['bmodif'])&&!empty($contact)&&!empty($nom)&&!empty($adresse)){
 $sql=mysqli_query($db,"update liste_enseignant set contact='$contact',adresse='$adresse' where nom='$nom'");
if($sql){
 $mess="<b>Modification éffectuée avec succès !</b>";
}
else{
 $mess="<b>Erreur !</b>";
}

}

?>
<?php 
//suppr�ssion enseignant
if(isset($_POST['bsupp'])&&!empty($nom)){
 $sql=mysqli_query($db,"delete from liste_enseignant where nom='$nom'");
if($sql){
	$mess="<b>Suppresion éffectuée avec succès !</b>";
}
else{
 $mess="<b>Erreur !</b>";
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

    <title>SB Admin 2 - Dashboard</title>



    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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
<style type="text/css">h3 {
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

        <div id="content-wrapper" class="d-flex flex-column" style=" background-image: url(images/R.jpg);background-size:cover;">


            <!-- Main Content -->
            <div id="content">

  

                

                    <!-- Topbar Navbar -->
                    <h3 style="margin-top:20px;margin-left:50px;">Formulaire de modification de la liste des enseignants</h3>

                  

                <!-- Begin Page Content -->
                <div class="container-fluid" >

                  
			
				<div align="center">
	<br>
	
	
	<form action="" method="POST">
	

	<table style="margin-left:100px;width:100px;">
	<tr ><td > <input type="text" placeholder=" Nom" name="nom" value="" style="min-width: 60px;height:30px;margin-top:10px; margin-right:10px;margin-left:-60px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);"></td>
	<td><input type="text" placeholder=" Contact" name="contact" value="" style="min-width: 80px;height:30px;margin-top:10px; margin-right:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);"></td>
	<td><input type="text" placeholder=" Adresse" name="adresse" value="" style="min-width: 60px;height:30px;margin-top:10px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px; background-color: white;color:rgb(7, 18, 49);"></td>

<td><button  type="submit"class="bouton" name="bmodif" value="" style="cursor: pointer; margin-top:20px; min-width: 50px; height: 30px;color:white;margin-right:100px;margin-left:30px;
                                border-top-left-radius: 100px;border-top-right-radius: 100px;
                                    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;margin-bottom: 10px; color:green; ">
                                <h4><i class="fa  fa-edit "></i></h4>
                            </button></td>
						
<td><button  type="submit"class="bouton" name="bsupp" value="" style="cursor: pointer; margin-top:20px; min-width: 50px; height: 30px;color:white;margin-right:10px;margin-left:-90px;
                                border-top-left-radius: 100px;border-top-right-radius: 100px;
                                    border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;margin-bottom: 10px;color:darkred;">
                                <h4><i class="fa  fa-trash"></i></h4>
                            </button></td>
						</tr>

	

	</table>
	<?php print $mess;?>
	</form>
	
	<?php 
	print"<br><br>";
	//affichage liste enseignants
	$rq1=mysqli_query($db,"select * from liste_enseignant ");
	print'<table style="text-align:center;id="table" data-toggle="table" >
	<tr>
	     <th>Nom</th>
	     <th>Contact</th>
	     <th>Adresse</th>
	</tr>';
	while($rst=mysqli_fetch_assoc($rq1)){
	  print"<tr>";
	         echo"<td>".$rst['nom']."</td>";
	          echo"<td>".$rst['contact']."</td>";
	           echo"<td>".$rst['adresse']."</td>";
	        
	         print"</tr>";
	}
		print'</table>';
		
	?>
	</div></div></div></div>
	
                </div>
        
            
            
        

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



     <!-- Inscription nouveau utilisateur-->
     <div class="modal fade" id="inscription"  >
        <div class="modal-dialog" style="margin-top: 150px;">
            <div class="modal-content" style="width: 550px;background-image: url(images/login.jpg);		border-top-left-radius: 10px;border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);">
              
                    <center><h1 style="font-family:arimo;color: rgb(7, 18, 49);" >Utilisateurs</h1></center>
             
                <div class="w3-container">
                    <form action="admin2.php" method="POST" >
                        <table style="width: 500px;height: 250px; margin-left: 10px; font-family:'Times New Roman', Times, serif;color: rgb(7, 18, 49); ">
                            <tr>
                                <td><b>Nom & Pr&eacute;nom</b></td>
                                <td><input class="form-control" style="min-width: 100px; background-color: transparent;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="nom" ></td>
                            </tr>
                            <tr>
                                <td><b>Contact</b></td>
                                <td><input class="form-control" style="min-width: 100px; background-color: transparent;color: rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="contact" ></td>
                            </tr>
                            <tr>
                                <td><b>E-mail</b></td>
                                <td><input class="form-control" style="min-width: 100px; background-color: transparent;color: rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="email" ></td>
                            </tr>
                            <tr>
                                <td><b>Nouveau mot de passe</b></td>
                                <td><input class="form-control" style="min-width: 100px; background-color: transparent;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="password" name="mdp" ></td>
                            </tr>
                            <tr>
                                <td><b>Confirmer le mot de passe</b></td>
                                <td><input class="form-control" style="min-width: 100px; background-color: transparent;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="password" name="cmdp" ></td>
                            </tr>
                        </table>
                        <center><button  class="w3-blue-grey" type="submit" style="cursor: pointer; margin-top: 10px; width: 150px; height: 40px;
                border-top-left-radius: 10px;border-top-right-radius: 10px;
                    border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;">
                <i class="fa fa-file-signature"></i>   Enregistrer
            </button></center><center></form></div>
            </div>
        </div>
    </div>
    <!----------FIN ------------------->
    
                      <!-- Etudaint Modal-->
                    <div class="modal fade" id="etudiant"  >
                        <div class="modal-dialog" style="margin-top: 40px;">
                            <div class="modal-content" style="width: 550px;background-image: url(images/login.jpg);		border-top-left-radius: 10px;border-top-right-radius: 10px;
                            border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);">
                              
                                    <center><h1 style="font-family:arimo;color: rgb(7, 18, 49);" >Inscriptions </h1></center>
                             
                                <div class="w3-container">
                                    <form action="etudiants.php" method="POST">
                                        <table style="width: 500px;height: 600px;font-family:'Times New Roman', Times, serif;color: rgb(7, 18, 49); ">
                                            <tr>
                                            <td><b>Matricule</b></td>
                                            <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="matricule" ></td>
                                            </tr>
                                            <tr>
                                                <td><b>Nom & Pr&eacute;nom</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="nom" ></td>
                                            </tr>
                                            <tr>
                                                <td><b>Date de naissance</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="date" name="naissance" ></td>
                                            </tr>
                                            <tr>
                                                <td><b>Fils ou Fille de</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="pere" ></td>
                                            </tr>
                                            <tr>
                                                <td><b>Et de</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="mere" ></td>
                                            </tr>
                                            <tr>
                                                <td><b>Adresse</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="adresse" ></td>
                                            </tr>
                                            <tr>
                                                <td><b>Contact</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color: rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="contact" ></td>
                                            </tr>
                                            <tr>
                                                <td><b>E-mail</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color: rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="email" ></td>
                                            </tr>
                                            <tr>
                                                <td><b>N/CIN ou N/Copie</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color: rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="numero" ></td>
                                            </tr>
                                            <tr>
                                                <td><b>Fili&egrave;re</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="filiere" ></td>
                                            </tr>
                                            <tr>
                                                <td><b>Niveau</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="niveau" ></td>
                                            </tr>
                                            <tr>
                                                <td><b>N/ Dipl&ocirc;me Bac</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="diplome"></td>
                                            </tr>
                                            <tr>
                                                <td><b>Ann&eacute;e  d'admission</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" id="date" name="date" value="" readonly></td>
                                            </tr>
                        
                                        </table>
                                        <center><button  class="w3-blue-grey" type="submit" style="cursor: pointer; margin-top: 10px; width: 150px; height: 40px;
                                border-top-left-radius: 10px;border-top-right-radius: 10px;
                                    border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;">
                                <i class="fa fa-file-signature"></i>    Inscrire
                            </button></center>
                           <center></form>
                            </div>
                            <a href="liste.php" style="font-family: arimo;color:darkblue;margin-left:10px;margin-bottom:10px;">Listes des étudiants inscrits.</a>

                            </div>
                        </div>
                    </div>
                    <!----------FIN ------------------->

                      <!-- Enseignant Modal-->
                      <div class="modal fade" id="formateur"  >
                        <div class="modal-dialog" style="margin-top: 100px;">
                            <div class="modal-content" style="width: 550px;background-image: url(images/login.jpg);		border-top-left-radius: 10px;border-top-right-radius: 10px;
                            border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);">
                              
                                    <center><h1 style="font-family:arimo;color: rgb(7, 18, 49);" > Formateurs</h1></center>
                             
                                    <div class="w3-container">
                                        <form action="formateurs.php" method="POST" enctype="multipart/form-data">
                                            <table style="width: 500px;height: 300px;font-family:'Times New Roman', Times, serif;color: rgb(7, 18, 49); ">
                                                <tr>
                                                    <td><b>Nom & Pr&eacute;nom</b></td>
                                                    <td><input class="form-control" style="min-width: 100px; background-color: transparent;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="nom" ></td>
                                                </tr>
                            
                                                <tr>
                                                    <td><b>N/ Autorisation d'enseigner</b></td>
                                                    <td><input class="form-control" style="min-width: 100px; background-color: transparent;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="autorisation" ></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><b>Adresse</b></td>
                                                    <td><input class="form-control" style="min-width: 100px; background-color: transparent;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="adresse" ></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Contact</b></td>
                                                    <td><input class="form-control" style="min-width: 100px; background-color: transparent;color: rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="contact" ></td>
                                                </tr>
                                                <tr>
                                                    <td><b>E-mail</b></td>
                                                    <td><input class="form-control" style="min-width: 100px; background-color: transparent;color: rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="email" ></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Sp&eacute;cialit&eacute; </b></td>
                                                    <td><input class="form-control" style="min-width: 100px; background-color: transparent;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="matiere" ></td>
                                                </tr>
                            
                                            </table>
                                            <center><button  class="w3-blue-grey" type="submit" style="cursor: pointer; margin-top: 10px; width: 150px; height: 40px;
                                    border-top-left-radius: 10px;border-top-right-radius: 10px;
                                        border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;">
                                    <i class="fa fa-file-signature"></i>   Enregistrer
                                </button></center></form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!----------FIN ------------------->
    
    <!-- deconnexion-->
    
        <div class="modal fade" id="logoutModal"  >
        <div class="modal-dialog" style="margin-top: 250px;">
            <div class="modal-content" style="background-image:linear-gradient(3deg,rgb(170, 196, 230),transparent,rgb(255, 255, 255));color: rgb(7, 18, 49);	
            border-top-left-radius: 10px;border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Etes-vous sur de vouloir quitter?</h5>
    
                </div>
               
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <a class="btn btn-primary" href="login.html">Déconnexion</a>
                </div>
            </div>
        </div>
    </div>
                    <!----------FIN ------------------->
                    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                    <p>Koloina | All rights Reserved 2023&copy;.</p>
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
    <script src="js/data-table/bootstrap-table-export.js"></script>

</body>

</html>



