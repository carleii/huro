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

        <div class="mobile-subsidebar">
            <div class="inner">
                <div class="sidebar-title">
                    <h3>Layouts</h3>
                </div>

                <ul class="submenu">
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Lists <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-list-view-1.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>List View V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-view-2.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>List View V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-view-3.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>List View V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-view-4.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>List View V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Flex Lists <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-list-flex-1.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>Flex List V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-flex-2.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>Flex List V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-flex-3.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>Flex List V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Datatable <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-1.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>Datatable V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-2.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>Datatable V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-3.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>Datatable V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-4.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>Datatable V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Placeload <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-placeload-1.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>Placeload V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-placeload-2.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>Placeload V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-placeload-3.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>Placeload V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-placeload-4.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>Placeload V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Card Grid <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-1.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Card Grid V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-2.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Card Grid V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-3.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Card Grid V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-4.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Card Grid V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Tile Grid <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-grid-tiles-1.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>Tile Grid V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-tiles-2.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>Tile Grid V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-tiles-3.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>Tile Grid V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">User Grid <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-1.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>User Grid V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-2.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>User Grid V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-3.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>User Grid V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-4.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>User Grid V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Personal <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-profile-view.html">
                                    <i class="lnil lnil-user-alt"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-profile-edit-1.html">
                                    <i class="lnil lnil-pencil"></i>
                                    <span>Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-profile-notifications.html">
                                    <i class="lnil lnil-notification"></i>
                                    <span>Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-profile-settings.html">
                                    <i class="lnil lnil-cog"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Pages <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="auth-login-1.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>Login v1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-login-2.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>Login v2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-login-3.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>Login v3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-signup-2.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>Signup v1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-signup-3.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>Signup v2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-signup-1.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>Signup Flow</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-search-results.html">
                                    <i class="lnil lnil-search-alt"></i>
                                    <span>Search Results</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-search-empty.html">
                                    <i class="lnil lnil-search-alt"></i>
                                    <span>Empty Search</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Subpages <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-saas-billing.html">
                                    <i class="lnil lnil-credit-card"></i>
                                    <span>SaaS Billing</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-welcome.html">
                                    <i class="lnil lnil-door-alt"></i>
                                    <span>Welcome</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-action-page-1.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>Action Page V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-action-page-2.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>Action Page V2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Projects <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-projects-projects.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Projects V1</span>
                                    <i class="is-auto" data-feather="map-pin"></i>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-projects-projects-2.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Projects V2</span>
                                    <i class="is-auto" data-feather="map-pin"></i>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-projects-projects-3.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Projects V3</span>
                                    <i class="is-auto" data-feather="map-pin"></i>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-projects-project.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Project Details</span>
                                    <i class="is-auto" data-feather="map-pin"></i>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-kanban-board.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Kanban Board</span>
                                    <i class="is-auto" data-feather="map-pin"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Utility <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-utility-account-confirm.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>Confirm Account</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-utility-promotion.html">
                                    <i class="lnil lnil-magnet"></i>
                                    <span>Promotion Page</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-utility-invoice.html">
                                    <i class="lnil lnil-calculator-alt"></i>
                                    <span>Invoice</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-utility-status.html">
                                    <i class="lnil lnil-checkmark-circle"></i>
                                    <span>App Status</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Onboarding <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-1.html">
                                    <i class="lnil lnil-train"></i>
                                    <span>Onboarding V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-2.html">
                                    <i class="lnil lnil-train-alt"></i>
                                    <span>Onboarding V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-3.html">
                                    <i class="lnil lnil-car"></i>
                                    <span>Onboarding V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-4.html">
                                    <i class="lnil lnil-car-alt"></i>
                                    <span>Onboarding V4</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-5.html">
                                    <i class="lnil lnil-train"></i>
                                    <span>Onboarding V5</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Error Pages <i data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="error-page-1.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>Error 404 V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-2.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>Error 404 V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-3.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>Error 404 V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-4.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>Error 404 V4</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-5.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>Error 500 V1</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

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