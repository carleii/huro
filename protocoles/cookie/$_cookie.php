<?php
if (isset($_COOKIE['andhisnameisjhoncena'])) {
    // If we are in login or register page, head to the home page
    if ($_SERVER["SCRIPT_NAME"] == "/huro/auth-register.php" or $_SERVER["SCRIPT_NAME"] == "/huro/auth-login.php") {
        header("Location: ./");exit();
        # code...
    }    
    # code...
}else{
    if($_SERVER["SCRIPT_NAME"] != "/huro/auth-register.php" and $_SERVER["SCRIPT_NAME"] != "/huro/auth-login.php"){
        header("Location: ./auth-login.php");exit();
    }
}