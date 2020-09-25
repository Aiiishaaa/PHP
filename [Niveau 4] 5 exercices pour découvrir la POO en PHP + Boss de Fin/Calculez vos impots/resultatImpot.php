<?php
include("impot.php");
if (isset($_GET["submit"])) {
    $nom = $_GET["nom"];
    $revenu = $_GET["revenu"];
    $person1 = new Impot($nom, $revenu);
    $person1->CalculImpot();
    echo $person1->AfficherImpot();
}
?>