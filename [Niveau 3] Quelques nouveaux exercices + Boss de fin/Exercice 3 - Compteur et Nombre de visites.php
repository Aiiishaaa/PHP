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
      
    </style>
</head>

<body>

    <h1> OBJECTIF :</h1>
    <h3> Créer un compteur qui s’incrémente automatiquement à chaque fois qu’une page est visitée. </h3>
    // r	Open a file for read only.   
    <br>
    // w	Open a file for write only.   
    <br>            
    // The fwrite() function is used to write to a file.   
    <br>            
    // The fread() function reads from an open file.   
    <br>        
    // The fclose() function is used to close an open file.
    <br>
<?php

                                    if(file_exists("compteur.txt"))                 // À chaque chargement de la page, le script vérifie si le fichier
                                    { 
                                      
                                        $compteur_r = fopen("compteur.txt", "r");   //Ouvre en lecture, le verrouille, lit la dernière valeur enregistrée
                                        $i = (int)fread($compteur_r, 1);            // l’enregistre dans une variable et le referme.  
                                        fclose($compteur_r);                     
                                        $i++;
                                        $compteur_w = fopen("compteur.txt", "w");  // ouvrir le fichier en écriture  
                                        fwrite($compteur_w, $i);                   // écrire la nouvelle valeur qui aura été préalablement incrémentée.
                                        fclose($compteur_w);                      
                                        echo "<p> Le nombre de visites est : " . $i.'</p>';
                                    }
                                
                                    else                                             //Si le fichier n'existe pas
                                    {   
                                        
                                     
                                        $compteur = fopen("compteur.txt", "w");      // l''ouvrir en écriture ce qui aura pour effet de le créer. 
                                        fwrite($compteur, "1");                 
                                        fclose($compteur);
                                        echo "<p>Le nombre de visites est : 1'</p>'";

                                    }   
?>

</body>
</html>