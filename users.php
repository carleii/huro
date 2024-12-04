<?php require_once './ressources/configuration/settings.php' ?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags  -->
    <?php require './ressources/view/metadata/metadata.php' ?>

    <title>Huro :: Employers</title>
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
                                <span>Us</span>
                            </span>
                        </div>
                        <span class="status-indicator"></span>
                        <?php require './type.php' ?>
                    </div>
                    <h1 id="webapp-page-title" class="title is-5">Employers</h1>
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
        <div id="app-projects" class="view-wrapper is-webapp" data-page-title="Employers" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                    <div class="page-title has-text-centered is-webapp">
                        <div class="title-wrap">
                            <h1 class="title is-4">Employers</h1>
                        </div>

                    </div>

                    <?php include './inlive.php' ?>

                    <div class="page-content-inner">
                        <!--Business Dashboard V3-->
                        <div class="business-dashboard hr-dashboard">
                            <div class="columns">
                                <div class="column is-8">
                                    <div class="columns is-multiline">
                                        <!--Header-->
                                        <div class="column is-12">
                                            <div class="block-header">
                                                <!--left-->
                                                <div class="left">
                                                    <div class="current-user">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar is-squared" src="./protocoles/logo/<?php echo $entreprise->logo ?>" data-demo-src="./protocoles/logo/<?php echo $entreprise->logo ?>" alt="" />
                                                        </div>
                                                        <h3>Welcome back <?php echo $utilisateur->nom ?></h3>
                                                    </div>
                                                </div>

                                                <!--Center-->
                                                <div class="center">
                                                    <h4 class="block-heading"><?php echo $entreprise->nom ?></h4>
                                                    <p class="block-text">
                                                        <?php echo $entreprise->adresse ?> - <?php echo $entreprise->telephone_utilisateur ?>
                                                    </p>

                                                </div>

                                                <!--Right-->
                                                <div class="right">
                                                    <h4 class="block-heading">Job Feed</h4>
                                                    <p class="block-text">
                                                        Vous pouvez ajouter vos employers en fonction des niveaux d'accès.

                                                    </p>
                                                    <button class="button h-button is-bold is-fullwidth is-dark-outlined h-modal-trigger" data-modal="type-user">
                                                        En Savoir plus
                                                    </button>
                                                    <button class="button h-button is-bold is-fullwidth is-dark-outlined h-modal-trigger is-success" data-modal="add-user">
                                                        <i data-feather="plus"></i>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <!--Selector-->
                                        <div class="column is-12">
                                            <div class="feed-settings">
                                                <h3 class="dark-inverted">Manage feed settings</h3>
                                                <div class="buttons">
                                                    <button class="button is-dark-outlined">All</button>
                                                    <button class="button is-selected is-dark-outlined">
                                                        Candidates
                                                    </button>
                                                    <button class="button is-dark-outlined">Companies</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Side Text-->
                                        <div class="column is-4">
                                            <div class="side-text">
                                                <h3 class="dark-inverted">Plus d'information</h3>
                                                <p>
                                                    Vous trouverez ici la liste de tous vos employés autorisés on non à se connecter à HURO.
                                                </p>
                                                <a class="action-link">Read More</a>
                                            </div>
                                        </div>

                                        <!--Incoming-->
                                        <div class="column is-7 is-offset-1">
                                            <div class="incoming">
                                                <div class="flex-table">
                                                    <!--Table header-->
                                                    <div class="flex-table-header">
                                                        <span class="is-grow-lg">Numéro</span>
                                                        <span>Type</span>
                                                        <span>Status</span>
                                                        <span class="cell-end">Actions</span>
                                                    </div>
                                                    <?php
                                                    $query = mysqli_query($HURO, "SELECT * FROM utilisateur WHERE id_entreprise = $utilisateur->id_entreprise AND niveau_acces < 4  ");
                                                    while ($result = mysqli_fetch_assoc($query)) {
                                                        echo '
                                                    <!--Table item-->
                                                    <div class="flex-table-item">
                                                        <div class="flex-table-cell is-media is-grow-lg" data-th="">
                                                            <div class="h-icon is-green">
                                                                <i class="lnil lnil-user-alt"></i>
                                                            </div>
                                                            <div>
                                                                <span class="item-name dark-inverted">' . $result['telephone'] . '</span>
                                                                <span class="item-meta">
                                                                    <span>Actif</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-table-cell cell-center" data-th="Count">
                                                            <span class="light-text">' . $result['niveau_acces'] . '</span>
                                                        </div>
                                                        <div class="flex-table-cell" data-th="Status">
                                                            <span class="tag is-success is-rounded">New</span>
                                                        </div>
                                                        <div class="flex-table-cell cell-end" data-th="Actions">
                                                            <a href="users.php?dlkjhgfezertyuiolkjnbfdertyujbvcdszasdvhjuytrezsxcvbnjuytredfghjngtghjkjhgfdefyuioplkjnbvfezetyh=' . $result['telephone'] . '" class="action-link is-pushed-mobile"><i class="lnil lnil-block-user"></i></a>
                                                        </div>
                                                    </div>                                                    

                                                        ';
                                                        # code...
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="column is-4">
                                    <!--Widget-->
                                    <div class="widget search-widget">
                                        <div class="field">
                                            <div class="control">
                                                <input type="text" class="input" placeholder="Search..." />
                                                <button class="search-button">
                                                    <i data-feather="search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hub-card">
                                        <div class="hub-card-body">
                                            <div class="inner-content">
                                                <p class="light-text">
                                                    Consulter les rapports individuels dans le dashboard. <a href="#">Get Started</a> 
                                                </p>
                                            </div>
                                            <img class="light-image" src="assets/img/illustrations/components/tabs.svg" alt="">
                                            <img class="dark-image" src="assets/img/illustrations/components/tabs-dark.svg" alt="">
                                        </div>
                                      
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