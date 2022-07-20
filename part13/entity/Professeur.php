<?php


// pour utilisé une interface ont utilise le mot cle implements
class Professeur implements Personnels
{

    private $nom;

    private $anciennete;

    private $indice;


    public function __construct($nom, $anciennete, $indice)
    {
        $this->setNom($nom);
        $this->setAnciennete($anciennete);
        $this->setIndice($indice);
    }

    // OBLIGATION D IMPLEMENTER LES METHODE DE L INTERFACE  calculeSalaire()

    public function calculeSalaire()
    {
        return 1000  * (1 + $this->getIndice() * $this->getAnciennete()/100);
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setAnciennete($anciennete)
    {
        $this->anciennete = $anciennete;
    }

    public function getAnciennete()
    {
        return $this->anciennete;
    }

    public function setIndice($indice)
    {
        $this->indice = $indice;
    }

    public function getIndice()
    {
        return $this->indice;
    }
}
