@extends('site.layout')

@section('title', 'Essa é a página HOME')

@section('conteudo')

<div class="container">
    <div class="row">
        @foreach ($produtos as $produto)
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ $produto->imagem }}">
                    <span class="card-title">{{ $produto->nome }}</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                </div>
                <div class="card-content">
                    <p>{{ Str::limit($produto->descricao, 30) }}</p>
                </div>
            </div>    
        </div>
        @endforeach
    </div>
</div>

<div class="row center-align">
    {{ $produtos->links('custom.pagination') }}
</div>

@endsection