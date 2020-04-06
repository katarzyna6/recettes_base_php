<?php
var_dump($_GET);

$page = isset($_GET["page"])? $_GET["page"] : "home";

switch($page) {
    case "home" : echo "Vous avez demandé la page d'accueil";
    break;
    case "entree" : echo "Vous avez demandé la page entrées";
    break;
    case "plat" : echo "Vous avez demandé la page plats";
    break;
    case "dessert" : echo "Vous avez demandé la page desserts";
    break;
    default: echo "Vous avez demandé la page d'accueil";
}

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <header>
            <?php require "html/menu.html" ?>
        </header>
        
        <section>
        <?php require "html/menu.html" ?>
        </section>
    </body>

</html>