<?php
require '../../ressources/configuration/envi.php';
require '../../ressources/database/huro.php';
require '../../ressources/entities/class.php';
require '../../protocoles/cookie/$_cookie.php';
require '../../ressources/configuration/session.php';
$HURO = connectDb();
$output = "";
$query = "SELECT id_produit, nom_produit, nature, unite, prix_standard, prix_minimum, quantite_disponible, id_entreprise FROM produit WHERE id_entreprise = ?  ORDER by quantite_disponible desc ";
$stmt = $HURO->prepare($query);
$stmt->bind_param('i', $utilisateur->id_entreprise);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows() != 0) {
    $produit = new Produit();
    $stmt->bind_result($produit->id_produit, $produit->nom, $produit->nature, $produit->unite, $produit->prix_standard, $produit->prix_minimum, $produit->quantite_dispo, $produit->id_entreprise);
    while ($stmt->fetch()) {
        $output .= ' <!--Grid item-->
                            <div class="column is-4">
                                <div class="tile-grid-item"
                                    data-toggle="popover"
                                    data-pop-mode="hover"
                                    data-pop-width="220"
                                    data-pop-title="' . $produit->nom . '"
                                    data-pop-content="Px Std = ' . $produit->prix_standard . ', Px Min = ' . $produit->prix_minimum . '"
                                    data-pop-position="top"
                                    data-pop-icon="lnil lnil-shopping-basket"
                                    data-pop-iconbg="primary">
                                    <div class="tile-grid-item-inner">
                                        <a href="./product-details.php?id_produit=' . $produit->id_produit . '" class="">
                                        <div class="meta">
                                            <span class="dark-inverted">' . $produit->nom . ' - ' . $produit->nature . '</span>
                                            <span>';
        if ($produit->quantite_dispo > 3) {
            $output .= '<span>' . $produit->quantite_dispo . '</span>';
            # code...
        } elseif ($produit->quantite_dispo == -1) {
            $output .= '<span> Illimité </span>';
            # code...
        } elseif ($produit->quantite_dispo == -2) {
            $output .= '<span class = "is-danger">Indisponible</span>';
        } else {
            $output .= '<span class = "is-danger">' . $produit->quantite_dispo . '</span>';
            # code...
        }
        $output .= '
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>' . $produit->unite . '</span>
                                            </span>
                                        </div>
                                        </a>
                                        <div class="dropdown is-spaced is-dots is-right dropdown-trigger is-pushed-mobile" >
                                            <div class="is-trigger" aria-haspopup="true">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can" onclick="deleteProduit(\'' . $produit->id_produit . '\')"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div></div>';

        $output .= '</div>                                                   
                        </div>                                                                                                                       
                    </div> ';
    }
    # code...
}
echo $output;
