@extends('principal')

@section('conteudo')

<div align="center"><h1>Mães</h1></div>


<table class="table table-bordered table-hover table-condensed table-striped">


  <thead>
      <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Idade</th>
          <th>Data da concepção</th>
          <th>Peso inicial</th>
          <th>Editar</th>
      </tr>
  </thead>

  <tbody>
    @foreach($users as $u)
    @if ($u->id == Auth::id())
      <tr>
          <td>{{ $u->id }}</td>
          <td>{{ $u->name }}</td>
          <td>{{ $u->email }}</td>
          <td>{{ $u->idade }}</td>
          <td>{{ $u->dataGestacao }}</td>
          <td>{{ $u->peso }}</td>
          <td><div align="center"><a href="users/{{ $u->id }}/edit"><img src="/img/editar.png" title="Editar" allign="center" width="20" height="20"/></a></div></td>
          <!-- <td><div align="center"><a href="users/{{ $u->id }}"><img src="./excluir.png" title="Excluir" allign="center" width="20" height="20"/></a></div></td> -->
      </tr>
      @endif
      @endforeach

      </tbody>

</table>

<a class="btn btn-primary" href="/">Voltar</a><br><br>

@endsection
