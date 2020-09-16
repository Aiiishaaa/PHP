<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>  Compteur de visites </title>
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
    <h3> Créer un compteur qui s’incrémente automatiquement à chaque fois qu’une page est visitée. </h3>

<?php

    echo "<ul>";

    echo "<li> À chaque chargement de la page, le script vérifie si le fichier en question (par exemple compteur.txt) existe . </li>";
            
                
    echo "<li> Si le fichier existe, le script l'ouvre en lecture, le verrouille, lit la dernière valeur enregistrée (à l'aide de la fonction fread() ), l’enregistre dans une variable et le
    referme. Il doit ensuite ouvrir le fichier en écriture et écrire la nouvelle valeur qui aura été préalablement incrémentée.  </li>";
           
    echo "<li> Supprimer la note de l’étudiante *Monica*: </li>";

              
    

    echo "<li> Si le fichier n'existe pas, il faudra l'ouvrir en écriture ce qui aura pour effet de le créer. Il sera alors possible d'y enregistrer la valeur 1 pour une
    première visite (ou davantage si vous voulez faire croire que votre site est très populaire).</li>";

           
                
    echo "<li> Finalement, le script affichera une phrase du genre 1435 visites sur cette page.</li>";
           
  

    echo "</ul>";

?>

</body>
</html>