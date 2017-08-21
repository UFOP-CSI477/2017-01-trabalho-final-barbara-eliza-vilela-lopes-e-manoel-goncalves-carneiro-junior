@extends('principal')

@section('conteudo')

<h1>Editar dados da consulta</h1>

<a class="btn btn-primary" href="/consultas">Voltar</a><br><br>

<form method="post" action="/consultas/{{ $consulta->id }}">

  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  Data: <input type="date" name="data" value="{{ $consulta->data }}" class="form-control"><br>
  Horário: <input type="text" name="horario" value="{{ $consulta->horario }}" class="form-control"><br>
  Médico: <input type="text" name="medico" value="{{ $consulta->medico }}" class="form-control"><br>
  Local: <input type="text" name="local" value="{{ $consulta->local }}" class="form-control"><br>
  Peso da mãe: <input type="float" name="pesomae" value="{{ $consulta->pesomae }}" class="form-control"><br>
  Peso do bebê: <input type="float" name="pesobebe" value="{{ $consulta->pesobebe }}" class="form-control"><br>
  Resumo da consulta: <input type="text" name="resumo" value="{{ $consulta->resumo }}" class="form-control"><br>

  <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-primary">

</form>



@endsection
