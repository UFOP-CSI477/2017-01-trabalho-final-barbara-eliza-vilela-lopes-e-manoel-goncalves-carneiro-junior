@extends('principal')

@section('conteudo')

<h1>Calculadora do Tempo Gestacional</h1>

@foreach($users as $u)
@if ($u->id == Auth::id())

<?php
  $data_inicial = $u->dataGestacao;
  $data_final = date('Y-m-d');

  $time_inicial = strtotime($data_inicial);
  $time_final = strtotime($data_final);

  $diferenca = $time_final - $time_inicial;

  $dias = (int)floor($diferenca/(60*60*24));

  $semanas = number_format($dias/7);

  $restanteDias = 280 - $dias;
  $restanteSemanas = (int)floor($restanteDias/7);
 ?>

<table class="table table-bordered table-hover table-condensed table-striped">
  <thead>
      <tr>
          <th>Data da concepção</th>
          <th>Data atual</th>
          <th>Tempo gestacional</th>
          <th>Previsão para o parto</th>

      </tr>
  </thead>

  <tbody>
      <tr>
          <td>{{ $u->dataGestacao }}</td>
          <td>{{ $data_final }}</td>
          <td>{{ $semanas }} semanas</td>
          <td>{{ $restanteSemanas }} semanas</td>
      </tr>

@endif
@endforeach
  </tbody>
</table>

<div align="center"><h3>Os pesos médios do feto são apresentados na tabela abaixo:</h3></div>
<div class"container">
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6" style="text-align: justify" align="center">
                <img width="100%" height="100%" src="/img/pesos.jpg"> <br><br>
            </div>
    </div>
</div>


<a class="btn btn-primary" href="/">Voltar</a><br><br>

@endsection
