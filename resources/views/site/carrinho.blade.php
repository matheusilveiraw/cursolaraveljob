@extends('site.layout')
@section('title', 'Carrinho')
@section('conteudo')

    <div class="container">

        @if ($mensagem = Session::get('sucesso')) 
            <div class="row">
                <div class="col s12 m6">
                  <div class="card green">
                    <div class="card-content white-text">
                      <span class="card-title">Parabéns!</span>
                      <p>{{$mensagem}}</p>
                    </div>
                  </div>
                </div>
              </div>
        @endif

        <h5>Seu carrinho possui: {{$itens->count()}} produtos</h5>

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
                            <td><img src="{{$i->attributes->image}}" alt="" width="70" class="responsive-img circle"></td>
                            <td>{{$i->name}}</td>
                            <td>R$ {{number_format($i->price, 2, ',', '.')}}</td>
                            <td><input style="width:40px;" class="white center font-weight:900;" type="number" value="{{$i->quantity}}" name="quantity"></td>
                            <td>  
                                <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></button>
                                <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row container center">
                <button class="btn waves-effect waves-light blue">Continuar comprando<i class="material-icons right">arrow_back</i></button>
                <button class="btn waves-effect waves-light blue">Limpar carrinho<i class="material-icons right">clear</i></button>
                <button class="btn waves-effect waves-light green">Finalizar pedido<i class="material-icons right">check</i></button>
            </div>
        </div>
    </div>
@endsection
