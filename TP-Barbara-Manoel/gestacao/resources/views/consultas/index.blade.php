@extends('principal')

@section('conteudo')

<div align="center"><h1>Consultas</h1></div>

<a href="/consultas/create" class="btn btn-primary">Inserir</a><br><br>

<table class="table table-bordered table-hover table-condensed table-striped">

  <thead>
      <tr>
          <th>Código</th>
          <th>Data</th>
          <th>Horário</th>
          <th>Médico</th>
          <th>Local</th>
          <th>Peso da mãe</th>
          <th>Peso do bebê</th>
          <th>Resumo da consulta</th>
          <th>Editar</th>
          <th>Excluir</th>
      </tr>
  </thead>

  <tbody>
    @foreach($consulta as $c)
    @if ($c->users_id == Auth::id())
        <tr>
              <td>{{ $c->id }}</td>
              <td>{{ $c->data }}</td>
              <td>{{ $c->horario }}</td>
              <td>{{ $c->medico }}</td>
              <td>{{ $c->local }}</td>
              <td>{{ $c->pesomae }}</td>
              <td>{{ $c->pesobebe }}</td>
              <td>{{ $c->resumo }}</td>
              <td><div align="center"><a href="consultas/{{ $c->id }}/edit"><img src="/img/editar.png" title="Editar" allign="center" width="20" height="20"/></a></div></td>
              <td><div align="center"><a href="consultas/{{ $c->id }}"><img src="/img/excluir.png" title="Excluir" allign="center" width="20" height="20"/></a></div></td>
          </tr>
      @endif
      @endforeach

      </tbody>

</table>


<a class="btn btn-primary" href="/">Voltar</a><br><br>

@endsection
