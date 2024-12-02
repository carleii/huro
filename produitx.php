<?php require_once './ressources/configuration/settings.php' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags  -->
    <?php require './ressources/view/metadata/metadata.php' ?>


    <title>Huro :: Datatables</title>
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

        <div id="produits-sidebar" class="sidebar-panel is-generic">
            <?php include './ressources/view/typeofB/_typeofB.php' ?>
            <?php require './ressources/view/sidebar/_subSidebarhome.php' ?>
        </div>
        <?php include './ressources/view/sidebar/_subSidebarHomeMobile.php' ?>


        <!-- Content Wrapper -->
        <div id="app-projects" class="view-wrapper" data-naver-offset="214" data-menu-item="#produits-sidebar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                    <div class="page-title has-text-centered">
                        <!-- Sidebar Trigger -->
                        <?php require './ressources/view/amburger/_amber.php' ?>

                        <div class="title-wrap">
                            <h1 class="title is-4">Products</h1>
                        </div>

                        <?php require './ressources/view/hearder_bar/_header.php' ?>
                    </div>

                    <div class="datatable-toolbar">
                        <div class="field has-addons is-disabled">
                            <p class="control">
                                <button class="button h-button">
                                    <span class="icon is-small">
                                        <i aria-hidden="true" class="fas fa-check"></i>
                                    </span>
                                    <span>Promote</span>
                                </button>
                            </p>
                            <p class="control">
                                <button class="button h-button">
                                    <span class="icon is-small">
                                        <i aria-hidden="true" class="fas fa-times"></i>
                                    </span>
                                    <span>Delete</span>
                                </button>
                            </p>
                            <p class="control">
                                <button class="button h-button">
                                    <span class="icon is-small">
                                        <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                    </span>
                                    <span>Transfer</span>
                                </button>
                            </p>
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
                    
                    <div class="page-content-inner">
                        <!-- Datatable -->
                        <div class="table-wrapper" data-simplebar>
                            <table id="users-datatable" class="table is-datatable is-hoverable table-is-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="control">
                                                <label class="checkbox is-primary is-outlined is-circle">
                                                    <input type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </div>
                                        </th>
                                        <th>Picture</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                        <div id="paging-first-datatable" class="pagination datatable-pagination">
                            <div class="datatable-info">
                                <span></span>
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

        <!-- produits js -->

        <script src="assets/js/datatables.js" async></script>

        <script src="assets/js/syntax.js" async></script>
    </div>
</body>


</html>