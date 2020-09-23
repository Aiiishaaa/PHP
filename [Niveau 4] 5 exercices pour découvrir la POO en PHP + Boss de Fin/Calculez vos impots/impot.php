
<?php
 Class impot 
{
    public $nom;
    public $revenu;
    private const max = 0.15;
    private const min= 0.2;
    
    public function __construct($nom, $revenu)
      {
        $this->nom = $nom;
        $this->revenu = $revenu;
      }

    public function CalculImpot(){
        if  ($this->revenu < 15000)
         { impot:: min;}
        else { impot:: max; }      

       return $this-> $revenu;
       }
    
    public function  AfficherImpot() {
          
            echo "<script type=\"text/javascript\">alert(' Monsieur $this->nom ,votre impot est de $this->CalculImpot() euros. ')</script>";
        }
}
?>