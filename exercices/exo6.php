<?php
// Créez une classe représentant une personne. Elle déclare les propriétés nom et prénom et un constructeur.

// Créez une classe client dérivée de la classe personne en y ajoutant la propriété adresse et une méthode getCoordonnee() qui affiche les coordonnées complètes de la personne.

// Créez une classe électeur dérivée de la même classe, et ajoutez-y deux propriétés bureau de vote et vote, ainsi que deux méthodes ; une méthode booleen qui permet retourner la valeur True à l’attribut vote et une autre méthode isVoter qui permet de tester si un électeur a voté.



// Classe personne

class Personne
{
  private $nom;
  private $prenom;

  function __construct($nom, $prenom)
  {

    $this->nom = $nom;
    $this->prenom = $prenom;
  }


  public function setNom($nom)
  {
    $this->nom = $nom;
  }

  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;
  }

  public function getNom()
  {
    return $this->nom;
  }

  public function getPrenom()
  {
    return $this->prenom;
  }
}




// Classe Client.php


require_once('Personne.php');

class Client extends Personne
{
  private $adresse;
  public function __construct($nom, $prenom, $adresse)
  {

    // Appel du constructeur de la classe parente
    parent::__construct($nom, $prenom);
    $this->setAdresse($adresse);
  }

  //setters
  public function setAdresse($adresse)
  {
    $this->adresse = $adresse;
  }

  // getters
  public function getAdresse()
  {
    return $this->adresse;
  }

  public function getCoordonnee()
  {

    $cord = "Le client " . $this->getPrenom() . " " . $this->getNom() . " habite à " . $this->adresse . "<br>";
    return $cord;
  }
}

// Classe Electeur.php

class Electeur extends Personne
{

  public $bureau_de_vote;
  public $vote;

  function __construct($nom, $prenom, $bureau_de_vote)
  {

    parent::__construct($nom, $prenom);
    $this->setBureauDeVote($bureau_de_vote);
  }

  //setter
  public function setBureauDeVote($bureau_de_vote)
  {
    $this->bureau_de_vote = $bureau_de_vote;
  }

  //getter

  public function getBureaudeVote()
  {
    return $this->bureau_de_vote;
  }

  //methode boolean definissant si un electeur a voté
  public function aVoter()
  {
    $this->vote = TRUE;
  }

  public function isVoter()
  {

    if ($this->vote) {
      echo "L'électeur " . $this->getNom() . " " . $this->getPrenom() . " a voté dans le bureau " . $this->getBureauDeVote() . "<br>";
    } else {
      echo "L'électeur " . $this->getNom() . " " . $this->getPrenom() . " est bien inscrit dans le bureau " . $this->getBureauDeVote() . ", mais il n'a pas voté <br>";
    }
  }
}



// Fichier de test de création d’objet : traitement.php


require_once('Personne.php');
require_once('Client.php');
require_once('Electeur.php');

$client1 = new Client("Mastafi", "Amine", "Boulevard Jacques Monod");

echo $client1->getCoordonnee();


$electeur1 = new Electeur("Winder", "Christpher", "Bureau 1");

$electeur1->aVoter();
$electeur1->isVoter();
