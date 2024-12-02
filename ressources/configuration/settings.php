<?php
// Environnement
require_once './ressources/configuration/envi.php';
// Database path
require_once './ressources/database/huro.php';
// Entities
require_once './ressources/entities/class.php';
// Functions
require_once './ressources/fonction/function.php';
// base de données var
$HURO = connectDb();
// Get cookie
require_once './protocoles/cookie/$_cookie.php';
// Get session info
require_once './ressources/configuration/session.php';
// Formulaire
// 1. GET
require_once './protocoles/get/$_get.php';
// 1. POST
require_once './protocoles/post/$_post.php';
