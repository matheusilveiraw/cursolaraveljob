<?php

//para criar um controller: 
//php artisan make:controller ProdutoController

//php artisan make:controller ProdutoController2 --resource

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() { 
        // return 'index';
        $produtos = \App\Models\Produto::all();
        return dd($produtos);
    }

    public function show($id = 900000) { 
        return "show: ". $id;
    }
}