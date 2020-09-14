<?php

function premierElementTableau($tableau){
if ($tableau) {
  return $tableau[0];}
  else {
      return null;
  }
}
echo '<p>'.'Le premier élement du tableau est :'.premierElementTableau(['70','85','22','78']).'</p>';


function dernierElementTableau($tableau){
     $taille = count($tableau);
    echo '<p>'.'La longeur du tableau est :'.$taille.'</p>';
    if ($tableau) {
      return ($tableau[$taille-1]);}
    else {
      return "null";}
  
  }

echo '<p>'.'Le dernier élement du tableau est :'.dernierElementTableau(['70','85','22','78']).'</p>';

 function plusGrand($tableau){
   	$taille= count($tableau);
    $valmax = $tableau[0];
    if ($tableau) {
        for ($i = 0; $i < count($tableau); $i++) {
            if ($valmax < $tableau[$i]) {
                $valmax = $tableau[$i];
            } 
        } 
    }
    else {
        $valmax = "null";}
   
    return $valmax;
}

echo '<p>'.'Le plus grand élément du tableau est : '.plusGrand(['70','85','22','78']).'</p>';

function plusPetit($tableau){
 
    $taille = count($tableau);
    if ($tableau) {
    $valmin = $tableau[0];
    for ($i = 1; $i < count($tableau); $i++) {
            if ($valmin > $tableau[$i]) {
                $valmin = $tableau[$i];
            }
        }
    }
    else {
        $valmax = "null";}
    return $valmin;
}

echo '<p>'.'Le plus petit élément du tableau est : '.plusPetit(['70','85','22','78']).'</p>';

?>

