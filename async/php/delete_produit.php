<?php
require '../../ressources/configuration/envi.php';
require '../../ressources/database/huro.php';
require '../../ressources/entities/class.php';
require '../../protocoles/cookie/$_cookie.php';
require '../../ressources/configuration/session.php';

$produit = new Produit($_GET['produit']);
$produit->quantite_dispo = -2;
$produit->nom = "Deleted";
echo $produit->update();