<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     /**
     * method to user homepage VIEW
     * =========================================================================================
     */
    public function homepage ()
     {
        $variavel = "Homepage do sistema de getão de investimento";

        return view('welcome', [
            'title' => $variavel
        ]);
    }

     /**
     * method to user create VIEW
     * =========================================================================================
     */
    public function cadastrar () 
    {
        echo "Tela de Cadastro";
    }

    /**
     * method to user login VIEW
     * =========================================================================================
     */
    public function fazerLogin ()
    {
        return view('user.login');
    }
}
