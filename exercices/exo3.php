<?php
// Exercice 3: Getters, setters et constructeur

//
// Créer une classe Véhicule qui a pour propriétés le type et nombre de palaces, puis créer les méthodes qui permettent d’une part de mettre à jour ces propriétés et d’autre part les récupérer.
// Créer des objets de type Véhicule, afficher leurs propriétés
// Modifier les propriétés de ces objets et réafficher de nouveau leurs propretés.

class Vehicule
{
  // Attributs
  private $type;
  private $place;
  // Méthodes
  public function __construct($type, $place)
  {
    $this->setType($type);
    $this->setPlace($place);
  }
  
 
  Public function setType($type)
{
  $this->type = $type ;
}
 
 
Public function setPlace($place)
{
  $this->place = $place ;
}
 
 
Public function getType()
{
return $this->type ; 
}
 
Public function getPlace()
{
return $this->place ;
}
 
}
 
// Création d'un objet Vehicule
$vehicule_1 = new Vehicule("tourisme", 5);
 
//Récupération des valeurs des propriétés de l'objet vehicule_1
echo "Type: ".$vehicule_1->getType(). "<br>";
echo "Nombre de place: ".$vehicule_1->getPlace(). "<br>";
echo "<br><br>";
 
//Mise à jour des données de l'objet vehicule_1
 
$vehicule_1->setType("tourisme et utilitaire");
$vehicule_1->setPlace(7);
 
//Récupération des nouvelles valeurs des propriétés de l'objet vehicule_1
echo "Type: ".$vehicule_1->getType(). "<br>";
echo "Nombre de place: ".$vehicule_1->getPlace(). "<br>";