<?php

use App\Controllers\AuthController;
use App\Controllers\SiteController;
use App\Core\Application;

require_once realpath(__DIR__ . '/../vendor/autoload.php');

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contacts', [SiteController::class, 'contacts']);
$app->router->post('/contacts', [SiteController::class, 'handleContacts']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();
