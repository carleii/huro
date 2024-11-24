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
                        <a href="index.php" class="header-item">
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
                            <p>Connecter vous à votre compte</p>
                            <a href="auth-register.php">Pas encore de Compte </a>
                        </div>

                        <!--Form-->
                        <div class="form-card">
                            <form action="" method="post">
                                <div id="signin-form" class="login-form">
                                    <!-- Input -->
                                    <div class="field">
                                        <div class="control has-icon">
                                            <input class="input" type="tel" name="tel"  placeholder="telephone" />
                                            <span class="form-icon">
                                                <i data-feather="user"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Input -->
                                    <div class="field">
                                        <div class="control has-icon">
                                            <input class="input" name="password" type="password" placeholder="Password" />
                                            <span class="form-icon">
                                                <i data-feather="lock"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <label class="form-switch is-primary">
                                            <input type="checkbox" checked class="is-switch" id="busy-mode-toggle" />
                                            <i></i>
                                        </label>
                                        <div class="setting-meta">
                                            <span>Remember Me</span>
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <div class="control login">
                                        <button type="submit" name="login" class="button h-button is-primary is-bold is-fullwidth is-raised">
                                            Sign In
                                        </button><br>
                                        <p class="is-warning"><?php echo $tellToUser ?></p>
                                        
                                        
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