@extends('templates.template')

@section('content')
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">CINEMARCOS</a>
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
                    <a class="nav-link" href="#">Filme</a>
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
                    <a class="dropdown-item" href="#">Perfil</a>
                    <a class="dropdown-item" href="/logout">Deslogar</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<br>
<h1 class="text-center mt-5">Detalhes da sessão #{{$sessao->id}}</h1>
@php
    $filme=$sessao->find($sessao->filme)->relFilmes;
@endphp
{{$sessao->dataInicio}}<br>
{{$sessao->status}}<br>
{{$sessao->duracaoTotal}}<br>
{{$filme->titulo}}<br>
{{$sessao->sala}}<br>

@endsection
