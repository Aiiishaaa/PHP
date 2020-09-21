<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> Ex1 Niv4</title>
    <style>
        h1 {
            font-size: 80px;
            color: red;
            text-align:center;
        }
        p {
            padding-left: 50px;
            font-family:Arial;
            font-size:35px;
        }
        div{
              font-family: Times;
              font-size:30px;
              color :green;
         }
    </style>
</head>

<body>

    <h1> OBJECTIF :</h1>

    <p> Désormais les propriétés nom et departement sont privées, elles ne sont donc plus modifiables de la façon suivante : $ville1->nom = "..."  </p>
    <p> Modifiez donc la classe de l'exercice précédent en la dotant d’un constructeur.  </p>
    <p> Réalisez les mêmes opérations de création d’objets et d’affichage.</p>
        
<?php 

        class ville
            {
                private $nom;
                private $departement;
               
                // c'est comme ça qu'on déclare le constructeur de la classe
              
                    public function __construct($nom,$departement) 
                        {
                            $this->nom=$nom;
                            $this->departement=$departement;
                        }

                    public function getinfo()
                        { 
                            $texte=" La ville de $this->nom est dans le département : $this->departement";
                            return $texte;
                        } 
            }

      
                //Création d'objets
                $ville1 = new ville("Nantes","Loire Atlantique");
                $ville2 = new ville("Lyon","Rhône");

                echo "<p> Résultat : </p>";
                echo "<div>".$ville1->getinfo()."</div>";
                echo "<div>".$ville2->getinfo()."</div>";
                echo "<p style=color:red> * Vous constaterez que l’utilisation d’un constructeur facilite la création d’objets et l’affectation de ses propriétés. </p>";

?>
</body>
</html>