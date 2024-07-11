<?php

namespace App\Http\Controllers;

//php artisan make:controller ProdutoController2 --resource 
//controller que já vem com metodos 

//php route list comando: php artisan route:list
//comando para ver todas as rotas 

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return 'index';
        // $produtos = \App\Models\Produto::all();
        // return dd($produtos);

        $nome = 'João';
        $idade = 25;
        $html = '<h1>Isso é um titulo em HTML</h1>';

        // return view('site/news', ['nome' => $nome, 'idade' => $idade, 'html' => $html]);
        return view('site.home', compact('nome', 'idade', 'html'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
