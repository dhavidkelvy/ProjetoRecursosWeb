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
        $variavel = "Sistema de Recursos";
        return view('welcome', [
            'title' => $variavel
        ]);
    }

    /**
    * Method to user login Wiew
    */

    public function fazerLogin()
    {
        return view ('user.login');
      
    }

}
