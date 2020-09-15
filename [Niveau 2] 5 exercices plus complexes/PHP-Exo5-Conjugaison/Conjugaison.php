<?php

function Conjuger($verbe) {
    if(preg_match('/^[^ ]{1,13}er$/', $verbe)) {

        $base = preg_replace('/er$/', '', $verbe);

        echo '<p style="color: pink""> *********  '.$verbe.'  *********</p>';

        echo '<p> Je '.$base.'e</p>';
        echo '<p> Tu '.$base.'es </p>';
        echo '<p>Il/Elle/On '.$base.'e </p>';

        if(preg_match('/g$/', $base)) {
            echo '<p> Nous '.$base.'eons</p>';
        } else {
            echo '<p> Nous '.$base.'ons</p>';
        }

        echo '<p> Vous '.$base.'ez</p>';
        echo '<p>Ils/Elles '.$base.'ent</p>';
    }
     else {
      echo '<div style="color: red">'.' Attention ! La chaîne passée en paramètre ne doit pas dépasser 15 caractères ni contenir d espaces et se termine bien par "er"  .'.'</div>';
    }
};

Conjuger("Trier");
Conjuger("Chanter");
Conjuger("Coder");
Conjuger("Programmer");
Conjuger("Choisir");
Conjuger("Manger");

?>
