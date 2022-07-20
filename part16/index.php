<?php
// toujours dans cette ordre inclure les interfaces avant les classes
require_once 'entity/User.php';


function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 16- METHODES MAGIQUES
// les methodes magiques sont des methodes qui sont automatiquement appeler lorsque l'on cree un objet.
// ces methodes sont cree avec deux underscores exemple(__construct)

// __construct(),
// __destruct(),
// __get(),
// __set(),
// __isset(),
// __unset(),
// __sleep(),
// __wakeup(),
// __toString(),
// __invoke():

$user = new User("Jean", "Mirty", 23, "email@gmail.com");

// __get()
// ont essay d accedez a une proprieter qui n existe pas:  la methode __get entre en action
echo $user->$adresse;

// __set()
// ont essaye de modifier un attribut innaccessible ou qui n existe pas:  la methode __set entre en action
$user->$adresse = "Paris";

// __toString()
// grace a la methode __toString() on peut afficher un objet comme une chaine de caractere
echo $user;

// __invoke()
// la methode __invok et executer car ont utilise un objet comme une fonction
$user(43);
