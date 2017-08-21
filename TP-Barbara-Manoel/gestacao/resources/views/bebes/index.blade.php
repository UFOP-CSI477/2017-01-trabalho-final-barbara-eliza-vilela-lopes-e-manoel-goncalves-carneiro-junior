@extends('principal')

@section('conteudo')

<div align="center"><h1>Bebês</h1></div>

<a href="/bebes/create" class="btn btn-primary">Inserir</a><br><br>

<table class="table table-bordered table-hover table-condensed table-striped">

  <thead>
      <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Sexo</th>
          <th>Data de Nascimento</th>
          <th>Editar</th>
          <th>Excluir</th>
      </tr>
  </thead>

  <tbody>
    @foreach($bebes as $b)
    @if ($b->users_id == Auth::id())

      <tr>
          <td>{{ $b->id }}</td>
          <td>{{ $b->nome }}</td>
          <td>{{ $b->sexo }}</td>
          <td>{{ $b->nascimento }}</td>
          <td><div align="center"><a href="bebes/{{ $b->id }}/edit"><img src="/img/editar.png" title="Editar" allign="center" width="20" height="20"/></a></div></td>
          <td><div align="center"><a href="bebes/{{ $b->id }}"><img src="/img/excluir.png" title="Excluir" allign="center" width="20" height="20"/></a></div></td>
      </tr>
      @endif
      @endforeach

      </tbody>

</table>

<a class="btn btn-primary" href="/">Voltar</a><br><br>

@endsection
