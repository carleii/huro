<?php
if (isset($_GET['endnewstock'])) {
    setcookie('new_stock');
    unset($_COOKIE['new_stock']);
    # code...
}
// Valider un stock
if (isset($_GET['stock'])) {
    $admin->validerStock($_GET['stock']);
    # code...
}
// supprimer un utilisateur
if (isset($_GET['dlkjhgfezertyuiolkjnbfdertyujbvcdszasdvhjuytrezsxcvbnjuytredfghjngtghjkjhgfdefyuioplkjnbvfezetyh'])) {
    $dlkjhgfezertyuiolkjnbfdertyujbvcdszasdvhjuytrezsxcvbnjuytredfghjngtghjkjhgfdefyuioplkjnbvfezetyh = $_GET['dlkjhgfezertyuiolkjnbfdertyujbvcdszasdvhjuytrezsxcvbnjuytredfghjngtghjkjhgfdefyuioplkjnbvfezetyh'];
    if ($utilisateur->niveau_acces == 4) {
        mysqli_query($HURO, "DELETE FROM utilisateur WHERE telephone = $dlkjhgfezertyuiolkjnbfdertyujbvcdszasdvhjuytrezsxcvbnjuytredfghjngtghjkjhgfdefyuioplkjnbvfezetyh");
        # code...
    }
    # code...
}
// Supprimer vente
if (isset($_GET['kiuyghvbnczevzevzchtgebsv'])) {
    $admin->annulerVente($_GET['kiuyghvbnczevzevzchtgebsv'], $_GET['ktsjhgfdcvbjuytred']);
    # code...
}