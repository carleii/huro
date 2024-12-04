<?php require_once './ressources/configuration/settings.php' ?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags  -->
    <?php require './ressources/view/metadata/metadata.php' ?>

    <title>Huro :: Security</title>
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
                    <h1 id="webapp-page-title" class="title is-5">Security</h1>
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
        <div id="app-projects" class="view-wrapper is-webapp" data-page-title="Security" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                    <!--Action Page-->
                    <div class="action-page-wrapper action-page-v2">
                        <div class="wrapper-outer">
                            <div class="wrapper-inner">
                                <div class="action-box">
                                    <div class="box-content">
                                        <div class="h-avatar is-big">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="./protocoles/logo/<?php echo $entreprise->logo ?>" alt="" data-user-popover="16" />
                                            <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/photo/demo/apps/9.png" alt="" />
                                        </div>
                                        <h3 class="dark-inverted">
                                           <?php echo $utilisateur->nom ?>
                                            <span class="is-dark-primary"><?php echo $entreprise->nom ?></span>
                                            project.
                                        </h3>
                                        <div class="sender-message is-dark-card-bordered is-dark-bg-4">
                                            <h4 class="dark-inverted">Message from Security</h4>
                                            <p>
                                               Ce message apparaitra une seule fois. Veuillez remettre le numero de téléphone et le mot de passe
                                               à qui de droit. Vous ne pourrez plus voir les mots de passes après cette opération.
                                               En cas de perte ou d'oublie, vous devez supprimer le compte et le ré-enregistrer.
                                            </p>
                                        </div>
                                        <div class="people-wrap">                                            
                                            <div class="people-text">
                                                <p><?php echo count($ev) ?> Employers ont été ajoutés.</p>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <a href="./" class="button h-button is-dark-outlined">
                                                Decline
                                            </a>
                                            <a href="./users.php?ihghajfkloiuvyabhanqdoivbuzvjfkbvj" class="button h-button is-primary is-raised">
                                                Accept
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="side-wrapper">
                                <div class="side-inner">
                                    <div class="side-title">
                                        <h3 class="dark-inverted">Additional Infos</h3>
                                        <p>Liste des employers ajoutés</p>
                                    </div>

                                    <div class="action-list">
                                        <?php 
                                        for ($i=0; $i < count($ev) ; $i++) { 
                                            echo '
                                              <div class="media-flex">
                                            <div class="icon-wrap is-dark-primary is-dark-bg-3 is-dark-card-bordered">
                                                <i data-feather="check"></i>
                                            </div>
                                            <div class="flex-meta">
                                                <span>Téléphone: '.$ev[$i][0].'</span>
                                                <p>
                                                    Mot de Passe: '.$ev[$i][1].'
                                                </p>
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