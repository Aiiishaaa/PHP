
<?php
 Class impot 
{
    public $nom;
    public $revenu;

    
    public function __construct($nom, $revenu)
      {
        $this->nom = $nom;
        $this->revenu = $revenu;
      }

    public function CalculImpot(){
          if($this->revenu<=15000)
            {
              $impot = ($this->revenu*15)/100;
            }
          else
            {
              $impot = ($this->revenu*20)/100;
            }
          return $impot;   
       }
    
    public function  AfficherImpot() {
          echo "<script type=\"text/javascript\">alert(' Monsieur $this->nom ,votre impot est de ".$this->CalculImpot()." euros. ')</script>";
        }
}
?>