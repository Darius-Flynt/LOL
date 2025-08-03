<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        return view('welcome'); // Certifique-se que esse arquivo existe: resources/views/welcome.blade.php
    }

    public function cadastrar()
    {
        echo "Tela de cadastro";
    }

    public function fazerLogin()
    {
        return view('login');
    }

    public function ping()
    {
         return view('ping');
    }

    public function home()
    {
         return view('home');
    }

    public function main()
    {
         return view('main');
    }

    public function ajuda()
    {
         return view('ajuda');
    }

    public function register()
    {
         return view('register');
    }
}
