@extends('principal')

@section('conteudo')

<h1>Editar mãe</h1>

<a class="btn btn-primary" href="/users">Voltar</a>

<form method="post" action="/users/{{ $user->id }}">

  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  Nome: <input type="text" name="name" maxlength="100" value="{{ $user->name }}"><br>
  E-mail: <input type="text" name="email" value="{{ $user->email }}"><br>
  Senha: <input type="text" name="password" value="{{ $user->password }}"><br>
  Idade: <input type="text" name="idade" value="{{ $user->idade }}"><br>
  Data da concepção: <input type="date" name="dataGestacao" value="{{ $user->dataGestacao }}"><br>
  Peso inicial: <input type="text" name="peso" value="{{ $user->peso }}"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
