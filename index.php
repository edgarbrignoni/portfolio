<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Choose here the first page
 * that you want to display to the user
 **/
 
define("DEFAULT_PAGE", "home");

$pages = [
        'public' => ['home','contact-us'],
        'private' => []
    ];

$pageToDisplay = DEFAULT_PAGE;
if (isset($_GET['page'])) $pageToDisplay = $_GET['page'];

if(!in_array($pageToDisplay,$pages['public'])){
    header('HTTP/1.0 404 not found');
    die();
}

require('src/template.php');