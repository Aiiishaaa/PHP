<?php

function reverseStr($str) {

    for($i = strlen($str) - 1;$i >= 0; $i--) {
        echo $str[$i];
    }
};

reverseStr("abcdef GHI");
reverseStr("Aiiishaaa");

?>