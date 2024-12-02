<?php require_once './ressources/configuration/settings.php' ?>
<!doctype html>
<html lang="en">



<head>
    <!-- Required meta tags  -->
    <?php require './ressources/view/metadata/metadata.php' ?>

    <title>Huro :: Produits</title>
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
                    <h1 id="webapp-page-title" class="title is-5">Produits</h1>
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
        <div id="app-project" class="view-wrapper is-webapp" data-page-title="Produits" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <h6 onclick="deleteProduit('vzevev')"></h6>
                <div class="page-content is-relative">


                    <div class="list-flex-toolbar">
                        <div class="control has-icon">
                            <input
                                class="input custom-text-filter"
                                placeholder="Search..."
                                data-filter-target=".flex-table-item" />
                            <div class="form-icon">
                                <i data-feather="search"></i>
                            </div>
                        </div>

                        <div class="buttons">
                            <a class="button h-button is-warning is-outlined h-modal-trigger" data-modal="file-product">Utiliser un fichier</a>
                            <button class="button h-button is-primary is-elevated h-modal-trigger" data-modal="uniq-product">
                                <span class="icon">
                                    <i aria-hidden="true" class="fas fa-plus"></i>
                                </span>
                                <span></span>
                            </button>
                        </div>
                    </div>

                    <?php include './inlive.php' ?>

                    <div class="page-content-inner is-webapp">
                        <div class="columns is-multiline tile-grid tile-grid-v2" id="product-list">

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
            <script>
                // supprimer un produit du stock
                function deleteProduit(params) {
                    if (confirm("Voulez vous supprimer ce produit du stock ? cette action est irreversible")) {
                        let xhr = new XMLHttpRequest();
                        xhr.open("GET", "async/php/delete_produit.php?produit="+params, true);
                        xhr.onload = () => {
                            if (xhr.readyState === 4) {
                                if (xhr.status === 200) {
                                    if(xhr.response == 1){
                                        window.open("./produit.php", "_parent");
                                    }else{
                                        notyf.success("Un probleme est survenu.");
                                    }                                    
                                }
                            }
                        }
                        xhr.send();
                    } else {
                        notyf.success("Action abandonnée.");
                    }

                }
            </script>
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