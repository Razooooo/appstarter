<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $session = session();
        $template =
            view('templates/header',[
                'loggedIn' => $session->get('loggedIn'),
                'name' => $session->get('username')
            ]);
            view('templates/footer');
        return $template;
    }
}
