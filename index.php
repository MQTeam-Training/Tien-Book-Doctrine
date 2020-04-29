<?php
require_once "head.php";
require_once "bootstrap.php";
require_once "entities/User.php";

if(!isset($_COOKIE['user_id'])){
    require_once "login.php";
}
$url=$_SERVER['REQUEST_URI'];
switch ($url){
    case '/login':
        require_once "login.php";
        break;
    case '/vbook':
        require_once "vbook.php";
        break;
    case '/allbook':
        require_once "allbook.php";
        break;
    default:
        require_once "404.php";
        break;
}
//echo $url;
//require_once "login.php";
require_once "footer.php";