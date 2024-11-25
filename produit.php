<?php require_once './ressources/configuration/settings.php' ?>
<!DOCTYPE html>
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
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700"
        rel="stylesheet" />
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

        <!--Mobile navbar-->
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
        <div
            id="app-projects"
            class="view-wrapper"
            data-naver-offset="214"
            data-menu-item="#layouts-sidebar-menu"
            data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                    <div class="page-title has-text-centered">
                        <!-- Sidebar Trigger -->
                        <div
                            class="huro-hamburger nav-trigger push-resize"
                            data-sidebar="layouts-sidebar">
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
                            <h1 class="title is-4">List View</h1>
                        </div>

                        <?php require './ressources/view/hearder_bar/_header.php' ?>
                    </div>

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

                    <div class="page-content-inner">
                        <div class="flex-list-wrapper flex-list-v1">
                            <!--List Empty Search Placeholder -->
                            <div
                                class="page-placeholder custom-text-filter-placeholder is-hidden">
                                <div class="placeholder-content">
                                    <img
                                        class="light-image"
                                        src="assets/img/illustrations/placeholders/search-4.svg"
                                        alt="" />
                                    <img
                                        class="dark-image"
                                        src="assets/img/illustrations/placeholders/search-4-dark.svg"
                                        alt="" />
                                    <h3>We couldn't find any matching results.</h3>
                                    <p class="is-larger">
                                        Too bad. Looks like we couldn't find any matching results
                                        for the search terms you've entered. Please try different
                                        search terms or criteria.
                                    </p>
                                </div>
                            </div>

                            <div class="flex-table">
                                <!--Table header-->
                                <div class="flex-table-header" data-filter-hide>
                                    <span class="is-grow">User</span>
                                    <span>En Stock</span>
                                    <span>Prix Vente</span>
                                    <span class="cell-end">Actions</span>
                                </div>

                                <div class="flex-list-inner" id="product-list">
                                                                                                      
                                </div>
                            </div>

                            <!--Table Pagination-->
                            <nav
                                class="flex-pagination pagination is-rounded"
                                aria-label="pagination"
                                data-filter-hide>
                                <a class="pagination-previous has-chevron"><i data-feather="chevron-left"></i></a>
                                <a class="pagination-next has-chevron"><i data-feather="chevron-right"></i></a>
                                <ul class="pagination-list">
                                    <li>
                                        <a class="pagination-link" aria-label="Goto page 1">1</a>
                                    </li>
                                    <li><span class="pagination-ellipsis">…</span></li>
                                    <li>
                                        <a class="pagination-link" aria-label="Goto page 45">45</a>
                                    </li>
                                    <li>
                                        <a
                                            class="pagination-link is-current"
                                            aria-label="Page 46"
                                            aria-current="page">46</a>
                                    </li>
                                    <li>
                                        <a class="pagination-link" aria-label="Goto page 47">47</a>
                                    </li>
                                    <li><span class="pagination-ellipsis">…</span></li>
                                    <li>
                                        <a class="pagination-link" aria-label="Goto page 86">86</a>
                                    </li>
                                </ul>
                            </nav>
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

        <script src="assets/js/flex-list.js" async></script>

        <script src="assets/js/syntax.js" async></script>
    </div>
</body>

</html>