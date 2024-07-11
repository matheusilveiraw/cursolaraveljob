@extends('site.layout')

@section('title', 'Essa é a página HOME')

@section('conteudo')

{{-- comentário, não aparece no código fonte --}}

{{ isset($nome) ? 'existe' : 'não existe' }}

{{$teste ?? 'padrão'}} {{-- ?? serve para dar um valor padrão para a variavel, que nesse caso não existe no controler --}}


{{-- estruturas de controle dentro do blade --}}

{{-- if --}}

@if ($nome == 'rodrigo') 
    true 
@else 
    false
@endif

{{-- unless, oposto do if --}}

@unless ($nome == 'rodrigo') 
    true 
@else 
    false
@endunless

{{-- switch --}}

@switch($idade)
    @case(28)
        idade está ok
        @break
    @case(30)
        idade n tá ok
        @break
    @default
        algum problema com a idade
@endswitch

{{-- isset --}}

@isset($nome)
    existe
@endisset

{{-- empty checa se está vazio--}}

@empty($nome)
    está vazia
@endempty

{{-- auth - vÊ se tem um usuario autenticado --}}
@auth
    está autenticado
@endauth

{{-- oposto do auth, retorna se não ter um usuario autenticado --}}
@guest
    não tem usuário autenticado
@endguest


@endsection