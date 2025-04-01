                                          <!-- *** Koloina RANDRIARISOA  *** -->
<!--Connexion a la base-->
<?php 
require_once('connexion.php');
$requete = "SELECT * FROM liste_etudiant";
$resultat = mysqli_query($db,$requete);
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

        <div id="content-wrapper" class="d-flex flex-column" style=" background-image: url(images/R.jpg); background-size:cover;">
 <!-- Main Content -->
 <div id="content">

<!-- Topbar -->

<!-- End of Topbar -->
<nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow" style=" background-color: rgb(8, 31, 53);">
<ul class="navbar-nav ml-auto">
                            <a  href="liste_niveau.php"role="button"  style="color: white;">
                                <h4><i class="fas fa-list  " style="margin-right:30px ;color:white"></i></h4>
                            </a>
                            <a  href="#" data-toggle="modal" data-target="#etudiant">
                            <h4><i class="fas fa-user-plus  " style="margin-right:30px ;color:white"></i></h4>
                                </a>
                                <a  href="modifier_etudiant.php"  style="color: white;">
                            <h4><i class="fas fa-file-edit  " style="margin-right:15px ;color:white"></i></h4>
                                </a>
</ul>
    <!-- Topbar Navbar -->
    

  
</nav>
<!--Debut de la table-->
<div class="data-table-area mg-b-15">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
        <h3 >Liste principale de tous les étudiants inscrits</h3>
              
                <table id="table" data-toggle="table"  data-search="true"  data-toolbar="#toolbar">
                <thead > 
                  <tr>
                      <th data-field="nom" >Nom & Prenom</th>
                      <th data-field="filiere" >Fili&egrave;re</th>
                      <th data-field="niveau" >Niveau</th>
                      <th data-field="matricule" >Matricule</th>
                      <th data-field="date" >Date d'admission</th>
                      <th data-field="contact" >Contact</th>
                      <th data-field="pere" >Fils ou Fille de</th>
                      <th data-field="mere" >Et de</th>
                      <th data-field="adresse" >Adresse</th>
                      <th data-field="diplome" >N/Dipl&ocirc;me</th>
                      
                  </tr>
                </thead>
                <tbody>
                      <?php while ($data= mysqli_fetch_assoc($resultat)) { ?>
                  <tr>
                      <td><?php echo($data['nom']); ?></td>
                      <td><?php echo($data['filiere']); ?></td>
                      <td><?php echo($data['niveau']); ?></td>
                      <td><?php echo($data['matricule']); ?></td>
                      <td><?php echo($data['date']); ?></td>
                      <td><?php echo($data['contact']); ?></td>
                      <td><?php echo($data['pere']); ?></td>
                      <td><?php echo($data['mere']); ?></td>
                      <td><?php echo($data['adresse']); ?></td>
                      <td><?php echo($data['diplome']); ?></td>
                  </tr>
                      <?php } ?>
                </tbody>
                </table>
             <br>
<!--fin de la table--><h6><b style="margin-left:720px;color:black;font-family:Arimo;">Nombres des étudiants inscrites dans l'établissement : <span id="nombre-lignes"></span></b></h6>
</div> </div>   </div> </div>   </div>
</div>
                    <!-- Etudaint Modal-->
                    <div class="modal fade" id="etudiant"  >
                        <div class="modal-dialog" style="margin-top: 20px;">
                            <div class="modal-content" style="width: 550px;background-image: url(images/depositphotos_5854173-stock-photo-smooth-lines-illustration.jpg);		border-top-left-radius: 10px;border-top-right-radius: 10px;
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
                                            <td><b>Filière</b></td>
                                                <td><select class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="filiere" >
                                                    <option  value="" disabled selected>  </option>
                                                    <option  value="BTP ">BTP</option>
                                                    <option  value="Droit ">Droit</option>
                                                    <option  value="Hotelerie ">Hotellerie</option>
                                                    <option  value="Gestion ">Gestion</option>
                                                    <option  value="Informatique ">Informatique</option></select></td>
                                            </tr>
                                            <tr>
                                                <td><b>Niveau</b></td>
                                                <td><select class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="niveau" >
                                                    <option  value="" disabled selected>  </option>
                                                    <option  value="1ere Année">1ere Année</option>
                                                   <option  value="2e Année">2e Année</option>
                                                   <option  value="3e Année">3e Année</option>
                                                   <option  value="4e Année">4e Année</option>
                                                   <option  value="5e Année">5e Année</option></select></td>
                                            </tr>
                                            <tr>
                                                <td><b>N/ Dipl&ocirc;me Bac</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" name="diplome"></td>
                                            </tr>
                                            <tr>
                                                <td><b>Date d'admission</b></td>
                                                <td><input class="form-control" style="min-width: 100px; background-color: white;color:rgb(7, 18, 49);box-shadow: 2px 2px 2px 2px rgb(7, 18, 49);" type="text" id="date" name="date" value="" readonly></td>
                                            </tr>
                        
                                        </table>
                                        <center><button  class="w3-blue-grey" type="submit" style="cursor: pointer; margin-top: 10px; width: 150px; height: 40px;
                                border-top-left-radius: 10px;border-top-right-radius: 10px;
                                    border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;">
                                <i class="fa fa-file-signature"></i>    Inscrire
                            </button> <button  class="w3-blue-grey" type="submit" style="cursor: pointer; margin-top: 10px; width: 150px; height: 40px;
                            border-top-left-radius: 10px;border-top-right-radius: 10px;
                                border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;margin-bottom: 10px;"onclick="genererMatricule(event)">
                           Générer
                        </button></center>
                        <script>
                            function genererMatricule(event){
                                event.preventDefault();
                                var champMatricule= document.getElementsByName('matricule')[0];
                                var matriculeCourant=champMatricule.value;
                                var prefixe = matriculeCourant.split('/')[0];
                                var sequence= parseInt(matriculeCourant.split('/')[1]);
                                sequence++;
                                var nouveauMatricule = prefixe+'/'+ sequence.toString().padStart(4,'0');
                                champMatricule.value=nouveauMatricule;
                                //sauvegarder la valeur du matricule
                                localStorage.setItem('dernierMatricule',nouveauMatricule);}
            
                            //charger la derniere valeur de matricule du stockage local lors du chargement de la page
                            window.addEventListener('load',function(){
                                var dernierMatricule=localStorage.getItem('dernierMatricule');
                                if (dernierMatricule){
                                    var champMatricule= document.getElementsByName('matricule')[0];
                                    champMatricule.value = dernierMatricule;
                                }
                            });
                        </script>

                            </div>
                        </div>
                    </div>
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
// Calculer et afficher le nombre total de lignes du tableau
window.onload = function() {
var tableau = document.getElementById("table");
var nombreLignes = tableau.getElementsByTagName("tr").length;

document.getElementById("nombre-lignes").innerHTML = nombreLignes - 1; // Soustraire 1 pour exclure la ligne d'en-tête
};
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







