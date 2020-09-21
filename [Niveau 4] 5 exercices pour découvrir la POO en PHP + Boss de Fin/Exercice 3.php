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
              margin-left:250px;
              font-family: Times;
              font-size:30px;
              color :green;
         }
    </style>
</head>

<body>

    <h1> OBJECTIF :</h1>

    <p>Le code du constructeur et du destructeur vous est fourni. </p>
    <p>Vous ajouterez une méthode getPersonne() qui doit retourner les coordonnées complètes de la personne. </p>
    <p>Une méthode setadresse() doit permettre de modifier l’adresse de la personne. </p>
    <p> Créez enfin plusieurs objets personne en leur attribuant toutes les informations nécessaires, et utilisez l’ensemble des méthodes.</p>

    <p>Notez l’ordre d’apparition de la boite d’alerte créée par le destructeur après l’appel de la fonction unset() et de l’affichage de la fin du script.</p>

<?php
class personne
{
	private $nom;
	private $prenom;
	private $adresse;

	//Constructeur
	public function __construct($nom, $prenom, $adresse)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
	}

	//Destructeur
	public function __destruct()
	{
		echo "<script type=\"text/javascript\">alert('La personne nommée $this->prenom $this->nom \\n est supprimée de vos contacts')</script>";
	}

	public function getPersonne()
	{
        $texte=" $this->prenom $this->nom <br /> $this->adresse <br />";
        return $texte;
	}

	public function setadresse($adresse)
	{
		$this->adresse=$adresse;
	}
}

//Création d'objets
echo "<div>";
$client = new personne("Geelsen","Jan"," 145 Rue du Maine Nantes");
echo $client->getPersonne()."<br>";

//Modification de l'adresse
$client->setadresse("23 Avenue Foch Lyon");
echo $client->getPersonne()."<br>";

//Suppression explicite du client, donc appel du destructeur
unset($client);
//Fin du script
echo "Fin du script";
echo "</div>";
?>
	
</body>  
</html>