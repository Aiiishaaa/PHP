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
        
        ul {
       font-size: 30px;
       padding-left: 250px;
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

    <p>Écrivez une classe représentant une ville.
    Elle doit avoir les propriétés "nom" et "departement" et une méthode affichant «la ville X est dans le département : Y». </p>
    <p>Créez ensuite des objets Ville, affectez leurs propriétés, et utilisez la méthode d’affichage. </p>
    <p>Le résultat affiché attendu est : </p>
        <ul>
        <li>La ville de Nantes est dans le département : Loire Atlantique</li>
        <li>La ville de Lyon est dans le département : Rhône</li>
        </ul>
<?php 

        class ville
            {
                    public $nom;
                    public $departement;
                    public function getinfo()
                      {
                        $texte="La ville de $this->nom est dans le département : $this->departement <br />";
                        return $texte;
                      }
            }

        //Création d'objets
            $ville1 = new ville();   // on appelle le constructeur de classe
            $ville1->nom="Nantes";  // on lui donne son nom
            $ville1->departement="Loire Atlantique";

            $ville2 = new ville();
            $ville2->nom="Lyon";
            $ville2->departement="Rhône";

            $ville3 = new ville();
            $ville3->nom="Antibes";
            $ville3->departement="Alpes Maritimes";

        echo "<p> Résultat : </p>";
        echo "<div>".$ville1->getinfo()."</div>";
        echo "<div>".$ville2->getinfo()."</div>";
        echo "<div>".$ville3->getinfo()."</div>";
?> 

</body>
</html>