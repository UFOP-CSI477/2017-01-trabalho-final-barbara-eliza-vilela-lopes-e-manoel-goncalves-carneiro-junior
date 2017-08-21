@extends('principal')

@section('conteudo')

<h1>Editar dados do bebê</h1>

<a class="btn btn-primary" href="/bebes">Voltar</a>

<form method="post" action="/bebes/{{ $bebe->id }}">

  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  Nome: <input type="text" name="nome" maxlength="100" value="{{ $bebe->nome }}"><br>
  Sexo: <input type="text" name="sexo" value="{{ $bebe->sexo }}"><br>
  Data de nascimento: <input type="date" name="nascimento" value="{{ $bebe->nascimento }}"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
