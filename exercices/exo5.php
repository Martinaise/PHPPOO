<?php
// Exercice 5:  Heritage
// On reprend l’exercice sur la création de la classe Véhicule, quelles modifications peut-on faire sur la visibilité des propriétés. Créer une classe dérivée (classe fille) appelée Voiture qui hérite de la classe Véhicule tout lui ajoutant deux attributs marque et volume de carburant ainsi qu’une méthode permettant de savoir l’état de démarrage selon le volume du carburant.
// On peut séparer les deux classes dans deux fichiers différents : Vehicule.php et Voiture.php



// Fichier Vehicule.php


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




// Fichier Voiture.php


// Inclure obligatoirement la classe parent avant le code de la classe fille. (once : veut dire une seule fois)
require_once('Vehicule.php');
 
class Voiture extends Vehicule
{
  // Attributs
  private $marque;
  private $volumeCarburant;
  // Constructeur
  public function __construct($type,$place,$marque,$volumeCarburant)
  {
    // Appel du constructeur de la classe parente
    parent::__construct($type,$place);
 
    //initialisation de nouvels attributs
    $this->setMarque($marque);
    $this->setVolumeCarbuarant($volumeCarburant);
  }
 
Public function setMarque($marque)
{
  $this->marque = $marque ;
}
 
 
Public function setVolumeCarbuarant($volumeCarburant)
{
  $this->volumeCarburant = $volumeCarburant ;
}
 
 
Public function getMarque()
{
return $this->marque ; 
}
 
Public function getVolumeCarbuarnt()
{
return $this->volumeCarburant ;
}
 
 
  // Démarre la voiture si le réservoir
  // n'est pas vide
  public function demarrer()
  {
    if ($this->getVolumeCarbuarnt() > 0)
    {
      echo 'Le véhicule démarre sans aucun probléme';
      return true;
    }
    echo 'Le réservoir est vide...';
    return false;
  }
 
}
 
$ma_voiture = new Voiture("tourisme", 5, "Mercedes", 12);
echo "Type: ".$ma_voiture->getType(). "<br>";
echo "Nombre de place: ".$ma_voiture->getPlace(). "<br>";
echo "Marque: ".$ma_voiture->getMarque(). "<br>";
echo "Volume de carburant: ".$ma_voiture->getVolumeCarbuarnt(). "<br><br>";
$ma_voiture->demarrer();
