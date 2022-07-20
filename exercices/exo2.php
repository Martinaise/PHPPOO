<?php
// Exercice 2: classe avec constructeur

//
// Modifiez la classe de l’exercice précédent en lui ajoutant un constructeur. Réalisez les mêmes opérations de création d’objets et d’affichage.


class Ville2 {
    private $nom; 
    private $departement;
    private $region;
    private $habitants;
     
    function __construct($nom, $departement, $region, $habitants) {
        $this->nom=$nom; 
        $this->departement=$departement; 
        $this->region=$region; 
        $this->habitants=$habitants; 
    }
     
    public function getInfos() {
         
        echo "La ville ".$this->nom. " est dans le département: ".$this->departement. " de la région ".$this->region. " et a ".$this->habitants. " habitants <br>";
    }
    }
     
    //L'affectation des valeurs se fait lors de la création de l'objet par 
    //le biais du constructeur
     
    $ville_1 = new Ville2("Strasbourg", "Bas Rhin", "Grang Est",279284);
     
    $ville_1->getInfos();