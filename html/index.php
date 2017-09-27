<?php
require_once '../vendor/autoload.php';

$router = new \DiggyRouter\Router();
$router->loadRoutes('../config/routing.yml');

if(!$router->handleRequest()) {
    header('HTTP/1.0 404 Not Found');
    $errorPage = new \App\View\Error();
    $errorPage->render();
}