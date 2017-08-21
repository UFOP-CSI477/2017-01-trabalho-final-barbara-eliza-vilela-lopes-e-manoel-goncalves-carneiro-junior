@extends('principal')

@section('conteudo')

<h1>Inserir mãe</h1>

<a class="btn btn-primary" href="/">Voltar</a><br><br>


<form method="post" action="/users">

  {{ csrf_field() }}

  Nome: <input type="text" name="name" maxlength="100"><br>
  E-mail: <input type="text" name="email"><br>
  Senha: <input type="text" name="password"><br>
  Idade: <input type="integer" name="idade"><br>
  Data da concepção: <input type="date" name="dataGestacao"><br>
  Peso inicial: <input type="text" name="peso"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>


@endsection
