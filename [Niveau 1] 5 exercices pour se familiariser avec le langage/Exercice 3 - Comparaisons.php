<?php

function estIlMajeur($âge){
   if($âge >= 18) { 
        return " True"; }
  else {  
      return "False";  
    }
}
echo '<p>'.estIlMajeur(20).'</p>';


function plusGrand($arg1,$arg2){
    if( $arg1 > $arg2) {
        return $arg1 ; }
      else {
    return $arg2;
       }
}
echo '<p>'.plusGrand(10,20).'</p>'; 


function plusPetit ($arg1,$arg2){
   
    if( $arg1 > $arg2) {
        return $arg2 ;
    }
      else {
    return $arg1;
    }
    
}
   
echo '<p>'.plusPetit(15,87).'</p>';


function lePlusPetit( $arg1,$arg2,$arg3){
    if (( $arg1>$arg2) && ( $arg1>$arg3))  {
        if( $arg3 > $arg2) {
            return $arg2 ; }
          else { 
            return $arg3;
           }
    }
    else  if (( $arg2 > $arg1) && ( $arg2 > $arg3)) {
          if( $arg1 > $arg3) {
            return $arg3 ; 
        }
        else { 
            return $arg1;
       }
    }
    else  if (( $arg3 > $arg1) && ( $arg3 > $arg2)) {
        if( $arg1 > $arg2) {
            return $arg2 ; }
        else { 
            return $arg1;
           }
    }
}
   
echo '<p>'.lePlusPetit(20,13,50).'</p>';
?>