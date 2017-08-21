<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ env('APP_NAME')}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<!-- Topo -->
<nav class="navbar navbar-light bg-fade" style="background-color: #A9E2F3; border-color: #EDEDED;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">{{ env('APP_NAME') }}</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li class="active"><a href="/">Início</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gravidez
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/cuidadosG">Cuidados</a></li>
              <li><a href="/gravidez/calculo">Cálculo da Gestação</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mães
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/consultas">Consultas</a></li>
              <li><a href="/cuidadosM">Cuidados Pessoais</a></li>
              <li><a href="/users">Editar Dados</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bebês
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/fraldas">Chá de Bebê/Fraldas</a></li>
              <li><a href="/cuidados">Cuidados</a></li>
              <li><a href="/bebes">Cadastrar/Editar</a></li>
            </ul>
        </li>

        <li><a href="/duvidas">Dúvidas Frequentes</a></li>

        <li><a href="/contato">Fale Conosco</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Entrar</a></li>
            <li><a href="{{ route('register') }}">Cadastrar</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Sair
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
      </ul>
    </div>
  </div>
</nav>


@if (Session::has('mensagem'))
  <p class="alert alert-info">{{ Session::get('mensagem') }}</p>
@endif
<!-- Conteúdo -->
@yield('conteudo')
<img width="100%" height="100%" src="/img/bebe.jpg"> <br><br>
<!-- Rodapé -->
<footer class="container-fluid text-center">
  <p>© Copyright 2017 - Bárbara Eliza Vilela Lopes & Manoel Gonçalves Carneiro Júnior</p>
</footer>

</body>
</html>
