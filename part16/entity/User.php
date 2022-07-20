<?php


class User
{

    private $nom;

    private $prenom;

    private $age;

    private $email;


    public function __construct($nom, $prenom, $age, $email)
    {

        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setEmail($email);
    }



    // methode magique __get()
    // CETTE METHODE VA S EXECUTER LORSQUE L'ON ESSAYE D'ACCEDER A UN ATTRIBUT DE LA CLASSE QUI N'EXISTE PAS OU N'EST PAS DEFINI OU ACCESSIBLE DANS LA CLASSE
    public function __get($attribut)
    {
        echo "Vous avez demander l'attribut $attribut mais elle n'existe pas";
    }

    // methode magique __set()
    // CETTE METHODE VA S EXECUTERE LORSQUE L'ON ESSAYE DE MODIFIER UN ATTRIBUT DE LA CLASSE QUI N'EXISTE PAS OU N'EST PAS DEFINI OU ACCESSIBLE DANS LA CLASSE
    public function __set($attribut, $value)
    {
        // $attribut CORRESPOND AU NOM DE L ATTRIBUT QUI EST EN QUESTION
        // $value CORRESPOND A LA VALEUR QUI EST EN QUESTION
        echo "Vous avez demander de modifier l'attribut $attribut mais il n'existe pas avec la valeur $value";
    }

    // methode magique __toString()
    // CETTE METHODE VA S EXECUTER L ORSQUE L'ON ESSAYE D'AFFICHER UN OBJET DE LA CLASSE ,CETTE METHODE RENVOI UNE CHAINE DE CARACTERE
    public function __toString()
    {
        return "Nom : " . $this->nom . "<br>" .
            "Prenom : " . $this->prenom . "<br>" .
            "Age : " . $this->age . "<br>" .
            "Email : " . $this->email . "<br>";
    }
    // methode magique __invok()   
    // CETTE METHODE VA S EXECUTER L ORSQUE L'ON ESSAYE D UTILISER UN OBJET DE LA CLASSE COMME UEN FONCTION
    public function __invoke()
    {
        echo "Vous avez invoquer la methode __invoke()";
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
