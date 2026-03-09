<?php 

if (!defined('BASEPATH')) {
    define('BASEPATH', __DIR__ . "/..");
}

// router.php
$page = $_GET['page'] ?? 'dashboard';
$viewPath = BASEPATH . "/views/" . $page . ".php";

if (file_exists($viewPath)) {
    include $viewPath;
} else {
    include BASEPATH . "/views/404.php";
}