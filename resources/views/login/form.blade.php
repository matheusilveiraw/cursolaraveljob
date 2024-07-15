@if($mensagem = Session::get('erro'))
    {{$mensagem}}
@endif

@if($errors->any())
    @foreach ($errors->all() as $e)
        {{ $e }} <br>
    @endforeach
@endif

<form action="{{route('login.auth')}}" method="POST">
    @csrf
    Email: <br><input type="email" name="email"><br>
    Senha: <br><input type="password" name="password" id=""><br>
    <button type="submit"> Entrar</button>

</form>