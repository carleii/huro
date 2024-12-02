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
                                        <img src="assets/img/icons/files/pdf.svg" data-demo-src="assets/img/icons/files/pdf.svg" alt="">
                                        <div class="meta">
                                            <span class="dark-inverted">' . $produit->nom . ' - ' . $produit->nature . '</span>
                                            <span>';
                                            if ($produit->quantite_dispo > 3) {
                                                $output .= '<span>' . $produit->quantite_dispo . '</span>';
                                                # code...
                                            } elseif( $produit->quantite_dispo == -1) {
                                                $output .= '<span> Illimité </span>';
                                                # code...
                                            }elseif($produit->quantite_dispo == -2){
                                                $output .= '<span class = "is-danger">Indisponible</span>';
                                            }else {
                                                $output .= '<span class = "is-danger">' . $produit->quantite_dispo . '</span>';
                                                # code...
                                            }
                                            $output .='
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>' . $produit->unite . '</span>
                                            </span>
                                        </div>
                                        <div class="dropdown is-spaced is-dots is-right dropdown-trigger is-pushed-mobile">
                                            <div class="is-trigger" aria-haspopup="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="./product-details.php?id_produit='.$produit->id_produit.'" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-eye"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Voir</span>
                                                            <span>plus de details</span>
                                                        </div>
                                                    </a>';
                                                    if ($produit->quantite_dispo == -1) {
                                                        $output .= '<a href="./product-details.php?id_produit='.$produit->id_produit.'&limite" class="dropdown-item is-media">';
                                                        # code...
                                                    } else{
                                                        $output .= '<a href="./product-details.php?id_produit='.$produit->id_produit.'&limiteless" class="dropdown-item is-media">';
                                                    }
                                                    $output .='
                                                        <div class="icon">
                                                            <i class="lnil lnil-dollar-up"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Update</span>
                                                            <span>Limité le stock</span>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-calendar"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Schedule</span>
                                                            <span>comming soon</span>
                                                        </div>
                                                    </a>
                                                    <hr class="dropdown-divider">
                                                    <a href="#" value="'.$produit->id_produit.'" class="dropdown-item is-media" onclick="deleteProduit(\''.$produit->id_produit.'\')">
                                                        <div class="icon is-danger">
                                                            <i class="lnil lnil-trash-can-alt"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Remove</span>
                                                            <span>Retirer du stock</span>
                                                        </div>
                                                    </a>
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