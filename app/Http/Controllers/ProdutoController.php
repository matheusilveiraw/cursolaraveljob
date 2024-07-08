<?php

//para criar um controller: 
//php artisan make:controller ProdutoController

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() { 
        return 'index';
    }


    public function show($id = 900000) { 
        return "show: ". $id;
    }
}