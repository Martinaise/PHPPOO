<?php

class AgentSecurite extends Employe
{


    // creation du constructeur
public function __construct($nom,$prenom,$salaire)
{
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setSalaire($salaire);
}
    
// obligation de redefinir la methode obtenirSalaire() et prendreConge()
public function obtenirSalaire()
{
    echo "je m'appelle ".$this->getNom()." ".$this->getPrenom()." et je gagne ".$this->getSalaire()." euros";
}

public function prendreConge()
{
    echo "je prends un conge";
}






}