<?php

require_once 'entity/Produit.php';
function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 8- METHODS STATIQUES 
// les methodes statiques sont des methodes qui sont commun a tout les objets de la classe qui seront toujour les memes
// ont insctencie 3 produits
$product1 = new Produit('001', 'T-shirt', '200');
$product2 = new Produit('002', 'Pantalon', '150');
$product3 = new Produit('003', 'Chaussure', '100');

// appelez la methode statique getRemise() a partir de l objet comme ceci:
echo $product1::getRemise();

s();
// appelez la methode statique getRemise() a partir de la classe:
echo Produit::getRemise();

s();
// recuperation du prix apres la remise est applique:
echo $product1->getPrixRemise();

//attribution de la valeur de la propriete statique $remise de l objet $product1:
$product1->setRemise(50);
s();
echo Produit::getRemise();
s();

// application de la remise a tout les produits de 50%
echo $product1->getPrixRemise();
