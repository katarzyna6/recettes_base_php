<?php
var_dump($_GET);

$page = isset($_GET["page"])? $_GET["page"] : "home";

switch($page) {
    case "home" : $include = "home.html";
    break;
    case "entree" : $include = "entree.html";
    break;
    case "plat" : $include = "plat.html";
    break;
    case "dessert" : $include = "dessert.html";
    break;
    default: "home.html";
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
        <?php require "html/$include" ?>
        </section>
    </body>

</html>