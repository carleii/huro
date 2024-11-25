<?php 
require '../../ressources/configuration/envi.php';
require '../../ressources/database/huro.php';
require '../../ressources/entities/class.php';
require '../../protocoles/cookie/$_cookie.php';
require '../../ressources/configuration/session.php';
if ($_POST['notification_selection'] == 0) {
    $produit  = new Produit(
        null, 
        $utilisateur->id_entreprise, 
        $_POST['nom'], 
        $_POST['prix_standard'], 
        $_POST['prix_minimum'], 
        $_POST['nature'], 
        $_POST['unite'],
        $_POST['quantite']);
    # code...
}else {
    $produit  = new Produit(
        null, 
        $utilisateur->id_entreprise, 
        $_POST['nom'], 
        $_POST['prix_standard'], 
        $_POST['prix_minimum'], 
        $_POST['nature'], 
        $_POST['unite'],
        -1);
}
print_r($produit);
