<?php require_once './ressources/configuration/settings.php' ?>
<!doctype html>
<html lang="en">



<head>
    <!--  meta tags  -->
    <?php require_once './ressources/view/metadata/metadata.php' ?>

    <title>Huro :: Register</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />



    <!--Core CSS -->
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" />
</head>

<body>
    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->

    <div id="huro-app" class="app-wrapper">
        <!--Full pageloader-->
        <!-- Pageloader -->
        <div class="pageloader is-full"></div>
        <div class="infraloader is-full is-active"></div>

        <div class="minimal-wrapper darker">
            <!--Page body-->

            <!--Wizard Navbar-->
            <nav class="wizard-navigation">
                <a href="index.html" class="wizard-brand">
                    <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="" />
                    <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="" />
                </a>

                <div class="navbar-item is-wizard-title">
                    <span class="title-wrap">Step 1: <span>Project Type</span></span>
                </div>

                <div class="dropdown wizard-dropdown dropdown-trigger">
                    <div class="is-trigger">
                        <i data-feather="chevron-down"></i>
                    </div>
                    <div id="wizard-navigation-dropdown" class="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                            <a href="javascript:void(0);" class="dropdown-item kill-drop" data-dropdown-step="0">
                                Step 1: Project Type
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item kill-drop is-disabled" data-dropdown-step="1">
                                Step 2: Project Info
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item kill-drop is-disabled" data-dropdown-step="2">
                                Step 3: Project Details
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item kill-drop is-disabled" data-dropdown-step="3">
                                Step 4: Project Files
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item kill-drop is-disabled" data-dropdown-step="4">
                                Step 5: Team Members
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item kill-drop is-disabled" data-dropdown-step="5">
                                Step 6: Project Tools
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item kill-drop is-disabled" data-dropdown-step="6">
                                Step 7: Preview
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-item is-dark-mode">
                    <div class="navbar-icon">
                        <label class="dark-mode">
                            <input type="checkbox" checked />
                            <span></span>
                        </label>
                    </div>
                </div>
            </nav>

            <!--Wizard Progress Bar-->
            <progress id="wizard-progress" class="progress is-smaller is-primary wizard-progress" value="10" max="100"></progress>

            <!--Main Wrapper-->
            <form action="" enctype="multipart/form-data" method="post" class="aut-register">
                <div class="wizard-v1-wrapper">
                    <div
                        id="wizard-step-0"
                        class="inner-wrapper is-active"
                        data-step-title="Project Business">
                        <div class="step-content">
                            <div class="step-title">
                                <h2 class="dark-inverted">Quelle type D'entreprise êtes vous.</h2>
                            </div>

                            <div class="wizard-types">
                                <div class="columns">
                                    <div class="column is-4">
                                        <div class="wizard-card">
                                            <img src="assets/img/illustrations/wizard/type-1.svg"
                                                alt />
                                            <h3 class="dark-inverted">FastFood Business</h3>
                                            <p>Entreprise de restauration et service de
                                                commande.</p>
                                            <div class="button-wrap">
                                                <a
                                                    href="#"
                                                    class="button h-button is-primary is-rounded is-elevated is-bold type-select-button">Continue</a>
                                            </div>
                                            <div class="learn-more-link">
                                                <a href="#" class="dark-inverted-hover">En savoir
                                                    plus</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-4">
                                        <div class="wizard-card">
                                            <img src="assets/img/illustrations/wizard/type-2.svg"
                                                alt />
                                            <h3 class="dark-inverted">Informatique/ Uilitaire/
                                                Services</h3>
                                            <p>Entreprise informatique ou de Services à la
                                                demande</p>
                                            <div class="button-wrap">
                                                <a
                                                    href="#"
                                                    class="button h-button is-primary is-rounded is-elevated is-bold type-select-button">Continue</a>
                                            </div>
                                            <div class="learn-more-link">
                                                <a href="#" class="dark-inverted-hover">En savoir
                                                    plus</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-4">
                                        <div class="wizard-card">
                                            <img src="assets/img/illustrations/wizard/type-3.svg"
                                                alt />
                                            <h3 class="dark-inverted">Marketing/ Commerce/
                                                Vente</h3>
                                            <p>Entreprise d'offre de service ou de produits</p>
                                            <div class="button-wrap">
                                                <a
                                                    href="#"
                                                    class="button h-button is-primary is-rounded is-elevated is-bold type-select-button">Continue</a>
                                            </div>
                                            <div class="learn-more-link">
                                                <a href="#" class="dark-inverted-hover">En savoir
                                                    plus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="wizard-step-1" class="inner-wrapper" data-step-title="Preview">
                        <!--src/partials/pages/wizard/wizard-v1/-->
                        <div class="step-content">

                            <div class="page-placeholder end-placeholder">
                                <div class="placeholder-content">
                                    <img
                                        class="light-image"
                                        src="assets/img/illustrations/wizard/finish.svg"
                                        alt />
                                    <img
                                        class="dark-image"
                                        src="assets/img/illustrations/wizard/finish-dark.svg"
                                        alt />
                                    <h3>Vérifiez tous les champs avant de soumettre.</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="wizard-step-2" class="inner-wrapper" data-step-title="Project Details">
                        <!--src/partials/pages/wizard/wizard-v1/-->
                        <div class="step-content">
                            <div class="step-title">
                                <h2 class="dark-inverted">Un peu Plus d'Information</h2>
                                <p>A propos du Business</p>
                            </div>

                            <div class="project-customer">
                                <h4>Quel est son Nom</h4>

                                <div class="field is-autocomplete">
                                    <div class="control has-icon">
                                        <input
                                            id="customers-search"
                                            name="business-name"
                                            
                                            class="input"
                                            placeholder="... " />
                                        <div class="form-icon">
                                            <i data-feather="search"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-flex-center is-hidden">
                                    <div class="h-avatar is-medium">
                                        <img
                                            id="customer-logo"
                                            class="avatar"
                                            src="https://via.placeholder.com/150x150"
                                            data-demo-src="assets/img/photo/demo/brands/airbnb.svg"
                                            alt />
                                    </div>
                                    <div class="flex-meta">
                                        <span id="customer-name">Airbnb</span>
                                        <span id="customer-location">Los Angeles, CA</span>
                                    </div>
                                    <div class="flex-end">
                                        <button id="remove-customer" class="button is-circle">
                                            <span class="icon is-small">
                                                <i data-feather="x"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="project-dates">
                                <h4>Adresse | Date de Creation</h4>
                                <div class="project-dates-inner">
                                    <div class="project-date">
                                        <div class="date-icon">
                                            <i data-feather="map-pin"></i>
                                        </div>
                                        <div class="control">
                                            <input
                                                class="input"
                                                name="business-adress"
                                                
                                                placeholder="Location" />
                                        </div>
                                    </div>
                                    <div class="separator"></div>
                                    <div class="project-date">
                                        <div class="date-icon">
                                            <i data-feather="flag"></i>
                                        </div>
                                        <div class="control">
                                            <input
                                                id="project-end-date"
                                                class="input form-datepicker"
                                                placeholder="Start Date" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-budget">
                                <h4>Chiffre Mensuel</h4>
                                <div class="project-budget-inner">
                                    <div class="budget-item">
                                        <a class="budget-item-inner is-active">
                                            <span>&lt; 50K</span>
                                        </a>
                                        <a class="budget-item-inner">
                                            <span>&lt; 300K</span>
                                        </a>
                                        <a class="budget-item-inner">
                                            <span>&lt; 1000K</span>
                                        </a>
                                        <a class="budget-item-inner">
                                            <span>1000K+</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wizard-step-3" class="inner-wrapper" data-step-title="Project Files">
                        <!--src/partials/pages/wizard/wizard-v1/-->
                        <div class="step-content">
                            <div class="step-title">
                                <h2 class="dark-inverted">Les biens et services que vous offrez</h2>
                                <p>Vous pouvez passer cette etape. Vous pouvez la faire plus
                                    tard.</p>
                            </div>

                            <!--List Empty Search Placeholder -->
                            <div class="page-placeholder is-files">
                                <div class="placeholder-content">
                                    <img
                                        class="light-image is-rounded"
                                        src="assets/img/illustrations/wizard/upload-placeholder.svg"
                                        alt />
                                    <img
                                        class="dark-image is-rounded"
                                        src="assets/img/illustrations/wizard/upload-placeholder.svg"
                                        alt />
                                    <h3>Télécharger le template <a href="./ressources//template//produit.csv" download="">produits</a></h3>
                                    <p class="is-larger">
                                        Il s'agit d'un fichier excel qui contient des exemples de
                                        produits et
                                        services facturés. Modifier le à votre sauce.
                                    </p>
                                    <a class="action-link toggle-uploader-link">Charger le
                                        fichier</a>
                                </div>
                            </div>

                            <div class="uploader is-hidden">
                                <div class="uploader-container">
                                    <div class="upload-wrapper">
                                        <div class="upload-box fileinput-button">
                                            <div class="control">
                                                <div class="file is-boxed is-default">
                                                    <label class="file-label">
                                                        <input class="file-input" type="file" name="resume_product">
                                                        <span class="file-cta">
                                                            <span class="file-icon">
                                                                <i class="lnil lnil-32 lnil-cloud-upload"></i>
                                                            </span>
                                                            <span class="file-label"> Choose a file…
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wizard-step-4" class="inner-wrapper" data-step-title="Team Members">
                        <!--src/partials/pages/wizard/wizard-v1/-->
                        <div class="step-content">
                            <div class="step-title">
                                <h2 class="dark-inverted">
                                    Vos employers doivent-ils utiliser ce logiciel?
                                </h2>
                                <p>Insérer les numeros de telephone.</p>
                            </div>

                            <!--List Empty Search Placeholder -->
                            <div class="page-placeholder is-people">
                                <div class="placeholder-content">
                                    <img
                                        class="light-image is-rounded"
                                        src="assets/img/illustrations/wizard/team-placeholder.svg"
                                        alt />
                                    <img
                                        class="dark-image is-rounded"
                                        src="assets/img/illustrations/wizard/team-placeholder.svg"
                                        alt />
                                    <!-- <h3>Ajouter des Employers</h3> -->
                                    <p class="is-larger">
                                        Vous pouvez passer cette étape
                                    </p>
                                    <a class="action-link toggle-members-link">Ajouter les</a>
                                </div>
                            </div>

                            <div class="project-team-wrapper is-hidden">
                                <div class="project-team-header">

                                    <div class="field">
                                        <div class="control">
                                            <input id="choices-text-remove-button" class="input"
                                                value="696970539" name="resume_employer" placeholder="Enter phone">
                                        </div>
                                    </div>
                                    <div class="h-avatar is-big">
                                        <img
                                            class="avatar"
                                            src="assets/img/logos/logo/logo-light.svg"
                                            data-demo-src="assets/img/logos/logo/logo-light.svg"
                                            alt
                                            data-user-popover="3" />
                                        <img
                                            class="badge"
                                            src="assets/img/logos/logo/logo-light.svg"
                                            data-demo-src="assets/img/logos/logo/logo-light.svg"
                                            alt />
                                    </div>
                                    <h3 class="title is-4 is-narrow is-thin" id="owner"></h3>
                                    <p class="light-text">You are the business owner</p>
                                </div>

                                <div class="project-team-body">
                                    <div class="members-list">
                                        <div class="empty-wrap has-text-centered">
                                            <span>No team members yet</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wizard-step-5" class="inner-wrapper" data-step-title="Project Tools">
                        <!--src/partials/pages/wizard/wizard-v1/-->
                        <div class="step-content">
                            <div class="step-title">
                                <h2 class="dark-inverted">Quelles Fonctionnalités utilisées?</h2>
                                <p>
                                    Choisissez maintenant. Vous pouvez passer l'étape et la faire
                                    plus tard.
                                </p>
                            </div>

                            <div class="tools-wrapper">
                                <div class="columns is-multiline">
                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/illustrator.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>Gestion du Stock</span>
                                                        <span>Design Software</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/photoshop.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>Photoshop</span>
                                                        <span>Design Software</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/xd.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>Adobe XD</span>
                                                        <span>Design Software</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/figma.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>Figma</span>
                                                        <span>Design Software</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/invision.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>Invision</span>
                                                        <span>Design Software</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/jira.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>Jira</span>
                                                        <span>Issue Tracker</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/taiga.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>Taiga</span>
                                                        <span>Scrumboard</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/slack.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>Slack</span>
                                                        <span>Messaging App</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/asana.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>Asana</span>
                                                        <span>Task Manager</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/teamwork.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>Teamwork</span>
                                                        <span>Collaborative App</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/github.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>GitHub</span>
                                                        <span>Code Repository</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tool-->
                                    <div class="column is-4">
                                        <div class="tool-card">
                                            <input type="checkbox" />
                                            <div class="tool-card-inner">
                                                <div class="media-flex-center">
                                                    <div class="h-avatar">
                                                        <img
                                                            class="avatar is-squared"
                                                            src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/photo/demo/tools/gitlab.svg"
                                                            alt />
                                                    </div>
                                                    <div class="flex-meta">
                                                        <span>Gitlab</span>
                                                        <span>Code Repository</span>
                                                    </div>
                                                    <div class="flex-end">
                                                        <div class="checkmark">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wizard-step-6" class="inner-wrapper" data-step-title="Finish">
                        <!--src/partials/pages/wizard/wizard-v1/-->
                        <div class="step-content">
                            <div class="step-title">
                                <h2 class="dark-inverted">Congrats! You're all set.</h2>
                                <p>Awesome, you just finished creating this project.</p>
                            </div>

                            <div class="page-placeholder end-placeholder">
                                <div class="placeholder-content">
                                    <img class="light-image" src="assets/img/illustrations/wizard/finish.svg" alt="" />
                                    <img class="dark-image" src="assets/img/illustrations/wizard/finish-dark.svg" alt="" />
                                    <h3>Get ready for next steps.</h3>
                                    <p>
                                        You, and the team members you've added can already start working and
                                        creating tasks.
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="wizard-step-7" class="inner-wrapper" data-step-title="Project Info">
                        <!--src/partials/pages/wizard/wizard-v1/-->
                        <div class="step-content">
                            <div class="step-title">
                                <h2 class="dark-inverted">Parler Nous de Vous</h2>
                                <p>Avez vous un logo pour les factures ?</p>
                            </div>

                            <div class="project-info">
                                <div class="project-info-head">
                                    <div class="project-avatar-upload">
                                        <div class="filepond-profile-wrap is-small">
                                            <div class="control">
                                                <div class="file is-boxed is-default">
                                                    <label class="file-label">
                                                        <input class="file-input" type="file"
                                                            name="resume" />
                                                        <span class="file-cta">
                                                            <span class="file-icon">
                                                                <i
                                                                    class="lnil lnil-32 lnil-cloud-upload"></i>
                                                            </span>
                                                            <span class="file-label"> Choose a file…
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <span>Upload a Cool logo</span>
                                            <span>File size cannot exceed 2MB</span>
                                        </p>
                                    </div>
                                    <div class="project-info">
                                        <div class="project-name">
                                            <div class="field">
                                                <div class="control">
                                                    <input
                                                        id="project-name"
                                                        name="name"
                                                        required
                                                        class="input"
                                                        placeholder="Votre Nom" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-name">
                                            <div class="field">
                                                <div class="control">
                                                    <input
                                                        type="password"
                                                        min="8"
                                                        name="password"
                                                        required
                                                        id="project-name"
                                                        class="input"
                                                        placeholder="Un mot de passe" />
                                                </div>
                                                <p class="help">Minimum of 8 characters</p>
                                            </div>
                                        </div>
                                        <div class="project-description p-t-10">
                                            <div class="field">
                                                <div class="control">
                                                    <input
                                                        type="tel"
                                                        name="telephone"
                                                        min="9"
                                                        id="project-name"
                                                        required
                                                        class="input"
                                                        placeholder="Votre Numéro de téléphone" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="button-wrap">
                                        <button type="submit" name="save-acc" id="huro-register" class="button h-button is-rounded toast-trigger is-success">Soumettre</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--Wizard Navigation Buttons-->
                    <div class="wizard-buttons">
                        <div class="wizard-buttons-inner">
                            <button class="button h-button is-light is-bold wizard-button-previous">
                                Previous
                            </button>
                            <button class="button h-button is-primary is-bold is-elevated wizard-button-next">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </form>



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
        <script src="assets/js/wizard-v1.js" async></script>
        <script src="assets/js/wizard-dropzone.js" async></script>

        <!-- Layouts js -->

        <script src="assets/js/syntax.js" async></script>
        <script>
            //JS CODE
            var textRemove = new Choices(document.getElementById('choices-text-remove-button'), {
                delimiter: ',',
                editItems: true,
                //maxItemCount: 5,
                removeItemButton: true,
            });

            //MARKUP
        </script>
        <script src="./async/js/async.js"></script>
    </div>
</body>


<!-- Mirrored from huro.cssninja.io/wizard-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 11:41:56 GMT -->

</html>