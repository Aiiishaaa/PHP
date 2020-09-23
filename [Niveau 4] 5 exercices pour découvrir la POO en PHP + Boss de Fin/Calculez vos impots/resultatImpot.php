

<?php 
 include ('index.php');

 $myform = new form("Traitement des impôts","Calcul des impots","get");
 $myform->settext("","Votre nom :  ");
 $myform->settext("  ","Votre revenu : ");
 $myform->setsubmit();
 $myform->getform();

 if (isset($_GET["submit"])) {
    $name = $_GET["name"];
    $income = $_GET["income"];

 include ('impot.php');
 $person1  = new Impot(Végéta,10000);
 $person1->CalculImpot();
 echo $person1->AfficherImpot();

 ?>