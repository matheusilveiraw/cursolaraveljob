
@if($errors->any())
    @foreach ($errors->all() as $e)
        {{ $e }} <br>
    @endforeach
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    Nome: <br><input type="text" name="firstName"><br>
    Sobrenome: <br><input type="text" name="lastName"><br>
    Email: <br><input type="email" name="email"><br>
    Senha: <br><input type="password" name="password"><br>
    <input type="checkbox" name="remember" id=""> Lembrar-me
    <button type="submit"> Cadastrar </button>

</form>