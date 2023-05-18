<?php

namespace App\Controllers;

use App\Core\Application;
use Akrbdk\PhpMvcCore\Controller;
use Akrbdk\PhpMvcCore\Request;
use App\models\ContactForm;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'Vasya'
        ];

        return $this->render('home', $params);
    }

    public function contacts(Request $request)
    {
        $contactsForm = new ContactForm();

        if ($request->isPost()) {
            $contactsForm->loadData($request->getBody());

            if ($contactsForm->validate() && $contactsForm->send()) {
                Application::$app->session->setFlash('success', 'Thank you for contacting us.');
                $request->redirect('/contacts');
                return;
            }
        }

        return $this->render('contacts', [
            'model' => $contactsForm
        ]);
    }
}
