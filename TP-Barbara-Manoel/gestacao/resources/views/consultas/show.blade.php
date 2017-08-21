@extends('principal')

@section('conteudo')

<h1>Excluir consulta</h1>
<a href="/consultas" class="btn btn-primary">Voltar</a><br><br>

<p>ID: {{ $consulta->id }}</p>
<p>Data: {{ $consulta->data }}</p>
<p>Horário: {{ $consulta->horario }}</p>
<p>Médico: {{ $consulta->medico }}</p>
<p>Local: {{ $consulta->local }}</p>

<form method="post" action="/consultas/{{ $consulta->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" class="btn btn-primary" value="Confirmar exclusão">

</form>

@endsection
