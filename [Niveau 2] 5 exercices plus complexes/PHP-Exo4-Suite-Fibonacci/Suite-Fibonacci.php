<?php
function fibonacci($int) {

    $arr = [0,1];
    $val = 0;
    print_r($arr[0]); //On peut utiliser var_dump():afficher le contenu de la variable et son type 
    echo'<br>';
    print_r($arr[1]); 
    echo'<br>';
     for($i = 1; $i < $int; $i++) {
        $val = $arr[$i] + $arr[$i -1];
        array_push($arr, $val);
        echo $val;
        echo'<br>';
    }
 };
fibonacci(12);
?>

