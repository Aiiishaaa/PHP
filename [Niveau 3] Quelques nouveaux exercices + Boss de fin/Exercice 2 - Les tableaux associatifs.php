<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> TABLEAUX ASSOCIATIFS</title>
    <style>
        h1 {
            font-family :Arial;
            font-size: 80px;
            color: red;
            text-align:center;
        }
        
        h3 {
            font-size: 30px;
            text-align:center;
        }
        p {
           font-size:20px;
        }
        li {
            font-size: 20px;
            color : green; 
            padding-top:20px;
        }
    </style>
</head>

<body>

    <h1> OBJECTIF :</h1>
    <h3>   Effectuer des opérations sur les tableaux associatifs. </h3>

<?php

    echo "<ol>";

    echo "<li> Créer et initialiser un tableau : </li>";
                $notes = [
                "Roger" => 12,
                "Monica" => 16,
                "Najat" => 15,
                ];
                var_dump($notes) ;
                
    echo "<li> Ajouter au tableau la note 10 pour l’étudiant *Anton* : </li>";
                $notes["Anton"] = 10;
                print_r($notes);
    
    echo "<li> Supprimer la note de l’étudiante *Monica*: </li>";

                unset($notes["Monica"]);
                print_r($notes);
    
    

    echo "<li> Afficher le tableau après l'avoir trié par ordre alphabétique: </li>";

                ksort($notes);
                print_r($notes);
                
    echo "<li> Classer les étudiants par ordre de mérite (notes décroissantes) et afficher le tableau : </li>";
                
                arsort($notes);
                print_r($notes);
                
    echo "<li> Déterminer la moyenne de la classe : </li>";
                
                function Moyenne($arr) {
                $somme = 0;
                foreach($arr as $elt) {
                    $somme += $elt;
                }
                $moyenne = $somme / count($arr);
                return $moyenne ;
                }
                
            echo "<p> La moyenne de la classe est : " . Moyenne($notes)."</p>";

    echo "<li> Déterminer la note maximale et la note minimale du groupe :</li>";

            function Maximum($array) {
            $max = 0;
            foreach($array as $elt) {
                if($elt > $max) {
                    $max = $elt;
                }
            }
            return $max;
            }

        echo "<p> La note maximale du groupe ".Maximum($notes).".</p>";    

            function Minimum($array) {
            $min = 20;
            foreach($array as $elt) {
                if($min > $elt) {
                    $min = $elt;
                }
            }
                return $min;
            }

        echo "<p> La note minimale du groupe ".Minimum($notes).".</p>";
            

    echo "</ol>";

?>

</body>
</html>