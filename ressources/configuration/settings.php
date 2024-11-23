<?php
// Environnement
require_once './ressources/configuration/envi.php';
// Database
require_once './ressources/database/huro.php';
// Entities
require_once './ressources/entities/class.php';
// Formulaire
// 1. GET
require_once './protocoles/get/$_get.php';
// 1. POST
require_once './protocoles/post/$_post.php';