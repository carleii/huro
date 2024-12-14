<?php require_once './ressources/configuration/settings.php' ?>
<!doctype html>
<html lang="en">


<!-- Mirrored from huro.cssninja.io/webapp-dashboards-personal-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 11:41:25 GMT -->

<head>
    <!-- Required meta tags  -->
    <?php require './ressources/view/metadata/metadata.php' ?>

    <title>Huro :: Product Details</title>
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
                    <h1 id="webapp-page-title" class="title is-5">Product Details</h1>
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
        <div id="app-dashboards" class="view-wrapper is-webapp" data-page-title="Product" data-naver-offset="150" data-menu-item="#dashboards-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                   

                   <?php include './inlive.php' ?>
                    
                    <div class="page-content-inner is-webapp">
                        <!--Personal Dashboard V1-->
                        <div class="personal-dashboard personal-dashboard-v1">
                            <!--Header-->
                            <div class="dashboard-header">
                                <div class="h-avatar is-large">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="" />
                                </div>
                                <div class="start">
                                    <h3>Welcome back, Erik Kovalsky</h3>
                                    <p>
                                        We're very happy to see you again on your personal dashboard.
                                    </p>
                                </div>
                                <div class="end">
                                    <button class="button h-button is-dark-outlined">
                                        View Reports
                                    </button>
                                    <button class="button h-button is-primary is-elevated">
                                        Manage Store
                                    </button>
                                </div>
                            </div>

                            <!--Body-->
                            <div class="dashboard-body">
                                <div class="columns is-multiline">
                                    <!--Card-->
                                    <div class="column is-6">
                                        <div class="dashboard-card">
                                            <h4 class="dark-inverted">Your Quick Stats</h4>

                                            <div class="quick-stats">
                                                <div class="quick-stats-inner">
                                                    <!--Stat-->
                                                    <div class="quick-stat">
                                                        <div class="media-flex-center">
                                                            <div class="h-icon is-purple is-rounded">
                                                                <i class="lnil lnil-analytics-alt-1"></i>
                                                            </div>
                                                            <div class="flex-meta">
                                                                <span>2,870</span>
                                                                <span>Sales this month</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Stat-->
                                                    <div class="quick-stat">
                                                        <div class="media-flex-center">
                                                            <div class="h-icon is-orange is-rounded">
                                                                <i class="lnil lnil-handshake"></i>
                                                            </div>
                                                            <div class="flex-meta">
                                                                <span>131</span>
                                                                <span>New users</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Stat-->
                                                    <div class="quick-stat">
                                                        <div class="media-flex-center">
                                                            <div class="h-icon is-green is-rounded">
                                                                <i class="lnil lnil-diamond-alt"></i>
                                                            </div>
                                                            <div class="flex-meta">
                                                                <span>$398,49</span>
                                                                <span>Earned today</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Stat-->
                                                    <div class="quick-stat">
                                                        <div class="media-flex-center">
                                                            <div class="h-icon is-info is-rounded">
                                                                <i class="lnil lnil-bank"></i>
                                                            </div>
                                                            <div class="flex-meta">
                                                                <span>$6542,31</span>
                                                                <span>Total balance</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Card-->
                                    <div class="column is-6">
                                        <div class="dashboard-card">
                                            <div id="customers-chart"></div>
                                        </div>
                                    </div>

                                    <!--Card-->
                                    <div class="column is-4">
                                        <div class="dashboard-card is-upgrade">
                                            <i class="lnil lnil-crown-alt-1"></i>
                                            <div class="cta-content">
                                                <h4>Hey Erik, you're doing great.</h4>
                                                <p class="white-text">
                                                    Start using our team and project management tools
                                                </p>
                                                <a class="link inverted-text">Learn More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Card-->
                                    <div class="column is-4">
                                        <div class="dashboard-card is-gauge">
                                            <div class="people">
                                                <div class="h-avatar">
                                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/21.jpg" alt="" data-user-popover="19" />
                                                </div>
                                                <div class="h-avatar">
                                                    <span
                                                        class="avatar is-fake is-h-purple"
                                                        data-user-popover="35">
                                                        <span>SC</span>
                                                    </span>
                                                </div>
                                                <div class="h-avatar">
                                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/39.jpg" alt="" data-user-popover="33" />
                                                </div>
                                            </div>
                                            <div id="team-gauge"></div>
                                        </div>
                                    </div>

                                    <!--Card-->
                                    <div class="column is-4">
                                        <div class="dashboard-card">
                                            <div id="profit-chart"></div>
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
        <script src="assets/js/personal-1.js" async></script>

        <!-- Charts js -->

        <!--Forms-->

        <!--Wizard-->

        <!-- Layouts js -->

        <script src="assets/js/syntax.js" async></script>
    </div>
</body>


<!-- Mirrored from huro.cssninja.io/webapp-dashboards-personal-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 11:41:29 GMT -->

</html>