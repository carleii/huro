<?php require_once './ressources/configuration/settings.php' ?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Huro :: Welcome</title>
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
                                <span>Wc</span>
                            </span>
                        </div>
                        <span class="status-indicator"></span>
                        <?php require './type.php' ?>                        
                    </div>
                    <h1 id="webapp-page-title" class="title is-5">Bienvenu</h1>
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
        <div id="app-onboarding" class="view-wrapper is-webapp" data-page-title="Welcome" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                    <div class="page-title has-text-centered is-webapp">
                        <div class="title-wrap">
                            <h1 class="title is-4">Welcome</h1>
                        </div>

                        <div class="toolbar ml-auto">
                            <div class="toolbar-link">
                                <label class="dark-mode ml-auto">
                                    <input type="checkbox" checked />
                                    <span></span>
                                </label>
                            </div>

                            <a class="toolbar-link right-panel-trigger" data-panel="languages-panel">
                                <img src="assets/img/icons/flags/united-states-of-america.svg" alt="" />
                            </a>

                            <div class="toolbar-notifications is-hidden-mobile">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="bell"></i>
                                        <span class="new-indicator pulsate"></span>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <div class="heading">
                                                <div class="heading-left">
                                                    <h6 class="heading-title">Notifications</h6>
                                                </div>
                                                <div class="heading-right">
                                                    <a class="notification-link" href="admin-profile-notifications.html">See all</a>
                                                </div>
                                            </div>
                                            <ul class="notification-list">
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info">
                                                                <span class="name">Alice C.</span> left a comment.
                                                            </p>
                                                            <p class="time">1 hour ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info">
                                                                <span class="name">Joshua S.</span> uploaded a file.
                                                            </p>
                                                            <p class="time">2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info">
                                                                <span class="name">Tara S.</span> sent you a message.
                                                            </p>
                                                            <p class="time">2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info">
                                                                <span class="name">Melany W.</span> left a comment.
                                                            </p>
                                                            <p class="time">3 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="toolbar-link right-panel-trigger" data-panel="activity-panel">
                                <i data-feather="grid"></i>
                            </a>
                        </div>
                    </div>

                   <?php include './inlive.php' ?>
                    
                    <div class="page-content-inner">
                        <div class="standard-onboarding">
                            <div class="title-wrap">
                                <p>Quel est votre prochain move.</p>
                                <h2>Welcome to Huro. What would you like to do?</h2>
                            </div>

                            <div class="onboarding-wrap">
                                <div class="onboarding-wrap-inner">
                                    <?php
                                    if ($utilisateur->niveau_acces >= 1) {
                                    ?>
                                        <!--Card-->
                                        <div class="onboarding-card">
                                            <img class="light-image" src="assets/img/illustrations/onboarding/set1-1.svg" alt="" />
                                            <img class="dark-image" src="assets/img/illustrations/onboarding/set1-1-dark.svg" alt="" />
                                            <h3>Ajouter des Produits</h3>
                                            <p>
                                                Mettre à jour le systeme sur les produits et les offres de service
                                                de <?php echo $entreprise->nom ?>
                                            </p>
                                            <div class="button-wrap">
                                                <a class="button h-button is-info is-outlined is-rounded is-raised" href="./produit.php">Configure Shop</a>
                                            </div>
                                        </div>
                                        <!--Card-->
                                        <div class="onboarding-card">
                                            <img class="light-image" src="assets/img/illustrations/onboarding/set1-2.svg" alt="" />
                                            <img class="dark-image" src="assets/img/illustrations/onboarding/set1-2-dark.svg" alt="" />
                                            <h3>Manager le Stock</h3>
                                            <p>
                                                Gérer les approvisionnements de votre magasin et
                                                consulter les stocks
                                                de <?php echo $entreprise->nom ?>
                                            </p>
                                            <div class="button-wrap">
                                                <a href="./produit.php" class="button h-button is-waring is-outlined is-rounded is-raised">Manage Products</a>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($utilisateur->niveau_acces >= 2) {
                                    ?>
                                        <!--Card-->
                                        <div class="onboarding-card">
                                            <img class="light-image" src="assets/img/illustrations/onboarding/set1-3.svg" alt="" />
                                            <img class="dark-image" src="assets/img/illustrations/onboarding/set1-3-dark.svg" alt="" />
                                            <h3>Faire des Ventes</h3>
                                            <p>
                                                Enregistrer des transactions de vente.
                                                Huro vous accompagne toute le long du processus.
                                            </p>
                                            <div class="button-wrap">
                                                <a href="./sells.php" class="button h-button is-success is-outlined is-rounded is-raised">Sells</a>
                                            </div>
                                        </div>

                                    <?php
                                        # code...
                                    }
                                    ?>

                                    <?php

                                    if ($utilisateur->niveau_acces >= 3) {
                                    ?>
                                        <!--Card-->
                                        <div class="onboarding-card">
                                            <img class="light-image" src="assets/img/illustrations/onboarding/set1-3.svg" alt="" />
                                            <img class="dark-image" src="assets/img/illustrations/onboarding/set1-3-dark.svg" alt="" />
                                            <h3>Rapports financiers</h3>
                                            <p>
                                                Analyser vos rapports de vente et les performances
                                                de vos employers. Prenez des descisions.
                                            </p>
                                            <div class="button-wrap">
                                                <a class="button h-button is-primary is-outlined is-rounded is-raised">Financial</a>
                                            </div>
                                        </div>

                                    <?php
                                        # code...
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php

                            if ($utilisateur->niveau_acces >= 3) {
                            ?>
                                <p><a href="" class="button h-button is-danger is-outlined is-rounded is-raised">Où tout simplement suivre les taches</a></p>

                            <?php
                                # code...
                            }
                            ?>
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


</html>