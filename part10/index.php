<?php

require_once 'entity/User.php';
require_once 'entity/Author.php';
function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 10- HERITAGE OU DERIVATION

// NOUVELLE INSTANCE DE LA CLASSE AUTHOR EN HERITANT DU CONSTRUCTEUR AFIN DE POUVOIR Y AJOUTER DES PROPRIETES
// NOTE ET AVIS
$author1 =  new Author("Dupont", "Jean", "25", "email@gmail.com",14,"mon super avis");

echo $author1->getNote();
s();
echo $author1->getAvis();


