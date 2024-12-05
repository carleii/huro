<?php
require '../../ressources/configuration/envi.php';
require '../../ressources/database/huro.php';
require '../../ressources/entities/class.php';
require '../../protocoles/cookie/$_cookie.php';
require '../../ressources/configuration/session.php';
if ($utilisateur->niveau_acces >=2 ) {
    $vente = new Vente;
    $vente->date_vente = date('Y-m-d');
    if ($_POST['notification_selection'] == -2) {
        $vente->prix = $_POST['prix_réduit'];
        # code...
    }else{
        $vente->prix = $_POST['notification_selection'];
    }
    $vente->id_utilisateur = $utilisateur->telephone;
    $vente->id_entreprise = $entreprise->id_entreprise;
    $vente->id_produit = $_POST['produit'];
    $vente->quantite = $_POST['qte'];
    $vente->id_vente = $_COOKIE['new_sell'];
    echo $vente->create();
    # code...
}
