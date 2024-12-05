<?php require_once './ressources/configuration/settings.php' ?>
<!-- Get the cookie session -->
<?php
if (!isset($_COOKIE['new_sell'])) {
    header("Location: ./");
    exit();
    # code...
}
?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags  -->
    <?php require './ressources/view/metadata/metadata.php' ?>

    <title>Huro :: Vente</title>
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
                    <h1 id="webapp-page-title" class="title is-5">Vente</h1>
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
        <div id="app-projects" class="view-wrapper is-webapp" data-page-title="Vente" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                    <div class="page-title has-text-centered is-webapp">
                        <div class="title-wrap">
                            <h1 class="title is-4">Vente</h1>
                        </div>

                    </div>

                    <?php include './inlive.php' ?>

                    <div class="page-content-inner">
                        <!--Invoice-->
                        <div class="invoice-wrapper">
                            <div class="invoice-header">
                                <div class="left">
                                    <h3>Facture <?php echo $_COOKIE['new_sell'] ?></h3>
                                    <div class="buttons">
                                    <form action="" method="post">
                                        <button type="button" class="button h-button is-success is-outlined h-modal-trigger" data-modal="uniq-sell">
                                            <span class="icon">
                                                <i aria-hidden="true" class="fas fa-plus"></i>
                                            </span>
                                            <span></span>
                                        </button>
                                    </form>
                                </div>
                                </div>
                                <div class="right">
                                    <div class="controls">
                                        <a class="action">
                                            <i data-feather="printer"></i>
                                        </a>
                                        <a class="action">
                                            <i data-feather="download-cloud"></i>
                                        </a>
                                        <a class="action">
                                            <i data-feather="mail"></i>
                                        </a>
                                        <a class="action">
                                            <i data-feather="arrow-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-body">
                                <div class="invoice-card">
                                    <div class="invoice-section is-flex is-bordered">
                                        <div class="h-avatar is-large">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="./protocoles/logo/<?php echo $entreprise->logo ?>" alt="" data-user-popover="6" />
                                        </div>
                                        <div class="meta">
                                            <h3><?php echo $entreprise->nom ?></h3>
                                            <span><?php echo $entreprise->adresse ?></span>
                                            <span><?php echo $utilisateur->telephone ?></span>
                                        </div>
                                        <div class="end">
                                            <h3>Invoice <?php echo $_COOKIE['new_sell'] ?></h3>
                                            <span>Issued: <?php echo date(DATE_RSS) ?></span>
                                            <span>Payment Due: <?php echo date(DATE_RSS) ?></span>
                                        </div>
                                    </div>
                                    <div class="invoice-section is-flex is-bordered">
                                        <div class="h-avatar is-customer is-large">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/photo/demo/brands/airbnb.svg" alt="" />
                                        </div>
                                        <div class="meta">
                                            
                                                <div class="field">
                                                    <div class="control">
                                                    <input class="input" type="text" placeholder="telephone client" name="ct">
                                                    </div>
                                                </div>
                                            <div class="field">
                                                    <div class="control">
                                                    <input class="input" type="text" placeholder="adresse client" name="ad">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="end is-left">
                                            <h3>Description</h3>
                                            <p>
                                            <div class="field">
                                                <div class="control">
                                                    <textarea name="des" class="textarea is-primary-focus" rows="2" cols="35" placeholder="Commenter la vente...."></textarea>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="invoice-section">
                                        <div class="flex-table">
                                            <!--Table header-->
                                            <div class="flex-table-header">
                                                <span class="is-grow">Produit</span>
                                                <span class="cell-end">Quantité</span>
                                                <span>Quantity</span>
                                                <span>P.Unit.</span>
                                                <span>Soustotal</span>
                                            </div>

                                            <!--Table item-->
                                            <div class="flex-table-item">
                                                <div class="flex-table-cell is-grow" data-th="">
                                                    <span class="dark-text">Website Redesign</span>
                                                </div>
                                                <div class="flex-table-cell cell-end" data-th="Unit">
                                                    <span class="light-text"></span>
                                                </div>
                                                <div class="flex-table-cell" data-th="Quantity">
                                                    <span class="light-text">54</span>
                                                </div>
                                                <div class="flex-table-cell" data-th="Rate">
                                                    <span class="dark-inverted">$24</span>
                                                </div>
                                                <div class="flex-table-cell has-text-right" data-th="Subtotal">
                                                    <span class="dark-inverted">$1,296</span>
                                                </div>
                                            </div>

                                         
                                        </div>

                                        <div class="flex-table sub-table">
                                            <!--Table item-->
                                            <div class="flex-table-item">
                                                <div class="flex-table-cell is-grow is-vhidden" data-th="">
                                                    <span class="dark-text"></span>
                                                </div>
                                                <div class="flex-table-cell cell-end is-vhidden" data-th="Unit">
                                                    <span class="light-text"></span>
                                                </div>
                                                <div class="flex-table-cell is-vhidden" data-th="Quantity">
                                                    <span class="light-text"></span>
                                                </div>
                                                <div class="flex-table-cell" data-th="">
                                                    <span class="table-label">Subtotal</span>
                                                </div>
                                                <div class="flex-table-cell has-text-right" data-th="">
                                                    <span class="table-total dark-inverted">$1,808</span>
                                                </div>
                                            </div>
                                            <!--Table item-->
                                            <div class="flex-table-item">
                                                <div class="flex-table-cell is-grow is-vhidden" data-th="">
                                                    <span class="dark-text"></span>
                                                </div>
                                                <div class="flex-table-cell cell-end is-vhidden" data-th="Unit">
                                                    <span class="light-text"></span>
                                                </div>
                                                <div class="flex-table-cell is-vhidden" data-th="Quantity">
                                                    <span class="light-text"></span>
                                                </div>
                                                <div class="flex-table-cell" data-th="">
                                                    <span class="table-label">Taxes</span>
                                                </div>
                                                <div class="flex-table-cell has-text-right" data-th="">
                                                    <span class="table-total dark-inverted">$273</span>
                                                </div>
                                            </div>
                                            <!--Table item-->
                                            <div class="flex-table-item">
                                                <div class="flex-table-cell is-grow is-vhidden" data-th="">
                                                    <span class="dark-text"></span>
                                                </div>
                                                <div class="flex-table-cell cell-end is-vhidden" data-th="Unit">
                                                    <span class="light-text"></span>
                                                </div>
                                                <div class="flex-table-cell is-vhidden" data-th="Quantity">
                                                    <span class="light-text"></span>
                                                </div>
                                                <div class="flex-table-cell" data-th="">
                                                    <span class="table-label">Total</span>
                                                </div>
                                                <div class="flex-table-cell has-text-right" data-th="">
                                                    <span class="table-total is-bigger dark-inverted">$2,081</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><hr><br>
                            <button class="button h-button is-success is-elevated">
                                                <span class="icon">
                            <i aria-hidden="true" class="fas fa-check"></i>
                          </span>
                                                <span>Approve</span>
                                            </button>
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


<!-- Mirrored from huro.cssninja.io/webapp-projects-projects-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 11:41:36 GMT -->

</html>