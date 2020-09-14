<?php 
function ConjectureSyracuse ($arg)
{
    if($arg < 1 || !(is_int($arg))) {
    echo "<p> Saisie non valide!<br>Taper un nombre entier supérieur à zéro svp .</p>";
     } 
    else {
        echo $arg.'   ';
        while ($arg != 1){
         if ($arg%2 ==0) {
           $arg = $arg / 2;
           echo '   '.$arg.'   ';
            } 
          else { 
          $arg = $arg * 3 + 1;
          echo '   '.$arg.'   ';
            }
        }
    }
}

ConjectureSyracuse(25);

ConjectureSyracuse(0);
