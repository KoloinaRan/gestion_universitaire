                            <!--
	*** Koloina RANDRIARISOA || Authentification_admin2.php ***
                             -->
<?php 
session_start();

if (isset($_POST['email']) && isset ($_POST['mdp']))
{
	require_once('connexion.php');

$email = $_POST['email'];
$mdp = $_POST['mdp'];
$hash = md5($mdp);

if($email != "" AND $hash != "")
{
    $requete = "SELECT * FROM login where (email = '$email' AND mdp = '$hash')";
    $resultat = mysqli_query($db,$requete);
    $count = mysqli_num_rows($resultat);

    if ($count > 0) 
    { 
	        $_SESSION['mdp'] = $mdp;
			header ('Location:index.html');
	} else {
			header('Location: mdpIncorrect.php?erreur=1');
	} 
} else {
		header('Location:mdpIncorrect.php?erreur=2');
}
}  else {
	header('Location:index.html');
}
mysqli_close($db);
?>
 

