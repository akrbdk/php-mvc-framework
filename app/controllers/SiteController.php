<?php

namespace App\Controllers;

use App\Core\Application;

class SiteController
{
    public function home()
    {
        return Application::$app->router->renderView('home');
    }
    public function contacts()
    {
        return Application::$app->router->renderView('contacts');
    }
    public function handleContacts()
    {
        return 'handling request data';
    }
}
