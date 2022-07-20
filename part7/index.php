<?php

require_once 'entity/Produit.php';
function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 8- ATTRIBUTS STATIQUES 
// les attributs statiques sont des attributs qui sont commun a tout les objets de la classe qui seront toujour les memes
// dans cette exemple ecommerce ont peut envisager une classe qui va gerer les produits

// ont insctencie 3 produits
$product1 = new Produit('001', 'T-shirt', '15.50');
$product2 = new Produit('002', 'Pantalon', '25.50');
$product3 = new Produit('003', 'Chaussure', '35.50');

var_dump($product1);
// l attribut static $remise n apparait pas dans l objet $product1 car elle et une propriete statique propre a la class
// ONT PEUT L UTILISER AINSI:
echo Produit::$remise;
// appelez depuit la class Produit

s();
// ont peut appelez la propriete statique remise a partir de l objet comme ceci:
echo $product1::$remise;
