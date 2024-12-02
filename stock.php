<?php require_once './ressources/configuration/settings.php' ?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags  -->
    <?php require './ressources/view/metadata/metadata.php' ?>

    <title>Huro :: Stock</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />



    <!--Core CSS -->
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet" />

    <!--Mapbox styles-->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->

    <div id="huro-app" class="app-wrapper">
        <div class="app-overlay"></div>

        <!--Full pageloader-->
        <!-- Pageloader -->
        <div class="pageloader is-full"></div>
        <div class="infraloader is-full is-active"></div>


        <!--Webapp navbar regular-->
        <div class="webapp-navbar">
            <div class="webapp-navbar-inner">
                <div class="left">
                    <a href="index.html" class="brand">
                        <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="" />
                        <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="" />
                    </a>
                    <div class="separator"></div>
                    <div class="dropdown project-dropdown dropdown-trigger is-spaced">
                        <div class="h-avatar is-small">
                            <span class="avatar is-fake is-h-green">
                                <span>St</span>
                            </span>
                        </div>
                        <span class="status-indicator"></span>
                        <?php require './type.php' ?>
                    </div>
                    <h1 id="webapp-page-title" class="title is-5">Stock</h1>
                </div>
                <?php require './center_right.php' ?>
            </div>
        </div>

        <?php require './webapp_subnav.php' ?>

        <!--Languages panel-->
        <?php require './langage.php' ?>

        <!--Activity panel-->
        <?php require './activity.php' ?>

        <!--Page body-->



        <!-- Content Wrapper -->
        <div id="app-projects" class="view-wrapper is-webapp" data-page-title="Stock" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                    <div class="page-title has-text-centered is-webapp">
                        <div class="title-wrap">
                            <h1 class="title is-4">Stock</h1>
                        </div>

                    </div>

                    <?php include './inlive.php' ?>

                    <div class="page-content-inner all-projects">
                        <div class="illustration-header">
                            <img class="light-image" src="assets/img/illustrations/projects/header.svg" alt="" />
                            <img class="dark-image" src="assets/img/illustrations/projects/header-dark.svg" alt="" />
                            <div class="list-flex-toolbar">
                                <div class="buttons">
                                    <form action="" method="post">
                                        <button type="submit" name="new_stock" class="button h-button is-success is-outlined h-modal-trigger" data-modal="uniq-product">
                                            <span class="icon">
                                                <i aria-hidden="true" class="fas fa-plus"></i>
                                            </span>
                                            <span></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="header-stats">
                                <div class="stats-inner">
                                    <!-- stock validé -->
                                    <div class="stat-item">
                                        <span class="is-success">
                                            <?php
                                            // stock validé
                                            $sv = 1;
                                            $query = "SELECT COUNT(DISTINCT(stock.id_stock)) FROM stock WHERE stock.status_ = ? and stock.id_entreprise = " . $utilisateur->id_entreprise . "  ";
                                            $stmt = $HURO->prepare($query);
                                            $stmt->bind_param('i', $sv);
                                            $stmt->execute();
                                            $stmt->store_result();
                                            if ($stmt->num_rows() != 0) {
                                                $stmt->bind_result($sv);
                                                $stmt->fetch();
                                                echo $sv;
                                            }
                                            ?>
                                        </span>
                                        <p>Validé</p>
                                    </div>
                                    <!-- stock non validé -->
                                    <div class="stat-item">
                                        <span class="is-warning">
                                            <?php
                                            // stock non validé
                                            $snv = 0;
                                            $query = "SELECT COUNT(DISTINCT(stock.id_stock)) FROM stock WHERE stock.status_ = ? and stock.id_entreprise = " . $utilisateur->id_entreprise . "  ";
                                            $stmt = $HURO->prepare($query);
                                            $stmt->bind_param('i', $snv);
                                            $stmt->execute();
                                            $stmt->store_result();
                                            if ($stmt->num_rows() != 0) {
                                                $stmt->bind_result($snv);
                                                $stmt->fetch();
                                                echo $snv;
                                            }
                                            ?>
                                        </span>
                                        <p>Non Validé</p>
                                    </div>
                                    <!-- stock -->
                                    <div class="stat-item">
                                        <span class="is-info">
                                            <?php
                                            // stock total
                                            $stv = 0;
                                            $query = "SELECT COUNT(produit.id_produit) FROM produit WHERE produit.quantite_disponible > 0 or produit.quantite_disponible = -1 and produit.id_entreprise = " . $utilisateur->id_entreprise . "  ";
                                            $stmt = $HURO->prepare($query);
                                            $stmt->execute();
                                            $stmt->store_result();
                                            if ($stmt->num_rows() != 0) {
                                                $stmt->bind_result($stv);
                                                $stmt->fetch();
                                                echo $stv;
                                            }
                                            ?>
                                        </span>
                                        <p>En Stock</p>
                                    </div>
                                    <!-- rupture -->
                                    <div class="stat-item">
                                        <span class="is-primary">
                                            <?php
                                            // stock total en ruputure
                                            $st = 0;
                                            $query = "SELECT COUNT(produit.id_produit) FROM produit WHERE produit.quantite_disponible = 0 and produit.id_entreprise = " . $utilisateur->id_entreprise . "  ";
                                            $stmt = $HURO->prepare($query);
                                            $stmt->execute();
                                            $stmt->store_result();
                                            if ($stmt->num_rows() != 0) {
                                                $stmt->bind_result($st);
                                                $stmt->fetch();
                                                echo $st;
                                            }
                                            ?>
                                        </span>
                                        <p>En Rupture</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="recent-projects">
                            <h3 class="recent-heading">Statistiques</h3>

                            <div class="columns">
                                <div class="column is-4">
                                    <a class="project-box">
                                        <div class="circle-chart-wrapper is-success" data-completion="<?php echo $retVal = ($sv + $snv > 0) ? ($sv * 100) / ($sv + $snv) : 0;   ?>">
                                            <svg class="circle-chart" viewBox="0 0 45 45" width="60" height="60" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="circle-chart__background" stroke-width="5" fill="none" cx="50%" cy="50%" r="15.91549431" />
                                                <circle class="circle-chart__circle" stroke-width="5" stroke-dasharray="75,100" stroke-linecap="round" fill="none" cx="50%" cy="50%" r="15.91549431" />
                                            </svg>
                                        </div>
                                        <h3>Stats Stock Validé</h3>
                                    </a>
                                </div>
                                <div class="column is-4">
                                    <a class="project-box">
                                        <div class="circle-chart-wrapper is-danger" data-completion="<?php echo $retVal = ($sv + $snv > 0) ? ($snv * 100) / ($sv + $snv) : 0;  ?>">
                                            <svg class="circle-chart" viewBox="0 0 45 45" width="60" height="60" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="circle-chart__background" stroke-width="5" fill="none" cx="50%" cy="50%" r="15.91549431" />
                                                <circle class="circle-chart__circle" stroke-width="5" stroke-dasharray="75,100" stroke-linecap="round" fill="none" cx="50%" cy="50%" r="15.91549431" />
                                            </svg>
                                        </div>
                                        <h3>Stats Stock Non Validé</h3>
                                    </a>
                                </div>
                                <div class="column is-4">
                                    <a class="project-box">
                                        <div class="circle-chart-wrapper is-info" data-completion="<?php echo $retVal = ($stv + $st > 0) ? ($stv * 100) / ($stv + $st) : 0;   ?>">
                                            <svg class="circle-chart" viewBox="0 0 45 45" width="60" height="60" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="circle-chart__background" stroke-width="5" fill="none" cx="50%" cy="50%" r="15.91549431" />
                                                <circle class="circle-chart__circle" stroke-width="5" stroke-dasharray="75,100" stroke-linecap="round" fill="none" cx="50%" cy="50%" r="15.91549431" />
                                            </svg>
                                        </div>
                                        <h3>Stats Stock Disponible</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-wrapper">
                            <div class="tabs-inner">
                                <div class="tabs is-centered">
                                    <ul>
                                        <li data-tab="team-tab" class="is-active"><a>Validé</a></li>
                                        <li data-tab="projects-tab"><a>Non Validé</a></li>
                                        <li data-tab="tasks-tab"><a>En Stock</a></li>
                                        <li data-tab="rupture-tab"><a>En Rupture</a></li>
                                    </ul>
                                </div>
                            </div>


                            <div id="team-tab" class="tab-content is-active">
                                <!-- Stock validé -->
                                <div class="project-minimal-grid">
                                    <div class="grid-header">
                                        <h3>Stock Validé</h3>
                                        <div class="filter">
                                            <span>Filted by</span>
                                            <div class="control">
                                                <div class="h-select">
                                                    <div class="select-box">
                                                        <span>Date</span>
                                                    </div>
                                                    <div class="select-icon">
                                                        <i data-feather="chevron-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="columns is-multiline grid-body">
                                        <?php
                                        // stock non validé
                                        $ouput = "";
                                        $query = mysqli_query($HURO, 'SELECT DISTINCT(stock.id_stock) FROM stock WHERE stock.status_ = 1 and stock.id_entreprise = ' . $utilisateur->id_entreprise . ' ORDER by id_stock desc ');
                                        while ($result = mysqli_fetch_assoc($query)) {
                                            $id_stock = $result['id_stock'];
                                            $ouput .= '<!--Project-->
                                            <div class="column is-4">
                                                <a href="#" class="grid-item">
                                                    <div class="item-head">
                                                        <span class="type">' .  $id_stock . '</span>
                                                        <span class="status is-info">Stock valider</span>
                                                    </div>
                                                    
                                                    <div class="item-description">
                                                        <div class="flex-table">
                                                            <!--Table header-->
                                                            <div class="flex-table-header">
                                                                <span>Produit</span>
                                                                <span>Quantité</span>
                                                            </div>';


                                            $request = "SELECT id_stock, quantite, date_enregistrement, id_produit FROM stock WHERE id_stock = '$id_stock' and status_ = 1 ";
                                            $stmt = $HURO->prepare($request);
                                            $stmt->execute();
                                            $stmt->store_result();
                                            $stock = new Stock;
                                            $stmt->bind_result($stock->id_stock, $stock->quantite, $stock->date_enreg, $id_produit);
                                           
                                            while ($stmt->fetch()) {
                                                $produit = new Produit($id_produit);
                                                $ouput .= '<!--Table item-->
                                                        <div class="flex-table-item">
                                                            <div class="flex-table-cell is-bold" data-th="Company">
                                                                <span class="dark-text">' . $produit->nom . '</span>
                                                            </div>
                                                            <div class="flex-table-cell" data-th="Type">
                                                                <span class="light-text">' . $stock->quantite . '</span>
                                                            </div>                                                           
                                                        </div> ';
                                                # code...
                                            }
                                            $ouput .= '</div>

                                                    <div class="item-people">                                                        
                                                        <span class="label">' . timeLapsed($stock->date_enreg) . '</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>';
                                            # code...
                                        }
                                        echo $ouput;
                                        ?>

                                    </div>
                                </div>
                            </div>

                            <div id="projects-tab" class="tab-content">
                                <!-- Stock non validé -->
                                <div class="project-minimal-grid">
                                    <div class="grid-header">
                                        <h3>Stock Non Validé</h3>
                                        <div class="filter">
                                            <span>Filted by</span>
                                            <div class="control">
                                                <div class="h-select">
                                                    <div class="select-box">
                                                        <span>Date</span>
                                                    </div>
                                                    <div class="select-icon">
                                                        <i data-feather="chevron-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="columns is-multiline grid-body">
                                        <?php
                                        // stock non validé
                                        $ouput = "";
                                        $query = mysqli_query($HURO, 'SELECT DISTINCT(stock.id_stock) FROM stock WHERE stock.status_ = 0 and stock.id_entreprise = ' . $utilisateur->id_entreprise . ' ORDER by id_stock desc ');
                                        while ($result = mysqli_fetch_assoc($query)) {
                                            $id_stock = $result['id_stock'];
                                            $ouput .= '<!--Project-->
                                            <div class="column is-4">
                                                <a href="./stock.php?stock=' .  $id_stock . '" class="grid-item">
                                                    <div class="item-head">
                                                        <span class="type">' .  $id_stock . '</span>
                                                        <span class="status is-info">Cliquer Pour valider</span>
                                                    </div>
                                                    
                                                    <div class="item-description">
                                                        <div class="flex-table">
                                                            <!--Table header-->
                                                            <div class="flex-table-header">
                                                                <span>Produit</span>
                                                                <span>Quantité</span>
                                                            </div>';


                                            $request = "SELECT id_stock, quantite, date_enregistrement, id_produit FROM stock WHERE id_stock = '$id_stock' and status_ = 0 ";
                                            $stmt = $HURO->prepare($request);
                                            $stmt->execute();
                                            $stmt->store_result();
                                            $stock = new Stock;
                                            $stmt->bind_result($stock->id_stock, $stock->quantite, $stock->date_enreg, $id_produit);
                                           
                                            while ($stmt->fetch()) {
                                                $produit = new Produit($id_produit);
                                                $ouput .= '<!--Table item-->
                                                        <div class="flex-table-item">
                                                            <div class="flex-table-cell is-bold" data-th="Company">
                                                                <span class="dark-text">' . $produit->nom . '</span>
                                                            </div>
                                                            <div class="flex-table-cell" data-th="Type">
                                                                <span class="light-text">' . $stock->quantite . '</span>
                                                            </div>                                                           
                                                        </div> ';
                                                # code...
                                            }
                                            $ouput .= '</div>

                                                    <div class="item-people">                                                        
                                                        <span class="label">' . timeLapsed($stock->date_enreg) . '</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>';
                                            # code...
                                        }
                                        echo $ouput;
                                        ?>

                                    </div>
                                </div>
                            </div>

                            <div id="tasks-tab" class="tab-content">
                                <!-- Stock -->
                                <div class="project-minimal-grid">
                                    <div class="grid-header">
                                        <h3>Produis en Stock</h3>
                                        <div class="filter">
                                            <span>Filtered by</span>
                                            <div class="control">
                                                <div class="h-select">
                                                    <div class="select-box">
                                                        <span>Name</span>
                                                    </div>
                                                    <div class="select-icon">
                                                        <i data-feather="chevron-down"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="columns is-multiline grid-body">
                                        <div class="column is-12">
                                            <div class="flex-table is-compact">
                                                <!--Table header-->
                                                <div class="flex-table-header">
                                                    <span>Nom</span>
                                                    <span>Type</span>
                                                    <span>Unité</span>
                                                    <span>Quantité</span>
                                                    <span>Dernier Approvisionnement</span>
                                                    <span class="cell-end">Actions</span>
                                                </div>
                                                <?php
                                                $request = "SELECT produit.id_produit FROM produit WHERE produit.id_entreprise = $utilisateur->id_entreprise and (produit.quantite_disponible > 0 or produit.quantite_disponible = -1) ORDER by produit.nom_produit desc ";
                                                $stmt = $HURO->prepare($request);
                                                $stmt->execute();
                                                $stmt->store_result();
                                                $stmt->bind_result($id_produit);
                                                while ($stmt->fetch()) {
                                                    $produit = new Produit($id_produit);
                                                    $r = "SELECT stock.date_enregistrement FROM stock WHERE stock.id_entreprise = $utilisateur->id_entreprise and stock.id_produit = $produit->id_produit ORDER by stock.id_stock desc LIMIT 1 ";
                                                    $stmtt = $HURO->prepare($r);
                                                    $stmtt->execute();
                                                    $stmtt->store_result();
                                                    $stmtt->bind_result($last_date);
                                                    $stmtt->fetch();
                                                ?>
                                                    <div class="flex-table-item">
                                                        <div class="flex-table-cell is-bold" data-th="Company">
                                                            <span class="dark-text"><?php echo $produit->nom ?></span>
                                                        </div>
                                                        <div class="flex-table-cell" data-th="Type">
                                                            <span class="dark-text"><?php echo $produit->nature ?></span>
                                                        </div>
                                                        <div class="flex-table-cell" data-th="Industry">
                                                            <span class="dark-text"><?php echo $produit->unite ?></span>
                                                        </div>
                                                        <div class="flex-table-cell" data-th="Status">
                                                            <span class="tag is-success is-rounded"><?php echo $retVal = ($produit->quantite_dispo == -1) ? "Illimité" : $produit->quantite_dispo; ?></span>
                                                        </div>
                                                        <div class="flex-table-cell" data-th="Contacts">
                                                            <span class="dark-text"><?php echo timeLapsed($last_date) ?></span>
                                                        </div>
                                                        <div class="flex-table-cell cell-end" data-th="Actions">
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
                                                                        <a href="./product-details.php?id_produit=<?php echo $produit->id_produit ?>" class="dropdown-item is-media">
                                                                            <div class="icon">
                                                                                <i class="lnil lnil-eye"></i>
                                                                            </div>
                                                                            <div class="meta">
                                                                                <span>Voir</span>
                                                                                <span>plus de details</span>
                                                                            </div>
                                                                        </a>
                                                                        <a href="./product-details.php?id_produit=<?php echo $produit->id_produit ?>&limite" class="dropdown-item is-media">
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
                                                                        <a href="./produit.php?id_produit=<?php echo $produit->id_produit ?>&delete" class="dropdown-item is-media">
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
                                                <?php
                                                }
                                                ?>



                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Stock en Rupture -->
                            <div id="rupture-tab" class="tab-content">
                                <div class="project-minimal-grid">
                                    <div class="grid-header">
                                        <h3>Produis en Rupture de Stock</h3>
                                        <div class="filter">
                                            <span>Filtered by</span>
                                            <div class="control">
                                                <div class="h-select">
                                                    <div class="select-box">
                                                        <span>Name</span>
                                                    </div>
                                                    <div class="select-icon">
                                                        <i data-feather="chevron-down"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="columns is-multiline grid-body">
                                        <div class="column is-12">
                                            <div class="flex-table is-compact">
                                                <!--Table header-->
                                                <div class="flex-table-header">
                                                    <span>Nom</span>
                                                    <span>Type</span>
                                                    <span>Unité</span>
                                                    <span>Quantité</span>
                                                    <span>Dernier Approvisionnement</span>
                                                    <span class="cell-end">Actions</span>
                                                </div>
                                                <?php
                                                $request = "SELECT produit.id_produit FROM produit WHERE produit.id_entreprise = $utilisateur->id_entreprise and produit.quantite_disponible = 0 ORDER by produit.nom_produit desc ";
                                                $stmt = $HURO->prepare($request);
                                                $stmt->execute();
                                                $stmt->store_result();
                                                $stmt->bind_result($id_produit);
                                                while ($stmt->fetch()) {
                                                    $produit = new Produit($id_produit);
                                                    $r = "SELECT stock.date_enregistrement FROM stock WHERE stock.id_entreprise = $utilisateur->id_entreprise and stock.id_produit = $produit->id_produit ORDER by stock.id_stock desc LIMIT 1 ";
                                                    $stmtt = $HURO->prepare($r);
                                                    $stmtt->execute();
                                                    $stmtt->store_result();
                                                    $stmtt->bind_result($last_date);
                                                    $stmtt->fetch();
                                                ?>
                                                    <div class="flex-table-item">
                                                        <div class="flex-table-cell is-bold" data-th="Company">
                                                            <span class="dark-text"><?php echo $produit->nom ?></span>
                                                        </div>
                                                        <div class="flex-table-cell" data-th="Type">
                                                            <span class="dark-text"><?php echo $produit->nature ?></span>
                                                        </div>
                                                        <div class="flex-table-cell" data-th="Industry">
                                                            <span class="dark-text"><?php echo $produit->unite ?></span>
                                                        </div>
                                                        <div class="flex-table-cell" data-th="Status">
                                                            <span class="tag is-danger is-rounded"><?php echo $produit->quantite_dispo ?></span>
                                                        </div>
                                                        <div class="flex-table-cell" data-th="Contacts">
                                                            <span class="dark-text"><?php echo timeLapsed($last_date) ?></span>
                                                        </div>
                                                        <div class="flex-table-cell cell-end" data-th="Actions">
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
                                                                        <a href="#" class="dropdown-item is-media">
                                                                            <div class="icon">
                                                                                <i class="lnil lnil-eye"></i>
                                                                            </div>
                                                                            <div class="meta">
                                                                                <span>View</span>
                                                                                <span>View company details</span>
                                                                            </div>
                                                                        </a>
                                                                        <a href="#" class="dropdown-item is-media">
                                                                            <div class="icon">
                                                                                <i class="lnil lnil-dollar-up"></i>
                                                                            </div>
                                                                            <div class="meta">
                                                                                <span>Deal</span>
                                                                                <span>Start a new deal</span>
                                                                            </div>
                                                                        </a>
                                                                        <a href="#" class="dropdown-item is-media">
                                                                            <div class="icon">
                                                                                <i class="lnil lnil-calendar"></i>
                                                                            </div>
                                                                            <div class="meta">
                                                                                <span>Schedule</span>
                                                                                <span>Schedule a call</span>
                                                                            </div>
                                                                        </a>
                                                                        <hr class="dropdown-divider">
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
                                                    </div>
                                                <?php
                                                }
                                                ?>



                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <!--Huro Scripts-->
        <!--Load Mapbox-->

        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>

        <!-- Huro js -->
        <script src="assets/js/functions.js"></script>
        <script src="assets/js/main.js" async></script>
        <script src="assets/js/components.js" async></script>
        <script src="assets/js/popover.js" async></script>
        <script src="assets/js/widgets.js" async></script>

        <!-- Additional Features -->
        <script src="assets/js/touch.js" async></script>

        <!-- Landing page js -->

        <!-- Dashboards js -->

        <!-- Charts js -->

        <!--Forms-->

        <!--Wizard-->

        <!-- Layouts js -->

        <script src="assets/js/syntax.js" async></script>
    </div>
</body>


<!-- Mirrored from huro.cssninja.io/webapp-projects-projects-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 11:41:36 GMT -->

</html>