@extends('principal')

@section('conteudo')

<h1>Excluir bebê</h1>
<a href="/bebes" class="btn btn-primary">Voltar</a><br><br>

<p>ID: {{ $bebe->id }}</p>
<p>Nome: {{ $bebe->nome }}</p>
<p>Sexo: {{ $bebe->sexo }}</p>
<p>Data de nascimento: {{ $bebe->nascimento }}</p>

<form method="post" action="/bebes/{{ $bebe->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" class="btn btn-primary" value="Confirmar exclusão">

</form>

@endsection
