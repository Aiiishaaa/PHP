
<?php

 function HelloWorld(){
 return "Hello World !";
 }

echo '<p>'.HelloWorld().'</p>';


function quiEstLeMeilleurProf(){
    return "Mon super formateur de dev web";
    }

echo '<p>'.quiEstLeMeilleurProf().'</p>';

function jeRetourneMonArgument($arg){
    return $arg;
    }

echo '<p>'.jeRetourneMonArgument("Hey :) ").'</p>';


function concatination ($arg1,$arg2){
        return $arg1.$arg2;
    }
echo '<p>'.concatination("Aicha","Hamida").'</p>';


function concatenationAvecEspace($arg1,$arg2) {
    return $arg1 ." ". $arg2;
    } 

echo '<p>'.concatenationAvecEspace("Aicha","Hamida").'</p>';

?>
