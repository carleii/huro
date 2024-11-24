<?php
$cookie_val = explode("$$", $_COOKIE['andhisnameisjhoncena']);
$utilisateur = new Utilisateur(null, $cookie_val[0], $cookie_val[1]);
// utilisateur
$utilisateur->authenticate();
// type of admin
switch ($utilisateur->niveau_acces) {
    case '4':
    $admin = new Administrateur($utilisateur->nom, $utilisateur->telephone, $utilisateur->mot_de_passe, $utilisateur->id_entreprise, $utilisateur->niveau_acces);
        # code...
        break;
    case '3':
    $admin = new Admin3($utilisateur->nom, $utilisateur->telephone, $utilisateur->mot_de_passe, $utilisateur->id_entreprise, $utilisateur->niveau_acces);
        # code...
        break;
    case '2':
    $admin = new Admin2($utilisateur->nom, $utilisateur->telephone, $utilisateur->mot_de_passe, $utilisateur->id_entreprise, $utilisateur->niveau_acces);
        # code...
        break;
    
    default:
    $admin = new Admin1($utilisateur->nom, $utilisateur->telephone, $utilisateur->mot_de_passe, $utilisateur->id_entreprise, $utilisateur->niveau_acces);
        # code...
        break;
}
// entreprise
$entreprise = new Entreprise($utilisateur->telephone);