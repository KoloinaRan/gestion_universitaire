                                          <!-- *** Koloina RANDRIARISOA  *** -->
<?php
require_once('connexion.php');
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$hash = md5($mdp);

// Vérification si les champs sont remplis
if (isset($_POST['email']) && isset ($_POST['mdp'])) {

    // Vérification que les champs ne sont pas vides
    if ($email != "" AND $mdp != "") {

        // Requête SQL pour vérifier l'existence de l'email et du mot de passe haché
        $requete = "SELECT * FROM login WHERE email = '$email' AND mdp = '$hash'";
        $resultat = mysqli_query($db, $requete);

        // Compter le nombre de résultats
        $count = mysqli_num_rows($resultat);

        if ($count > 0) {
            // Si l'utilisateur existe, on démarre une session et on redirige vers la page d'accueil
            session_start();
            $_SESSION['username'] = $email; // Utilisation de l'email comme identifiant
            header('Location: index.html');
        } else {
            // Si l'utilisateur n'existe pas ou si les informations sont incorrectes
            header('Location: mdpIncorrect.php?erreur=1');
        }
    } else {
        // Si l'un des champs est vide
        header('Location: mdpIncorrect.php?erreur=2');
    }
} else {
    // Si les données POST ne sont pas définies
    header('Location: index.html');
}

mysqli_close($db);
?>
