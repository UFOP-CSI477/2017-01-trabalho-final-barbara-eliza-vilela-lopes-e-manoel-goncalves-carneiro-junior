@extends('principal')

@section('conteudo')

<h1>Inserir bebê</h1>

<a href="/bebes" class="btn btn-primary">Voltar</a><br><br>

<form method="post" action="/bebes" class="form-group">

  {{ csrf_field() }}

  Nome: <input type="text" name="nome" maxlength="100" class="form-control"><br>
  Sexo: <input type="text" name="sexo" class="form-control"><br>
  Data de nascimento: <input type="date" name="nascimento" class="form-control"><br>
  <input type="hidden" name="users_id" value="{{ Auth::id() }}"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
