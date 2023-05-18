<?php

namespace App\Controllers;

use Akrbdk\PhpMvcCore\Application;
use Akrbdk\PhpMvcCore\Controller;
use Akrbdk\PhpMvcCore\Middlewares\AuthMiddleware;
use Akrbdk\PhpMvcCore\Request;
use App\Models\LoginForm;
use App\Models\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request)
    {
        $loginForm = new LoginForm();
        if ($request->isPost()) {
            $loginForm->loadData($request->getBody());

            if ($loginForm->validate() && $loginForm->login()) {
                $request->redirect('/');
                return;
            }
        }

        $this->setLayout('auth');

        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $this->setLayout('auth');

        $user = new User();

        if ($request->isPost()) {
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success', 'Thank you for registering');
                Application::$app->request->redirect('/');
                exit;
            }

            return $this->render('register', [
                'model' => $user
            ]);
        }

        return $this->render('register', [
            'model' => $user
        ]);
    }

    public function logout(Request $request): void
    {
        Application::$app->logout();
        $request->redirect('/');
    }

    public function profile()
    {
        return $this->render('profile');
    }
}
