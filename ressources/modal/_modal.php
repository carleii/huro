<!-- Ajouter des produits avec fichier excel -->
<div id="file-product" class="modal h-modal is-big">
    <div class="modal-background h-modal-close"></div>
    <div class="modal-content" style="overflow: initial;">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-layout is-split">
                <div class="form-outer">
                    <div class="form-header stuck-header">
                        <div class="form-header-inner">
                            <div class="left">
                                <h3>Utiliser un fichier Excel</h3>
                            </div>
                            <div class="right">
                                <div class="buttons">
                                    <button type="reset" class="button h-button is-light is-dark-outlined">
                                        <span class="icon">
                                            <i class="lnir lnir-arrow-left rem-100"></i>
                                        </span>
                                        <span>Annuler</span>
                                    </button>
                                    <button type="submit" name="file_product" id="save-button" class="button h-button is-success is-raised">
                                        Charger le fichier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-section">
                            <div class="left">
                                <h3 class="has-text-centered">Télécharger l'exemplaire <a href="./ressources/template/produit.csv" download=""> Ici.</a></h3>
                            </div>
                            <div class="right">
                                <div class="field">
                                    <div class="control">
                                        <div class="file is-boxed is-primary">
                                            <label class="file-label">
                                                <input class="file-input" type="file" required name="product_excel">
                                                <span class="file-cta">
                                                    <span class="file-icon">
                                                        <i class="lnil lnil-32 lnil-cloud-upload"></i>
                                                    </span>
                                                    <span class="file-label"> Choose a file… </span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- Ajouter produit -->
<div id="uniq-product" class="modal h-modal is-big">
    <div class="modal-background h-modal-close"></div>
    <div class="modal-content" style="overflow: initial;">
        <form action="" method="post" id="enregistrer-produit">
            <div class="form-layout is-split">
                <div class="form-outer">
                    <div class="form-header stuck-header">
                        <div class="form-header-inner">
                            <div class="left">
                                <h3>Ajouter un nouveau Produit</h3>
                            </div>
                            <div class="right">
                                <div class="buttons">
                                    <button type="reset" id="reset-button" class="button h-button is-danger is-outlined is-raised">
                                        Effacer
                                    </button>
                                    <button type="submit" id="save-produit" name="save-produit" class="button h-button is-success is-outlined is-raised">
                                        Enregistrer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-section">
                            <div class="left">
                                <h3 class="has-text-centered">Prix standard</h3>
                                <div class="operator">
                                    <span>And</span>
                                </div>
                                <div class="field">
                                    <div class="control has-icon">
                                        <input class="input" type="number" name="prix_standard" required value="0" min="0" placeholder="Amount...">
                                        <div class="form-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <h3 class="has-text-centered">Prix minimum</h3>
                                <div class="field">
                                    <div class="control has-icon">
                                        <input class="input" type="number" name="prix_minimum" min="0" value="0" placeholder="Amount...">
                                        <div class="form-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section is-grey">
                            <div class="left">
                                <h3>Plus d'infos</h3>

                                <div class="field">
                                    <div class="control has-icon">
                                        <input class="input" type="text" name="nom" required placeholder="Nom. Ex: Fomat A4, 1l Huile, Plat de koki  *">
                                        <div class="form-icon">
                                            <i class="lnir lnir-shopping-basket"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control has-icon">
                                        <input class="input" type="number" name="quantite" placeholder="Quantité disponible">
                                        <div class="form-icon">
                                            <i class="lnir lnir-dropbox"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <h3>Bon à savoir</h3>

                                <div class="field">
                                    <div class="control">
                                        <div class="h-select">
                                            <div class="select-box">
                                                <span>Type</span>
                                            </div>
                                            <div class="select-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </div>
                                            <div class="select-drop has-slimscroll-sm">
                                                <div class="drop-inner">
                                                    <div class="option-row">
                                                        <input type="radio" value="service" name="nature">
                                                        <div class="option-meta">
                                                            <span>Service</span>
                                                        </div>
                                                    </div>
                                                    <div class="option-row">
                                                        <input type="radio" value="produit" name="nature">
                                                        <div class="option-meta">
                                                            <span>Produit</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <div class="h-select">
                                            <div class="select-box">
                                                <span>Unité</span>
                                            </div>
                                            <div class="select-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </div>
                                            <div class="select-drop has-slimscroll-sm">
                                                <div class="drop-inner">
                                                    <div class="option-row">
                                                        <input type="radio" value="piece" name="fees_selection">
                                                        <div class="option-meta">
                                                            <span>Piece</span>
                                                        </div>
                                                    </div>
                                                    <div class="option-row">
                                                        <input type="radio" value="packet" name="fees_selection">
                                                        <div class="option-meta">
                                                            <span>Packet</span>
                                                        </div>
                                                    </div>
                                                    <div class="option-row">
                                                        <input type="radio" value="carton" name="fees_selection">
                                                        <div class="option-meta">
                                                            <span>Carton</span>
                                                        </div>
                                                    </div>
                                                    <div class="option-row">
                                                        <input type="radio" value="sac" name="fees_selection">
                                                        <div class="option-meta">
                                                            <span>Sac</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Stock Illimité?</label>
                                    <div class="control">
                                        <label class="radio is-info">
                                            <input type="radio" value="-1" name="notification_selection">
                                            <span></span>
                                            Oui
                                        </label>

                                        <label class="radio is-outlined is-primary">
                                            <input type="radio" value="0" name="notification_selection" checked="">
                                            <span></span>
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- Enregistrer un stock -->
<div id="new-stock" class="modal h-modal is-big">
    <div class="modal-background h-modal-close"></div>
    <div class="modal-content" style="overflow: initial;">
        <form action="" method="post" id="enregistrer-stock" enctype="multipart/form-data">
            <div class="form-layout is-split">
                <div class="form-outer">
                    <div class="form-header stuck-header">
                        <div class="form-header-inner">
                            <div class="left">
                                <h3>Choisisser Le produit et entrer son Approvisionnnement</h3>
                            </div>
                            <div class="right">
                                <!-- <div class="buttons">
                                    <button type="reset" class="button h-button is-light is-dark-outlined">
                                        <span class="icon">
                                            <i class="lnir lnir-arrow-left rem-100"></i>
                                        </span>
                                        <span>Annuler</span>
                                    </button>
                                    <button type="submit" name="file_product" id="save-button" class="button h-button is-success is-raised">
                                        Charger le fichier
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-section">
                            <div class="left">
                                <div class="field">
                                    <sub>les produits illimités n'y figurent pas.</sub>

                                    <div class="control has-icons-left">
                                        <div class="select">
                                            <select name="produit" required>
                                                <?php
                                                $request = "SELECT * FROM produit WHERE id_entreprise = '$utilisateur->id_entreprise' and quantite_disponible > -1 ORDER BY nom_produit";
                                                $query = mysqli_query($HURO, $request);
                                                while ($r = mysqli_fetch_assoc($query)) {
                                                    echo '
                                                        <option value=' . $r['id_produit'] . '>' . $r['nom_produit'] . ' - ' . $r['unite'] . '</option>
                                                    ';
                                                    # code...
                                                }
                                                ?>

                                            </select>

                                        </div>
                                        <div class="icon is-small is-left">
                                            <i class="lnil lnil-arrow-up-circle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control has-icon">
                                        <input class="input" type="number" name="qte" required value="1" min="1" placeholder="">
                                        <div class="form-icon">
                                            <i class="lnil lnil-inbox"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="field">
                                    <div class="control">
                                        <div class="file is-boxed is-success">
                                            <label class="file-label">
                                                <input class="file-input" type="submit" name="add-prod-stock">
                                                <span class="file-cta">
                                                    <span class="file-icon">
                                                        <i class="lnil lnil-plus"></i>
                                                    </span>
                                                    <span class="file-label"> Ajouter au stock </span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- TYPES USERS =-->
<div id="type-user" class="modal h-modal is-big">
    <div class="modal-background h-modal-close"></div>
    <div class="modal-content" style="overflow: initial;">
        <div class="course-grid">
            <div class="columns is-multiline">
                <!--Card-->
                <div class="column is-4">
                    <div class="card h-card">
                        <header class="card-header">
                            <div class="card-header-title">Droit d'accès</div>
                            <a href="#" class="card-header-icon text-twitter">
                                <span class="icon">
                                    <i class="lnir lnir-user-alt"></i>
                                </span>
                            </a>
                        </header>
                        <div class="card-content">
                            <div class="media-flex p-b-10">
                                <div class="h-avatar is-medium">
                                    <img class="avatar is-squared" src="./protocoles/logo/<?php echo $entreprise->logo ?>" data-demo-src="./protocoles/logo/<?php echo $entreprise->logo ?>" alt="" data-user-popover="17">
                                </div>
                                <div class="flex-meta">
                                    <span>Admin 1</span>
                                    <ul>
                                        <li class="text-twitter" href="#">
                                            Enregistrer un stock
                                        </li>
                                        <li class="text-twitter" href="#">
                                            Gérer les Produits
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-->
                <div class="column is-4">
                    <div class="card h-card">
                        <header class="card-header">
                            <div class="card-header-title">Droits D'accès</div>
                            <a href="#" class="card-header-icon text-instagram">
                                <span class="icon">
                                    <i class="lnir lnir-user-alt"></i>
                                </span>
                            </a>
                        </header>
                        <div class="card-content">
                            <div class="media-flex p-b-10">
                                <div class="h-avatar is-medium">
                                    <img class="avatar is-squared" src="./protocoles/logo/<?php echo $entreprise->logo ?>" data-demo-src="./protocoles/logo/<?php echo $entreprise->logo ?>" alt="" data-user-popover="9">
                                </div>
                                <div class="flex-meta">
                                    <span>Admin 2</span>
                                    <ul>
                                        <li class="text-twitter" href="#">
                                            @Accès Admin 1
                                        </li>
                                        <li class="text-twitter" href="#">
                                            Faire des Ventes
                                        </li>
                                        <li class="text-twitter" href="#">
                                            V/A des Stocks
                                        </li>
                                        <li class="text-twitter" href="#">
                                            Gérer les Clients
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--Card-->
                <div class="column is-4">
                    <div class="card h-card">
                        <header class="card-header">
                            <div class="card-header-title">Droit D'accès</div>
                            <a href="#" class="card-header-icon text-facebook">
                                <span class="icon">
                                    <i class="lnir lnir-user-alt"></i> </span>
                            </a>
                        </header>
                        <div class="card-content">
                            <div class="media-flex p-b-10">
                                <div class="h-avatar is-medium">
                                    <img class="avatar is-squared" src="./protocoles/logo/<?php echo $entreprise->logo ?>" data-demo-src="./protocoles/logo/<?php echo $entreprise->logo ?>" alt="" data-user-popover="30">
                                </div>
                                <div class="flex-meta">
                                    <span>Admin 3</span>
                                    <li class="text-twitter" href="#">
                                        @Accès Admin 2
                                    </li>
                                    <li class="text-twitter" href="#">
                                        Annuler des ventes
                                    </li>
                                    <li class="text-twitter" href="#">
                                        Modifier les Prix
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Enregistrer un utilisateur =-->
<div id="add-user" class="modal h-modal is-big">
    <div class="modal-background h-modal-close"></div>
    <div class="modal-content" style="overflow: initial;">
        <form action="./e_v.php?kjhzghvfzebpivnlscbsnfvsdvhkjzegblbsdkbgzljbgblzjbgljzebgjkbzelgjj" method="post">
            <div class="course-grid">
                <div class="columns is-multiline">
                    <!--Card-->
                    <div class="column is-10">
                        <div class="card h-card">
                            <header class="card-header">
                                <div class="card-header-title">Ajouter un employer - Juste les numéros de telephone</div>
                                <a href="#" class="card-header-icon text-twitter">
                                    <span class="icon">
                                        <i class="lnir lnir-user-alt"></i>
                                    </span>
                                </a>
                                <div class="buttons">
                                    <button type="submit" name="add_user" class="button h-action is-rounded">Enregistrer</button>
                                </div>
                            </header>
                            <div class="card-content">
                                <div class="field">
                                    <div class="control">
                                        <input id="choices-text-remove-button" required class="input"
                                            value="" name="e_tel" placeholder="Enter phone">
                                    </div>
                                </div>
                                <div class="field demo-select">
                                    <div class="control">
                                        <label class="radio is-solid is-square is-success">
                                            <input type="radio" name="role" value="1">
                                            <span></span>
                                            Admin 1
                                        </label>

                                        <label class="radio is-solid is-square is-warning">
                                            <input type="radio" name="role" checked value="2">
                                            <span></span>
                                            Admin 2
                                        </label>

                                        <label class="radio is-solid is-square is-danger">
                                            <input type="radio" name="role" value="3">
                                            <span></span>
                                            Admin 3
                                        </label>
                                        <label class="radio is-solid is-square is-info">
                                            <input type="radio" name="role" value="4">
                                            <span></span>
                                            Super Admin
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </div>
</div>
<!-- Ajouter produit à la vente -->
<div id="uniq-sell" class="modal h-modal is-big">
    <div class="modal-background h-modal-close"></div>
    <div class="modal-content" style="overflow: initial;">
        <form action="" method="post" id="enregistrer-sell">
            <div class="form-layout is-split">
                <div class="form-outer">
                    <div class="form-header stuck-header">
                        <div class="form-header-inner">
                            <div class="left">
                                <h3>Faite la vente</h3>
                            </div>
                            <div class="right">
                                <div class="buttons">
                                    <button type="reset" id="reset-button" class="button h-button is-danger is-outlined is-raised">
                                        Effacer
                                    </button>
                                    <button type="submit" id="save-sell" name="save-sell" class="button h-button is-success is-outlined is-raised">
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-section">
                            <div class="left">
                                <h3 class="has-text-centered">Produit</h3>
                                <div class="operator">
                                    <span>And</span>
                                </div>
                                <div class="field">
                                    <div class="control has-icon">
                                        <select class="input" name="produit" id="select-box">
                                            <?php 
                                            $query = mysqli_query($HURO, "SELECT * FROM produit WHERE id_entreprise = $utilisateur->id_entreprise AND quantite_disponible > 0 or quantite_disponible = -1  AND nom_produit NOT LIKE 'Deleted' ORDER BY nom_produit");
                                            while ($result = mysqli_fetch_assoc($query)) {
                                                echo '<option value="'.$result['id_produit'].'">'.$result['nom_produit'].'</option>';
                                                # code...
                                            }
                                            ?>
                                        </select>
                                        <div class="form-icon">
                                            <i data-feather="shopping-cart"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <h3 class="has-text-centered">Quantité</h3>
                                <div class="field">
                                    <div class="control has-icon">
                                        <input class="input" type="number" name="qte" min="1" value="1" placeholder="Amount...">
                                        <div class="form-icon">
                                            <i data-feather="layers"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section is-grey">
                            <div class="left">
                                <h3 class="has-text-centered">Modifier le Prix de Vente à l'unité </h3>
                                <div class="field">
                                    <div class="control has-icon">
                                        <input class="input" type="number" name="prix_réduit" min="1" value="1" placeholder="Amount...">
                                        <div class="form-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="field">
                                    <label>Vendre à quel prix ?</label>
                                    <div class="control">
                                        <label class="radio is-info">
                                            <input type="radio" checked value="-1" name="notification_selection">
                                            <span></span>
                                            Prix Standard
                                        </label>

                                        <label class="radio is-outlined is-primary">
                                            <input type="radio" value="0" name="notification_selection">
                                            <span></span>
                                            Prix Minimum
                                        </label>

                                        <label class="radio is-outlined is-primary">
                                            <input type="radio" value="-2" name="notification_selection">
                                            <span></span>
                                            Prix de Vente Modifier
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>