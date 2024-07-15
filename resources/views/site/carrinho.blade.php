@extends('site.layout')
@section('title', 'Carrinho')
@section('conteudo')

    <div class="container">

        @if ($mensagem = Session::get('sucesso'))
            <div class="card green">
                <div class="card-content white-text">
                    <span class="card-title">Parabéns!</span>
                    <p>{{ $mensagem }}</p>
                </div>
            </div>
        @endif

        @if ($itens->count() == 0)
            <div class="card orange">
                <div class="card-content white-text">
                    <span class="card-title">Seu carrinho está vazio!</span>
                    <p>Aproveite nossas promoções</p>
                </div>
            </div>
        @else
            <h5>Seu carrinho possui: {{ $itens->count() }} produtos</h5>

            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($itens as $i)
                            <tr>
                                <td><img src="{{ $i->attributes->image }}" alt="" width="70"
                                        class="responsive-img circle"></td>
                                <td>{{ $i->name }}</td>
                                <td>R$ {{ number_format($i->price, 2, ',', '.') }}</td>

                                <form action="{{ route('site.atualizacarrinho') }}" method="POST">
                                    @csrf
                                    <td><input style="width:40px;" class="white center font-weight:900;" type="number"
                                            value="{{ $i->quantity }}" name="quantity" min="1"></td>
                                    <td>
                                        <input type="hidden" name="id" value="{{ $i->id }}">
                                        <button class="btn-floating waves-effect waves-light orange"><i
                                                class="material-icons">refresh</i></button>
                                </form>

                                <form action="{{ route('site.removecarrinho') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $i->id }}">
                                    <button class="btn-floating waves-effect waves-light red"><i
                                            class="material-icons">delete</i></button>
                                </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="card orange">
                    <div class="card-content white-text">
                        <span class="card-title">R${{number_format(\Cart::getTotal(), 2, ',', '.')}}</span>
                        <p>Pague em 12x sem juros</p>
                    </div>
                </div>


        @endif



        <div class="row container center">
            <a href="{{ route('site.index')}}" class="btn waves-effect waves-light blue">Continuar comprando<i
                    class="material-icons right">arrow_back</i></a>
            <button class="btn waves-effect waves-light blue">Limpar carrinho<i
                    class="material-icons right">clear</i></button>
            <button class="btn waves-effect waves-light green">Finalizar pedido<i
                    class="material-icons right">check</i></button>
        </div>
    </div>
    </div>
@endsection
