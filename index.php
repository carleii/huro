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

</head>

<body>
    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->

    <div id="huro-app" class="app-wrapper">
        <div class="app-overlay"></div>
        <!--Pageloader-->
        <!-- Pageloader -->
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>
        <?php require './ressources/view/mobleBar/_bar.php' ?>

        <!--Circular menu-->
        <?php require './ressources/view/circularMenu/_circular.php' ?>

        <!--Sidebar-->
        <?php require './ressources/view/sidebar/_sidebar.php' ?>

        <!--Languages panel-->
        <?php require './ressources/view/langage/_lang.php' ?>

        <!--Activity panel-->
        <?php require './ressources/view/activity_right/_activity.php' ?>

        <!--Search panel-->
        <?php require './ressources/view/search_left/_search.php' ?>

        <!--Page body-->

        <div id="layouts-sidebar" class="sidebar-panel is-generic">
            <?php include './ressources/view/typeofB/_typeofB.php' ?>
            <?php require './ressources/view/sidebar/_subSidebarhome.php' ?>
        </div>
        <?php include './ressources/view/sidebar/_subSidebarHomeMobile.php' ?>


        <!-- Content Wrapper -->
        <div id="app-onboarding" class="view-wrapper" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                    <div class="page-title has-text-centered">
                        <!-- Sidebar Trigger -->
                        <div class="huro-hamburger nav-trigger push-resize" data-sidebar="layouts-sidebar">
                            <span class="menu-toggle has-chevron">
                                <span class="icon-box-toggle">
                                    <span class="rotate">
                                        <i class="icon-line-top"></i>
                                        <i class="icon-line-center"></i>
                                        <i class="icon-line-bottom"></i>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="title-wrap">
                            <h1 class="title is-4">Welcome</h1>
                        </div>

                        <?php require './ressources/view/hearder_bar/_header.php' ?>
                    </div>

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
                                                <a class="button h-button is-info is-outlined is-rounded is-raised">Configure Shop</a>
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
                                                <a class="button h-button is-waring is-outlined is-rounded is-raised">Manage Products</a>
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
                                                <a class="button h-button is-success is-outlined is-rounded is-raised">Sells</a>
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