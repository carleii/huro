<?php
require '../../ressources/configuration/envi.php';
require '../../ressources/database/huro.php';
require '../../ressources/entities/class.php';
require '../../protocoles/cookie/$_cookie.php';
require '../../ressources/configuration/session.php';
$date = date(DATE_RSS);
echo ($admin->enregistrerStock($_COOKIE['new_stock'], $_POST['produit'], $_POST['qte'], $date, $utilisateur->id_entreprise)) ? 1 : 0 ;
