<?php
require "recettes.php";

$html = "";
foreach($cat_test["recettes"] as $recette) {
    $html.= "<figure class=\"col-4\">
    <h2 class=\"text-center\">".$recette["titre"]."</h2>
    <div class=\"img-block\"><a href=\"entrees/entree1.html\"><img src=\"img/".$recette["image"]."\" alt=\"Lien vers ".$recette["titre"]."\">
    </a></div>
    <p>".$recette["description"]."</p>
</figure>";
}

?>

<h1 class="text-center">Entrées</h1>
        
<nav class="fig-menu row bg-light">
    <?= $html ?>
</nav>