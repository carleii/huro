<?php require_once './ressources/configuration/settings.php' ?>
<!doctype html>
<html lang="en">



<head>
    <!-- Required meta tags  -->
    <?php require './ressources/view/metadata/metadata.php' ?>

    <title>Huro :: Personnal Home</title>
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
                                <span>Pd</span>
                            </span>
                        </div>
                        <span class="status-indicator"></span>
                        <?php require './type.php' ?>
                    </div>
                    <h1 id="webapp-page-title" class="title is-5">Personnal Home</h1>
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
        <div id="app-project" class="view-wrapper is-webapp" data-page-title="Personnal Home" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content-inner">
                    <!--Ecommerce Dashboard V1-->
                    <div class="ecommerce-dashboard ecommerce-dashboard-v1">
                        <!--Header-->
                        <div class="dashboard-header">
                            <div class="h-avatar is-large">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="" />
                            </div>
                            <div class="start">
                                <h3 class="dark-inverted">Welcome back, <?php echo $utilisateur->telephone ?></h3>
                                <p>We're very happy to see you again on your dashboard.</p>
                            </div>
                            <div class="end">
                                <button class="button h-button is-dark-outlined">
                                    Activités
                                </button>
                                <button class="button h-button is-primary is-elevated">
                                    Manage Shop
                                </button>
                            </div>
                        </div>
                        <?php
                        $tst = 0;
                        $tic = 0;
                        $no = 0;
                        $loss = 0;
                        $revenuecemois = 0;
                        $revenuemoisdernier = 0;
                        $query = "SELECT produit.id_produit, vente.qte, vente.prix_vente, vente.status_vente, vente.date_vente FROM produit, vente WHERE vente.date_vente = ? and vente.id_utilisateur = ? and vente.id_produit = produit.id_produit  ";
                        $stmt = $HURO->prepare($query);
                        $today = date('Y-m-d');
                        $stmt->bind_param('ss', $today, $utilisateur->telephone);
                        $stmt->execute();
                        $stmt->store_result();
                        $stmt->bind_result($id_produit, $quantite, $prix_vente, $status, $date);
                        while ($stmt->fetch()) {
                            if ($today == $date) {
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
                        ?>
                        <div class="columns is-multiline">
                            <!--Dashboard tile-->
                            <div class="column is-3">
                                <div class="dashboard-tile">
                                    <div class="tile-head">
                                        <h3>Chiffres Aff. Today</h3>
                                        <div class="h-icon is-info is-rounded">
                                            <i data-feather="gift"></i>
                                        </div>
                                    </div>
                                    <div class="dashboard-tile-inner">
                                        <div class="left">
                                            <span class="dark-inverted"> <?php echo $tst / 1000  ?>K</span>
                                        </div>
                                        <div class="right">
                                            <div id="spark1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Dashboard tile-->
                            <div class="column is-3">
                                <div class="dashboard-tile">
                                    <div class="tile-head">
                                        <h3>Today Revenue</h3>
                                        <div class="h-icon is-purple is-rounded">
                                            <i data-feather="dollar-sign"></i>
                                        </div>
                                    </div>
                                    <div class="dashboard-tile-inner">
                                        <div class="left">
                                            <span class="dark-inverted"><?php echo $tic / 1000  ?>K</span>
                                        </div>
                                        <div class="right">
                                            <div id="spark2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Dashboard tile-->
                            <div class="column is-3">
                                <div class="dashboard-tile">
                                    <div class="tile-head">
                                        <h3>Ventes Faites Today</h3>
                                        <div class="h-icon is-green is-rounded">
                                            <i data-feather="box"></i>
                                        </div>
                                    </div>
                                    <div class="dashboard-tile-inner">
                                        <div class="left">
                                            <span class="dark-inverted"><?php echo $no  ?></span>
                                        </div>
                                        <div class="right">
                                            <div id="spark3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Dashboard tile-->
                            <div class="column is-3">
                                <div class="dashboard-tile">
                                    <div class="tile-head">
                                        <h3>Ventes Annulées</h3>
                                        <div class="h-icon is-orange is-rounded">
                                            <i data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="dashboard-tile-inner">
                                        <div class="left">
                                            <span class="dark-inverted"><?php echo $loss/1000  ?> k</span>
                                        </div>
                                        <div class="right">
                                            <div id="spark4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Line Stats Widget-->
                            <div class="column is-6">
                                <div class="stat-widget line-stats-widget is-straight">
                                    <div class="widget-head">
                                        <h3 class="dark-inverted">Revenue Personnel Annuel - <?php echo date("Y") ?></h3>
                                        <!--Dropdown-->
                                        <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                            <div class="is-trigger" aria-haspopup="true">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-reload"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Reload</span>
                                                            <span>Reload chart</span>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-users-alt"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Customers</span>
                                                            <span>View customer reports</span>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-gift-alt-1"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Products</span>
                                                            <span>View product reports</span>
                                                        </div>
                                                    </a>
                                                    <hr class="dropdown-divider" />
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-bank"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Finance</span>
                                                            <span>View financial reports</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $revenuecemois = 0;
                                    $revenuemoisdernier = 0;
                                    $query = "SELECT produit.id_produit, vente.qte, vente.prix_vente, vente.status_vente, vente.date_vente FROM produit, vente WHERE vente.id_utilisateur = ? and vente.id_produit = produit.id_produit  ";
                                    $stmt = $HURO->prepare($query);
                                    $mois = date('m');
                                    $stmt->bind_param('s', $utilisateur->telephone);
                                    $stmt->execute();
                                    $stmt->store_result();
                                    $stmt->bind_result($id_produit, $quantite, $prix_vente, $status, $date);
                                    while ($stmt->fetch()) {                                                                                
                                        if (IsthisMonth($date, 'Y-m-d') == 0) {
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
                                            if ($status == "complete") {
                                                $revenuecemois += $go * $quantite;
                                                # code...
                                            }
                                            # code...
                                        }elseif(IsthisMonth($date, 'Y-m-d') == 1) {
                                            if ($status == "complete") {
                                                $revenuemoisdernier += $go * $quantite;
                                                # code...
                                            }
                                            # code...
                                        }

                                        # code...
                                    }
                                    ?>
                                    <div class="line-stats">
                                        <div class="line-stat">
                                            <span>Ce mois - <?php echo date("F") ?></span>
                                            <span class="current"><?php echo $revenuecemois/1000 ?> k</span>
                                        </div>
                                        <div class="line-stat">
                                            <span>Mois dernier</span>
                                            <span class="dark-inverted"><?php echo $revenuemoisdernier/1000 ?> k</span>
                                        </div>
                                    </div>
                                    <div id="line-stats-widget-chart"></div>
                                </div>
                            </div>

                            <!--Line Stats Widget-->
                            <div class="column is-6">
                                <div class="stat-widget area-stats-widget is-straight">
                                    <div class="widget-head">
                                        <h3 class="dark-inverted">Votre Chiffre d'Affaires - Revenue - Abandon: <?php echo date("Y") ?></h3>
                                        <!--Dropdown-->
                                        <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                            <div class="is-trigger" aria-haspopup="true">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-reload"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Reload</span>
                                                            <span>Reload chart</span>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-users-alt"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Customers</span>
                                                            <span>View customer reports</span>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-gift-alt-1"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Products</span>
                                                            <span>View product reports</span>
                                                        </div>
                                                    </a>
                                                    <hr class="dropdown-divider" />
                                                    <a href="#" class="dropdown-item is-media">
                                                        <div class="icon">
                                                            <i class="lnil lnil-bank"></i>
                                                        </div>
                                                        <div class="meta">
                                                            <span>Finance</span>
                                                            <span>View financial reports</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="area-stats">
                                        <div class="area-stat">
                                            <span>New Customers</span>
                                            <span class="current">249</span>
                                        </div>
                                        <div class="area-stat">
                                            <span>Returning</span>
                                            <span class="dark-inverted">684</span>
                                        </div>
                                    </div> -->
                                    <div id="area-stats-widget-chart"></div>
                                </div>
                            </div>

                            <!--Flex Stat Widget-->
                            <div class="column is-6">
                                <div class="stat-widget flex-stat-widget is-straight">
                                    <div class="chart-media">
                                        <div class="meta">
                                            <h4 class="dark-inverted">Product Returns</h4>
                                            <span class="is-dark-primary">Avg. 642</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Bonum integritas corporis: misera debilitas. Ita ne hoc
                                                quidem modo paria.
                                            </p>
                                        </div>
                                        <div class="chart-container">
                                            <div id="flex-stat-circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Flex Stat Widget-->
                            <div class="column is-6">
                                <div class="stat-widget flex-stat-widget is-straight has-fullheight">
                                    <div class="chart-media">
                                        <div class="meta">
                                            <h4 class="dark-inverted">Customer Engagement</h4>
                                            <span class="is-dark-primary">+34.2%</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Bonum integritas corporis: misera debilitas. Ita ne hoc
                                                quidem modo paria.
                                            </p>
                                        </div>
                                        <div class="chart-container">
                                            <div id="flex-stat-radial"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Grouped Stat Widget-->
                            <div class="column is-6">
                                <div class="stat-widget grouped-stat-widget is-straight">
                                    <div class="widget-head">
                                        <h3 class="dark-inverted">Shipping Stats</h3>
                                    </div>
                                    <div class="chart-group">
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container">
                                                    <div id="widget-group-radial-1"></div>
                                                </div>
                                                <span class="dark-inverted">36.8K</span>
                                                <p>Free Shipping</p>
                                            </div>
                                        </div>
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container">
                                                    <div id="widget-group-radial-2"></div>
                                                </div>
                                                <span class="dark-inverted">292.3K</span>
                                                <p>Ground Shipping</p>
                                            </div>
                                        </div>
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container">
                                                    <div id="widget-group-radial-3"></div>
                                                </div>
                                                <span class="dark-inverted">108.2K</span>
                                                <p>Next Day Air</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Grouped Stat Widget-->
                            <div class="column is-6">
                                <div class="stat-widget grouped-stat-widget is-straight">
                                    <div class="widget-head">
                                        <h3 class="dark-inverted">Customer Support</h3>
                                    </div>
                                    <div class="chart-group">
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container is-gauge">
                                                    <div id="widget-group-radial-4"></div>
                                                </div>
                                                <span class="dark-inverted">641</span>
                                                <p>Active Tickets</p>
                                            </div>
                                        </div>
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container is-gauge">
                                                    <div id="widget-group-radial-5"></div>
                                                </div>
                                                <span class="dark-inverted">84</span>
                                                <p>Escalated</p>
                                            </div>
                                        </div>
                                        <div class="group">
                                            <div class="group-content">
                                                <div class="chart-container is-gauge">
                                                    <div id="widget-group-radial-6"></div>
                                                </div>
                                                <span class="dark-inverted">1,749</span>
                                                <p>Closed Tickets</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Table-->
                            <div class="column is-12">
                                <!--Header-->
                                <div class="table-header">
                                    <h3 class="dark-inverted">Recent Orders</h3>
                                    <div class="field">
                                        <div class="control">
                                            <div class="h-select">
                                                <div class="select-box">
                                                    <span>Last 30 days</span>
                                                </div>
                                                <div class="select-icon">
                                                    <i data-feather="chevron-down"></i>
                                                </div>
                                                <div class="select-drop has-slimscroll-sm">
                                                    <div class="drop-inner">
                                                        <div class="option-row">
                                                            <input type="radio" name="instagram_period_select" />
                                                            <div class="option-meta">
                                                                <span>Last Week</span>
                                                            </div>
                                                        </div>
                                                        <div class="option-row">
                                                            <input type="radio" name="instagram_period_select" />
                                                            <div class="option-meta">
                                                                <span>Last 30 days</span>
                                                            </div>
                                                        </div>
                                                        <div class="option-row">
                                                            <input type="radio" name="instagram_period_select" />
                                                            <div class="option-meta">
                                                                <span>Last 60 days</span>
                                                            </div>
                                                        </div>
                                                        <div class="option-row">
                                                            <input type="radio" name="instagram_period_select" />
                                                            <div class="option-meta">
                                                                <span>Last 90 days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-table">
                                    <!--Table header-->
                                    <div class="flex-table-header">
                                        <span class="is-grow">Customer</span>
                                        <span>Date</span>
                                        <span>Amount</span>
                                        <span>Status</span>
                                        <span>Tracking</span>
                                        <span class="cell-end">Actions</span>
                                    </div>

                                    <!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-media is-grow" data-th="">
                                            <div class="h-avatar is-medium">
                                                <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="" />
                                            </div>
                                            <div>
                                                <span
                                                    class="item-name dark-inverted is-font-alt is-weight-600">Erik K.</span>
                                                <span class="item-meta">
                                                    <span>#158456</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-table-cell" data-th="Date">
                                            <span class="light-text">Oct 31, 2020</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Amount">
                                            <span class="dark-inverted is-weight-500">$863.42</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Status">
                                            <span class="tag is-green is-rounded">Paid</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Tracking">
                                            <a class="action-link is-pushed-mobile">TR-7295</a>
                                        </div>
                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                            <button class="button h-button is-dark-outlined is-pushed-mobile">
                                                View Order
                                            </button>
                                        </div>
                                    </div>

                                    <!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-media is-grow" data-th="">
                                            <div class="h-avatar is-medium">
                                                <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/22.jpg" alt="" />
                                            </div>
                                            <div>
                                                <span
                                                    class="item-name dark-inverted is-font-alt is-weight-600">Jimmy H.</span>
                                                <span class="item-meta">
                                                    <span>#15893</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-table-cell" data-th="Date">
                                            <span class="light-text">Oct 31, 2020</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Amount">
                                            <span class="dark-inverted is-weight-500">$128.00</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Status">
                                            <span class="tag is-green is-rounded">Paid</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Tracking">
                                            <a class="action-link is-pushed-mobile">TR-6259</a>
                                        </div>
                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                            <button class="button h-button is-dark-outlined is-pushed-mobile">
                                                View Orderwe
                                            </button>
                                        </div>
                                    </div>

                                    <!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-media is-grow" data-th="">
                                            <div class="h-avatar is-medium">
                                                <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="" />
                                            </div>
                                            <div>
                                                <span
                                                    class="item-name dark-inverted is-font-alt is-weight-600">Melany W.</span>
                                                <span class="item-meta">
                                                    <span>#155848</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-table-cell" data-th="Date">
                                            <span class="light-text">Oct 31, 2020</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Amount">
                                            <span class="dark-inverted is-weight-500">$236.79</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Status">
                                            <span class="tag is-orange is-rounded">Pending</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Tracking">
                                            <span class="light-text is-pushed-mobile">N/A</span>
                                        </div>
                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                            <button class="button h-button is-dark-outlined is-pushed-mobile">
                                                View Order
                                            </button>
                                        </div>
                                    </div>

                                    <!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-media is-grow" data-th="">
                                            <div class="h-avatar is-medium">
                                                <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="" />
                                            </div>
                                            <div>
                                                <span
                                                    class="item-name dark-inverted is-font-alt is-weight-600">Joshua S.</span>
                                                <span class="item-meta">
                                                    <span>#154736</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-table-cell" data-th="Date">
                                            <span class="light-text">Oct 30, 2020</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Amount">
                                            <span class="dark-inverted is-weight-500">$98.31</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Status">
                                            <span class="tag is-green is-rounded">Paid</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Tracking">
                                            <a class="action-link is-pushed-mobile">TR-48951</a>
                                        </div>
                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                            <button class="button h-button is-dark-outlined is-pushed-mobile">
                                                View Order
                                            </button>
                                        </div>
                                    </div>

                                    <!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-media is-grow" data-th="">
                                            <div class="h-avatar is-medium">
                                                <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="" />
                                            </div>
                                            <div>
                                                <span
                                                    class="item-name dark-inverted is-font-alt is-weight-600">Tina C.</span>
                                                <span class="item-meta">
                                                    <span>#158315</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-table-cell" data-th="Date">
                                            <span class="light-text">Oct 30, 2020</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Amount">
                                            <span class="dark-inverted is-weight-500">$112.00</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Status">
                                            <span class="tag is-green is-rounded">Paid</span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Tracking">
                                            <a class="action-link is-pushed-mobile">TR-48555</a>
                                        </div>
                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                            <button class="button h-button is-dark-outlined is-pushed-mobile">
                                                View Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require './ressources/modal/_modal.php' ?>


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
            <!-- Async -->
            <script src="./async/js/async.js"></script>

            <!-- Landing page js -->

            <!-- Dashboards js -->

            <!-- Charts js -->

            <!--Forms-->

            <!--Wizard-->

            <!-- Layouts js -->

            <script src="assets/js/datatables.js" async></script>

            <script src="assets/js/syntax.js" async></script>
        </div>
</body>


<!-- Mirrored from huro.cssninja.io/webapp-list-datatable-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 11:41:33 GMT -->

</html>