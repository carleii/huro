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