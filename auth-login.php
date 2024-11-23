<?php require_once './ressources/configuration/settings.php' ?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags  -->
    <?php require_once './ressources/view/metadata/metadata.php' ?>

    <title>Huro :: Login</title>
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

        <div class="auth-wrapper">
            <!--Page body-->

            <div class="auth-wrapper-inner is-single">
                <!--Fake navigation-->
                <div class="auth-nav">
                    <div class="left"></div>
                    <div class="center">
                        <a href="index.html" class="header-item">
                            <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="" />
                            <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="" />
                        </a>
                    </div>
                    <div class="right">
                        <label class="dark-mode ml-auto">
                            <input type="checkbox" checked />
                            <span></span>
                        </label>
                    </div>
                </div>

                <!--Single Centered Form-->
                <div class="single-form-wrap">
                    <div class="inner-wrap">
                        <!--Form Title-->
                        <div class="auth-head">
                            <h2>Welcome Back.</h2>
                            <p>Please sign in to your account</p>
                            <a href="auth-signup-3.html">I do not have an account yet </a>
                        </div>

                        <!--Form-->
                        <div class="form-card">
                            <form>
                                <div id="signin-form" class="login-form">
                                    <!-- Input -->
                                    <div class="field">
                                        <div class="control has-icon">
                                            <input class="input" type="text" placeholder="Username" />
                                            <span class="form-icon">
                          <i data-feather="user"></i>
                        </span>
                                        </div>
                                    </div>
                                    <!-- Input -->
                                    <div class="field">
                                        <div class="control has-icon">
                                            <input class="input" type="password" placeholder="Password" />
                                            <span class="form-icon">
                          <i data-feather="lock"></i>
                        </span>
                                        </div>
                                    </div>

                                    <div class="setting-item">
                                        <label class="form-switch is-primary">
                                            <input type="checkbox" class="is-switch" id="busy-mode-toggle" />
                                            <i></i>
                                        </label>
                                        <div class="setting-meta">
                                            <span>Remember Me</span>
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <div class="control login">
                                        <button class="button h-button is-primary is-bold is-fullwidth is-raised">
                                            Sign In
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="forgot-link has-text-centered">
                            <a>Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Huro Scripts-->
        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>

        <!-- Huro js -->
        <script src="assets/js/functions.js"></script>
        <script src="assets/js/auth.js"></script>
    </div>
</body>


</html>