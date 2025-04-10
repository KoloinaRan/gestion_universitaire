                                          <!-- *** Koloina RANDRIARISOA  *** -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="public/w3/w3.css">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/w3/w3-theme-blue.css">
    <link rel="stylesheet" type="text/css" href="public/fontAwesome/css/all.min.css">
</head>
<style type="text/css">
  img {
max-width: 80%; 
animation: anim_image 7s infinite;}
@keyframes anim_image{
      0%{transform: scale(0.5);
      border-color: #052036;}
      50%{transform: scale(1);
      border-color: #416481;}
      100%{transform: scale(1);
      border-color: #041e33;}
    }

.login-box {
padding: 60px 50px;
border-left: 1px solid #cccccc5e;
margin: auto; 
margin-top: 20px;}

.login-box h5 {
  margin-bottom: 50px; }

  .login-box .login-row {
  margin-top: 10px; }

  .login-box label {
  font-size: .93rem;
  margin-bottom: 0px;
  color: #928f8f; }
  .login-box label i {
    margin-right: 3px; }
.login-box input {
  border: 0px;
  border-radius: 0px;
  border-bottom: 1px solid grey;
  background-color: rgb(216, 228, 243);
 }
  .login-box input:focus {
    border: 0px !important;
    border-bottom: 2px solid #5288f4 !important;
    background-color: #fcfbfc1f !important;
    margin-top: 0px;
    transition: 0.1s ease; }

body {
  background-image: url(images/login.jpg) !important;
  background-size: 100%;
  height: 100%;
  overflow: hidden; 
  font-family: arial;
  color: hsl(214, 86%, 14%);
  overflow-x: hidden; }
  @media screen and (max-width: 991px) {
    body {
      overflow: auto; } }

      
.login-container {
margin: auto;
box-shadow: 1.5px 3.99px 27px 0px rgba(0, 0, 0, 0.1);
transition: 0.3s;
background-image:linear-gradient(3deg,rgb(170, 196, 230),transparent,rgb(255, 255, 255));
                               float:center;
                               border-top-left-radius: 10px;
                               border-top-right-radius: 10px;
                             border-bottom-left-radius: 10px;
                               border-bottom-right-radius: 10px;
                               width: auto;
margin-top: 12%; 
}

@media screen and (max-width: 991px) {
  .login-container {
    margin-bottom: 5%; } }
   



::placeholder {
color: hsl(214, 86%, 14%)!important;
opacity: .2 !important; }

.img-box {
margin: auto;
padding: 60px 40px;
border-right: 1px solid #cccccc5e;
text-align: center; }

.copyc {
margin-top: 140px; }
.copyc p {
  font-size: .75rem;font-family:Arial;opacity: 0.7; }

  #logo {
    color: #052036;
    font-size: 60px;
    animation: anim_logo 4s infinite;
          margin-bottom: 30PX;
  }




  @keyframes anim_logo {
    0% {
      color:hsl(214, 86%, 14%); 
    }

    10% {
      color: #073a63; 
    }

    20% {
      color: #074980; 
    }

    30% {
      color: #0a518b; 
    }

    40% {
      color: #075ea5; 
    }

    50% {
      color: #2a7abd ; 
    }

    60% {
      color: #5198d3; 
    }

    70% {
      color: #76b5e9; 
    }

    80% {
      color: #9cb6cc; 
    }

    90% {
      color : #9bb1c0; 
    }

    100% {
      color : #cee1ee;  
    }


  }

      </style>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-10 col-lg-11 login-container">
                <div class="row">
                    <div class="col-lg-7 img-box">
                        <img src="images/404.png" style="border-radius: 10px;">
                    </div>
                    <div class="col-lg-5 no-padding">
                        <div class="login-box">
                            <center><i class="fa fa-user-circle" id="logo"><h4>ADMINISTRATION</h4></i></center>
                            <form action="authentification.php" method="POST">
                                <i class="fa fa-envelope"></i> E-mail
                                <div class="login-row row no-margin">
                                    <input type="text" name="email" required placeholder="Votre adresse e-mail..." class="form-control form-control-sm">
                                </div>

                                <i class="fa fa-lock"></i> Mot de passe
                                <div class="login-row row no-margin">
                                    <input type="password" name="mdp" required placeholder="Votre mot de passe ..." class="form-control form-control-sm">
                                </div>

                                <div class="login-row btnroo row no-margin">
                                    <button class="btn btn-primary btn-sm w3-theme-d5" type="submit">Connexion</button>
                                </div>

                                <?php
                                    if (isset($_GET['erreur'])) {
                                        $err = $_GET['erreur'];
                                        if ($err == 1) {
                                            echo "<center><p style='color:red'>Mot de passe incorrect, veuillez réessayer !</p></center>";
                                        } elseif ($err == 2) {
                                            echo "<center><p style='color:red'>Veuillez remplir tous les champs !</p></center>";
                                        }
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
