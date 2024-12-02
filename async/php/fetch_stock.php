<?php
require '../../ressources/configuration/envi.php';
require '../../ressources/database/huro.php';
require '../../ressources/entities/class.php';
require '../../protocoles/cookie/$_cookie.php';
require '../../ressources/configuration/session.php';
$HURO = connectDb();
$output = "";
$c = $_COOKIE['new_stock'];
$query = "SELECT stock.id_stock, stock.quantite, stock.date_enregistrement, produit.nom_produit, produit.nature, produit.unite, produit.quantite_disponible FROM produit, stock WHERE stock.id_stock = ? and stock.id_produit = produit.id_produit  ";
$stmt = $HURO->prepare($query);
$stmt->bind_param('s', $c);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows() != 0) {
    $produit = new Produit();
    $stock = new Stock();
    $stmt->bind_result($stock->id_stock, $stock->quantite, $stock->date_enreg, $produit->nom, $produit->nature, $produit->unite, $produit->quantite_dispo);
    while ($stmt->fetch()) {
        $output .= '
        <!--Table item-->
        <div class="flex-table-item">
            <div class="flex-table-cell is-bold" data-th="Company">
                <span class="dark-text">'.$produit->nom.'</span>
            </div>
            <div class="flex-table-cell" data-th="Type">';
            if ($produit->quantite_dispo >= 5) {
                $output .= '<span class="tag is-success is-rounded">'.$produit->quantite_dispo.'</span>';
                # code...
            }else {
                $output .= '<span class="tag is-danger is-rounded">'.$produit->quantite_dispo.' - '.$produit->nature.'</span>';
                # code...
            }
            $output .='
            </div>
            <div class="flex-table-cell" data-th="Industry">
                <span class="tag light-text is-violet">'.$stock->quantite.'</span>
            </div>
            <div class="flex-table-cell" data-th="Status">';
            if ($stock->status_ == 1) {
                $output .= '<span class="tag is-success is-rounded"><i class="lnil lnil-checkmark"></i></span>';
                # code...
            }else {
                $output .= '<span class="tag is-info is-rounded"><i class="lnil lnil-close"></i></span>';
                # code...
            }
            $output .='
            </div>
            <div class="flex-table-cell" data-th="Contacts">
                 <span class="tag is-solid is-rounded">'.$stock->date_enreg.'</span>
            </div>
            <div class="flex-table-cell cell-end" data-th="Actions">
                <i class="lnil lnil-trash-can-alt-1 tag is-danger"></i>
            </div>
        </div>
        ';
    }
    # code...
}
echo $output;