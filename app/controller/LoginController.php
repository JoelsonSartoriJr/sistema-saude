<?php

class LoginController
{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader,[
            'auto_reload' => true
        ]);
        $template = $twig->load('login.html');
        return $template->render();
    }

    public function check()
    {
        try {
            $user = new User;
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->validateLogin();

            header('Location: http://localhost:8080/sistema-saude/dashboard');
        } catch (\Exception $e) {
            
            header('Location: http://localhost:8080/sistema-saude');
        }
    }
}
