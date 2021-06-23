@extends('templates.template')

@section('content')
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
            <img src="{{url('assets/images/logocinemarcos.png')}}" width="" height="30px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Filmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Funcionários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/salas">Salas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/sessoes">Sessões <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{session('user')}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item disabled" href="#">Perfil</a>
                    <a class="dropdown-item" href="/logout">Deslogar</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<br>
<h1 class="text-center mt-5">Detalhes da sessão #{{$sessao->id}}</h1>
<hr>
@php
    $filme=$sessao->relFilmes($sessao->filme)['titulo'];
@endphp

<div class="card">
  <div class="card-header">
    Data de início
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$sessao->dataInicio}}</h5>
    <p class="card-text">Data que sessão iniciou ou será iniciada.</p>
  </div>
</div>
<br>
<div class="card">
  <div class="card-header">
    Status
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$sessao->status}}</h5>
    <p class="card-text">Estado da sessão.</p>
  </div>
</div>
<br>
<div class="card">
  <div class="card-header">
    Duração total
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$sessao->duracaoTotal}}</h5>
    <p class="card-text">Duração ideal que uma sessão deve durar, caso ela não tenha ocorrido, ou duração total de uma sessão que já ocorreu.</p>
  </div>
</div>
<br>
<div class="card">
  <div class="card-header">
    Nome do filme
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$filme}}</h5>
    <p class="card-text">Nome do título do filme que será ou foi exibido nessa sala.</p>
  </div>
</div>
<br>
<div class="card">
  <div class="card-header">
    Id da sala
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$sessao->sala}}</h5>
    <p class="card-text">Número da sala que passou ou passará o filme.</p>
  </div>
</div>
<br><br><br>
@endsection
