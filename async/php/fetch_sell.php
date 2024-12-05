<?php
require '../../ressources/configuration/envi.php';
require '../../ressources/database/huro.php';
require '../../ressources/entities/class.php';
require '../../protocoles/cookie/$_cookie.php';
require '../../ressources/configuration/session.php';
$HURO = connectDb();
$output = "";
$c = $_COOKIE['new_sell'];
$query = "SELECT produit.id_produit, vente.qte, vente.prix_vente FROM produit, vente WHERE vente.id_vente = ? and vente.id_produit = produit.id_produit and vente.status_vente = 'complete' and vente.id_produit = produit.id_produit ";
$stmt = $HURO->prepare($query);
$stmt->bind_param('s', $c);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows() != 0) { 
    $total = 0;   
    $stmt->bind_result($id_produit, $quantite, $prix_vente);
    while ($stmt->fetch()) {
        $produit = new Produit($id_produit);
        if ($prix_vente == -1) {
            $go = $produit->prix_standard;
            # code...
        }elseif ($prix_vente == 0) {
            $go = $produit->prix_minimum;
            # code...
        }else {
            $go = $prix_vente;
        }
        $total += $go*$quantite;
        $output .= '
        <div class="flex-table-item">
            <div class="flex-table-cell is-grow" data-th="">
            <a href="sells.php?ktsjhgfdcvbjuytred='.$id_produit.'&kiuyghvbnczevzevzchtgebsv='.$c.'">
             <div class="icon">
                <i class="lnil lnil-trash-can"></i>
            </div>
            </a>           
                <span class="dark-text">'.$produit->nom.'</span>
            </div>
            <div class="flex-table-cell cell-end" data-th="Unit">
                <span class="light-text"></span>
            </div>
            <div class="flex-table-cell" data-th="Quantity">
                <span class="light-text">'.$quantite.'</span>
            </div>
            <div class="flex-table-cell" data-th="Rate">
                <span class="dark-inverted">'.$go.'</span>
            </div>
            <div class="flex-table-cell has-text-right" data-th="Subtotal">
                <span class="dark-inverted">'.$quantite*$go.'</span>
            </div>
        </div>
        ';
    }
    $output .= '
        <div class="flex-table-item">
            <div class="flex-table-cell is-grow" data-th="">
            <a href="#">
             <div class="icon">
                
            </div>
            </a>           
                <span class="dark-text"></span>
            </div>
            <div class="flex-table-cell cell-end" data-th="Unit">
                <span class="light-text"></span>
            </div>
            <div class="flex-table-cell" data-th="Quantity">
                <span class="light-text"></span>
            </div>
            <div class="flex-table-cell" data-th="Rate">
                <span class="dark-inverted">Total</span>
            </div>
            <div class="flex-table-cell has-text-right" data-th="Subtotal">
                <span class="dark-inverted">'.$total.'</span>
            </div>
        </div>
        ';
    # code...
}

echo $output;