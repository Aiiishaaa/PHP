

<?php 
 include ('index.php');

 $myform = new form("resultatImpot.php","Calcul des impots","get");
 $myform->settext("","Votre nom :  ");
 $myform->settext("code","Votre revenu : ");
 $myform->setsubmit();
 $myform->getform();


 $impots = new Calcule;
 $impots->CalculImpot();

 include ('impot.php');
 ?>