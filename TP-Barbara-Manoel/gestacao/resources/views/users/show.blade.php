@extends('principal')

@section('conteudo')

<h1>Excluir mãe</h1>
<a href="/users" class="btn btn-primary">Voltar</a><br><br>

<p>ID: {{ $user->id }}</p>
<p>Nome: {{ $user->name }}</p>
<p>E-mail: {{ $user->email }}</p>
<p>Idade: {{ $user->idade }}</p>
<p>Data da concepção: {{ $user->dataGestacao }}</p>
<p>Peso Inicial: {{ $user->peso }}</p>


<form method="post" action="/users/{{ $user->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" class="btn btn-primary" value="Confirmar exclusão">

</form>

@endsection
