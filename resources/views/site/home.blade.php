@extends('site.layout')

@section('title', 'Essa é a página HOME')

@section('conteudo')

{{-- comentário, não aparece no código fonte --}}

{{ isset($nome) ? 'existe' : 'não existe' }}

{{$teste ?? 'padrão'}} {{-- ?? serve para dar um valor padrão para a variavel, que nesse caso não existe no controler --}}

@endsection