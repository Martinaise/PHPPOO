<?php


// pour utilisé une interface ont utilise le mot cle implements 
// la classe implemente deux interface 
// une interface peut aussi herité d une autre interface
class Professeur implements Personnels, Fonctionnaire
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

    // OBLIGATION D IMPLEMENTER LES METHODE DE L INTERFACE  calculeSalaire() depuis la classe Professeur

    public function calculeSalaire()
    {
        return 1000  * (1 + $this->getIndice() * $this->getAnciennete() / 100);
    }

    // OBLIGATION D IMPLEMENTER LES METHODE DE L INTERFACE  passerExamen() depuis la classe Fonctionnaire

    public function passerExamen()
    {
        echo "Vous avez passer un examen";
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
