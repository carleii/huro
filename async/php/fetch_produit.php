<?php
require '../../ressources/configuration/envi.php';
require '../../ressources/database/huro.php';
require '../../ressources/entities/class.php';
require '../../protocoles/cookie/$_cookie.php';
require '../../ressources/configuration/session.php';
$HURO = connectDb();
$output = "";
$query = "SELECT id_produit, nom_produit, nature, unite, prix_standard, prix_minimum, quantite_disponible, id_entreprise FROM produit WHERE id_entreprise = ?  ";
$stmt = $HURO->prepare($query);
$stmt->bind_param('i', $utilisateur->id_entreprise);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows() != 0) {
    $produit = new Produit();
    $stmt->bind_result($produit->id_produit, $produit->nom, $produit->nature, $produit->unite, $produit->prix_standard, $produit->prix_minimum, $produit->quantite_dispo, $produit->id_entreprise);
    while ($stmt->fetch()) {
        $output .= '<!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-media is-grow">
                                            <div class="h-avatar is-medium">
                                                <img
                                                    class="avatar"
                                                    src="assets/img/logos/logo/logo.svg"
                                                    
                                                    alt=""
                                                    data-user-popover="3" />
                                                <img
                                                    class="badge"
                                                    src="./protocoles/logo/'.$entreprise->logo.'"
                                                   
                                                    alt="" />
                                            </div>
                                            <div>
                                                <span
                                                    class="item-name dark-inverted"
                                                    data-filter-match>' . $produit->nom . '</span>
                                                <span class="item-meta">
                                                    <span data-filter-match>' . $produit->nature . ' - ' . $produit->unite . '</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-table-cell" data-th="Location">
                                            <span class="light-text" data-filter-match>' . $produit->quantite_dispo . '</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Industry">
                                            <span class="light-text" data-filter-match> Max -' . $produit->prix_standard . '<br> Min -' . $produit->prix_minimum . '</span>
                                        </div>                                                                               
                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                            <div
                                                class="dropdown is-spaced is-dots is-right dropdown-trigger is-pushed-mobile">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <i data-feather="more-vertical"></i>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-eye"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>View</span>
                                                                <span>View user details</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-briefcase"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Projects</span>
                                                                <span>View user projects</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-calendar"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Schedule</span>
                                                                <span>Schedule a meeting</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider" />
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Remove</span>
                                                                <span>Remove from list</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> ';
        # code...
    }
    # code...
}
echo $output;
