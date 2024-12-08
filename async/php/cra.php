<?php
require '../../ressources/configuration/envi.php';
require '../../ressources/database/huro.php';
require '../../ressources/entities/class.php';
require '../../protocoles/cookie/$_cookie.php';
require '../../ressources/configuration/session.php';
$HURO = connectDb();
$output = [];
// mois
$output[1] = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec"
];
// chiffres
$output[2] = [];
// revenue
$output[3] = [];
// abandon
$output[4] = [];

for ($i = 1; $i <= 12; $i++) {
    $revenuecemois = 0;
    if ($i < 9) {
        $i2 = "0" . $i;
        # code...
    } else {
        $i2 = $i;
    }
    $tst = 0;
    $tic = 0;
    $no = 0;
    $loss = 0;
    $query = "SELECT produit.id_produit, vente.qte, vente.prix_vente, vente.status_vente, vente.date_vente FROM produit, vente WHERE MONTH(vente.date_vente) = '$i2 ' and YEAR(vente.date_vente) = YEAR(CURDATE()) and vente.id_utilisateur = ? and vente.id_produit = produit.id_produit  ";
    $stmt = $HURO->prepare($query);
    $stmt->bind_param('s', $utilisateur->telephone);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id_produit, $quantite, $prix_vente, $status, $date);
    while ($stmt->fetch()) {
        if (1) {
            $produit = new Produit($id_produit);
            if ($prix_vente == -1) {
                $go = $produit->prix_standard;
                # code...
            } elseif ($prix_vente == 0) {
                $go = $produit->prix_minimum;
                # code...
            } else {
                $go = $prix_vente;
            }
            $tst += $go * $quantite;

            if ($status == "complete") {
                $no++;
                $tic += $go * $quantite;
                # code...
            } else {
                $loss += $go * $quantite;
            }
            # code...
        }

        # code...
    }
    // chiffre
    $output[2][] = $tst / 1000;
    // revenue
    $output[3][] = $tic / 1000;
    // abandon
    $output[4][] = $loss / 1000;
}

$output = json_encode($output);
print_r($output);
