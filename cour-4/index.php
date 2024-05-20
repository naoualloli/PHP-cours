<!-- Creation des object en php -->

<?php
class VariablesGlobales {
    public static $etablissement='ISFO';
}
$etab = VariablesGlobales::$etablissement;

class utilisateur{
    public $nom;
    public $prenom;
    protected $age;

    public function __construct($nom,$prenom,$age){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;


    }
    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function presentez_vous(){
        return 'I am ' . $this->nom.' ' . $this->prenom;
    }
}

class Etudiant extends utilisateur{
    public $branche;
    public $groupe;

    public function __construct($nom, $prenom,$age, $branche, $groupe){
        parent::__construct($nom, $prenom,$age);
        $this->branche=$branche;
        $this->groupe=$groupe;
    }
    public function presentez_vous(){
        return parent::presentez_vous().' ' . 'and my branche' . $this->branche.' ' . $this->groupe.' ' .$this->age;
    }

}
$Etudiant1=new Etudiant ('ouihrani','manar',55,'SVT','DD106');

var_dump($Etudiant1);

echo '<br>';
echo '<br>';

echo $Etudiant1->presentez_vous();

echo '<br>';
echo '<hr>';

$utilisateur1=new utilisateur('mribeh','hiba',55);

// modefication des objects

$utilisateur1->nom = 'ELADANANI';
$utilisateur1->prenom = 'Nada';

var_dump($utilisateur1);

echo '<br>';
echo '<br>';


echo $utilisateur1->presentez_vous();

echo '<br>';
echo '<br>';

echo $utilisateur1->getNom();

echo '<br>';
echo '<br>';

echo $utilisateur1->setNom('farah');
echo $utilisateur1->getNom();



