<?php

function premierElementTableau(){
$tableau = array('70','85','22','78'); 
  return $tableau[0];
  if $tableau[0]=''{
      return null;
  }
}




function dernierElementTableau($tableau){
    $tableau = array('70','85','22','78'); 
    $taille = count($tableau);
    return $tableau[$taille];
    if $tableau[$taille]=""{
        return null;}
  }

 

 function plusGrand(){
    $tableau = array('70','85','22','78'); 
    $taille = count($tableau);
    $valmax = $tableau[0];
    for ($i = 1; $i < count($tableau); $i++) {
            if ($valmax < $tableau[$i]) {
                $valmax = $tableau[$i];
            }
        }
   
    return $valmax;
};    

}



 function plusPetit()(){
    $tableau = array('70','85','22','78'); 
    $taille = count($tableau);

    $valmin = $tableau[0];
    for ($i = 1; $i < count($tableau); $i++) {
            if ($valmin < $tableau[$i]) {
                $valmin = $tableau[$i];
            }
        }
   
    return $valmin;
 }
?>