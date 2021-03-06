<?php

include("config/config.php");
include("config/bd.php"); // commentaire
include("divers/balises.php");
include("config/actions.php");
session_start();
ob_start(); // Je démarre le buffer de sortie : les données à afficher sont stockées


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portail Avengers - Accueil</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="./css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10.css" rel="stylesheet">


    <!-- Ma feuille de style à moi -->
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> 
    <!-- <script src="js/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
</head>

<body>

<?php

?>


<header>
    <h1>Bienvenue sur le portail <strong>AVENGERS</strong></h1>
</header>
<nav>
<?php
        if (isset($_SESSION['id'])) {
            echo "<a href='index.php?action=deconnexion'><img src='img/deconnection.png' /></a>";
        } else {
            echo "<a href='index.php?action=login'><img src='img/deconnection.png' /></a>";
            echo "<a href='index.php?action=signup'>Sign Up</a>";
        }
        ?>
</nav>
<section id="notification_bloc">
    <h2>Bonjour Banner</h2>
    <h3>Le plus intelligent des avengers</h3>
</section>

<div class="bloc">
    <h2>Lorem ipsum</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at tellus mauris. Donec at bibendum lectus. Duis interdum est lorem, id convallis risus auctor vel. Sed convallis a est non lacinia. Duis eros nibh, imperdiet eget mollis nec, ullamcorper vitae lectus. Nulla varius dolor quis dolor porttitor, sed accumsan nisl viverra.</p>
    <h3>Posté par Xx°) )) Dark Sasuke (( ( °xX | Le XX/XX/XXXX</h3>
</div>

<div class="bloc">
    <h2>Lorem ipsum</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at tellus mauris. Donec at bibendum lectus. Duis interdum est lorem, id convallis risus auctor vel. Sed convallis a est non lacinia. Duis eros nibh, imperdiet eget mollis nec, ullamcorper vitae lectus. Nulla varius dolor quis dolor porttitor, sed accumsan nisl viverra.</p>
    <h3>Posté par Xx°) )) Dark Sasuke (( ( °xX | Le XX/XX/XXXX</h3>
</div>

<div class="container-fluid">
    <div class="row">
        <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">-->
        <div class="col-md-12 main">
            <?php
            // Quelle est l'action à faire ?
            if (isset($_GET["action"])) {
                $action = $_GET["action"];
            } else {
                $action = "accueil";
            }

            // Est ce que cette action existe dans la liste des actions
            if (array_key_exists($action, $listeDesActions) == false) {
                include("vues/404.php"); // NON : page 404
            } else {
                include($listeDesActions[$action]); // Oui, on la charge
            }

            ob_end_flush(); // Je ferme le buffer, je vide la mémoire et affiche tout ce qui doit l'être
            ?>


        </div>
    </div>
</div>
</body>
</html>
