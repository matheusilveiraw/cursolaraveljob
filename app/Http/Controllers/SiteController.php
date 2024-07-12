<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;


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

    public function details($slug) { 
        $produto = Produto::where('slug', $slug)->first();

        return view('site.details', compact('produto'));
    }

    public function categoria($id) { 
        $categoria = Categoria::find($id);
        $produtos = Produto::where('id_categoria', $id)->paginate(3);

        return view('site.categoria', compact('produtos', 'categoria'));
    }
}
