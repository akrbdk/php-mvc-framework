<?php

use App\Controllers\SiteController;
use App\Core\Application;

require_once realpath(__DIR__ . '/../vendor/autoload.php');

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contacts', [SiteController::class, 'contacts']);
$app->router->post('/contacts', [SiteController::class, 'handleContacts']);

$app->run();
