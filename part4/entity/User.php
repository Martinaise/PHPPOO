<?php


class User
{
    //PROPERTIES
    // public : accessible de partout
    private $nom;

    // private: empeche l'acces a la propriete en dehore de la classe
    // nous pouvons acceder a la propriete en dehore de la classe avec la methode getter et en la rendant public
    private $prenom = "mohamed";

    private $age;

    private $email;


    
    //METHODES
    function connect()
    {
        echo "Vous etes connecter";
    }

    function deconnect()
    {
        echo "Vous etes deconnecter";
    }

    // GETTER permet d attribué ou modifier la valeur d un attribut (propriete)
    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getEmail()
    {
        return $this->email;
    }

    // SETTER permet d'attribué ou de modifier la valeur d une propriete (attribut)
    public function setNom($nom)
    {
        // nom designe la propriete en debut de classe de
        // $nom designe l argument passé a la fonction
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setAge($age)
    {
        // misen place d'une condition pour verifier la valeur de l'age (contrainte)
        if ($age > 120 || $age <= 0) {
            throw  new Exception("L'age doit etre compris entre 0 et 120");
        } else {
            $this->age = $age;
        }
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}
