<?php require_once './ressources/configuration/settings.php' ?>
<!-- Get the cookie session -->
 <?php 
 if (!isset($_COOKIE['new_stock'])) {    
    header("Location: ./stock.php");
    # code...
 }
 ?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags  -->
    <?php require './ressources/view/metadata/metadata.php' ?>

    <title>Huro :: New Stock</title>
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
                    <h1 id="webapp-page-title" class="title is-5">New Stock</h1>
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
        <div id="app-projects" class="view-wrapper is-webapp" data-page-title="Projects" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                    <div class="page-title has-text-centered is-webapp">
                        <div class="title-wrap">
                            <h1 class="title is-4">New Stock</h1>
                        </div>

                    </div>

                   <?php include './inlive.php' ?>
                    
                    <div class="page-content-inner all-projects">
                        <div class="columns is-info">
                            <div class="column is-danger is-12">
                                <!--Flex Table-->
                                <div class="demo-card has-more-margin is-outlined">
                                    <div class="demo-title">
                                        <h3 class="title is-thin is-5">Nouveau Stock</h3>
                                        <p>
                                        <a class="button h-button is-warning is-outlined h-modal-trigger" data-modal="new-stock"><i aria-hidden="true" class="fas fa-plus"></i></a>
                                        <a href="./stock.php?endnewstock" class="button h-button is-success">Terminer</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="flex-table">
                                    <!--Table header-->
                                    <div class="flex-table-header">
                                        <span>Produit</span>
                                        <span>Stock Courant</span>
                                        <span>Approvisionement</span>
                                        <span>Status</span>
                                        <span>Date</span>
                                        <span class="cell-end">Actions</span>
                                    </div>
                                    <div id="stock-list">

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

        <script src="assets/js/syntax.js" async></script>
    </div>
</body>



</html>