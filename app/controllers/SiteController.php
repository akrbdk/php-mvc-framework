<?php

namespace App\Controllers;

use Akrbdk\PhpMvcCore\Controller;
use Akrbdk\PhpMvcCore\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'Vasya'
        ];

        return $this->render('home', $params);
    }

    public function contacts()
    {
        return $this->render('contacts');
    }

    public function handleContacts(Request $request)
    {

        $body = $request->getBody();

        echo '<pre>';
        print_r($body);
        echo '</pre>';
        die();

        return 'handling request data';
    }
}
