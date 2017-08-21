@extends('principal')

@section('conteudo')

<h1>Inserir consulta</h1>

<a href="/consultas" class="btn btn-primary">Voltar</a><br><br>

<form method="post" action="/consultas" class="form-group">

  {{ csrf_field() }}

  Data: <input type="date" name="data" class="form-control"><br>
  Horário: <input type="text" name="horario" class="form-control"><br>
  Médico: <input type="text" name="medico" class="form-control"><br>
  Local: <input type="text" name="local" class="form-control"><br>
  Peso da mãe: <input type="float" name="pesomae" class="form-control"><br>
  Peso do bebê: <input type="float" name="pesobebe" class="form-control"><br>
  Resumo da consulta: <input type="text" name="resumo" class="form-control"><br>

  <input type="hidden" name="users_id" value="{{ Auth::id() }}"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>

@endsection
