<?php


class User
{

    private $nom;

    private $prenom;

    private $age;

    private $email;


    // creation du constructeur exemple

    // public function __construct() //NOM PRECEDE PAR UN UNDERSCORE (executer a chaque fois que l'on cree un objet)
    // { 
    //     echo "Je suis le constructeur executer automatiquement" . "<br>";
    // }

    public function __construct($nom, $prenom, $age, $email)
    {
        // nous passont les setteur afin dy mettre des controlles sur les valeurs dans les fonction (setter)
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setEmail($email);
    }



    function connect()
    {
        echo "Vous etes connecter";
    }

    function deconnect()
    {
        echo "Vous etes deconnecter";
    }


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

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    // application des controles sur les valeurs dans les setteur
    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new Exception("L'email n'est pas valide");
        };
    }
}




