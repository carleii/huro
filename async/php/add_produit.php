<?php
require '../../ressources/configuration/envi.php';
require '../../ressources/database/huro.php';
require '../../ressources/entities/class.php';
require '../../protocoles/cookie/$_cookie.php';
require '../../ressources/configuration/session.php';
if ($_POST['notification_selection'] == 0) {
    echo $retVal = ($admin->createProduit(
        null,
        $utilisateur->id_entreprise,
        $_POST['nom'],
        $_POST['prix_standard'],
        $_POST['prix_minimum'],
        $_POST['nature'],
        $_POST['fees_selection'],
        $_POST['quantite']
    )) ? 1 : 0;
    # code...
} else {
    echo $retVal = ($admin->createProduit(
        null,
        $utilisateur->id_entreprise,
        $_POST['nom'],
        $_POST['prix_standard'],
        $_POST['prix_minimum'],
        $_POST['nature'],
        $_POST['fees_selection'],
        -1
    )) ? 1 : 0;
}
