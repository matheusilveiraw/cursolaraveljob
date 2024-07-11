<?php

namespace App\Http\Controllers;
use App\Models\Produto;

use Illuminate\Http\Request;

class SiteController extends Controller
{
        public function index()
    {
        // return 'index';
        // $produtos = \App\Models\Produto::all();
        // return dd($produtos);

        // $nome = 'João';
        // $idade = 25;
        // $html = '<h1>Isso é um titulo em HTML</h1>';
        // $frutas = ['banana', 'laranja', 'maçã'];

        // return view('site/news', ['nome' => $nome, 'idade' => $idade, 'html' => $html]);
        // return view('site.home', compact('nome', 'idade', 'html', 'frutas'));

        $produtos = Produto::paginate(3); //tá importando todos os produtos do banco de dados aqui

        return view('site.home', compact('produtos'));
    }
}
