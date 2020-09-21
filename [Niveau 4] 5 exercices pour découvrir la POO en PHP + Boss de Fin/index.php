<?php

class form
{
	private $code; // code complet du formulaire
	private $codeinit; // code de l'entete du formulaire : balises form + fielset + legend
	private $codetext ; // code de chaque input
	private $codesubmit; // code du bouton submit

	
    public function __construct($action,$titre,$methode="post")
    {
        $this->codeinit="<form action=\"$action\" method=\"$methode\">";
        $this->codeinit.="<fieldset><legend><b>$titre</b></legend>";
    }

	public function settext($name, $libelle, $method="post")
	{
		$this->codetext.="<b>$libelle</b><input type=\"text\" name=\"$name\" /><br /><br />";
		
	}

	public function setsubmit($name="envoi", $value="Envoyer")
	{
		$this->codesubmit="<input type=\"submit\" name=\"$name\" value=\"Envoyer\"/><br />";
	}
	

	public function getform()
	{
		$this->code="";
        $this->code.=$this->codeinit;
        $this->code.=$this->codetext;
        $this->code.=$this->codesubmit;
        $this->code.="</fieldset></form>";
        echo $this->code;
	}
}

?>

 