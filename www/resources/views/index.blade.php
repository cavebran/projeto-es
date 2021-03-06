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
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{session('user')}}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="/logout">Deslogar</a>
            </div>
        </div>
    </nav>
</header>
<br>
<h1 class="text-center mt-5">SESSÕES</h1>
<hr>
    <a href="{{url("sessoes/create")}}">
        <button class="btn btn-success mb-2">Cadastrar</button>
    </a>
<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Data de início</th>
            <th scope="col">Duração total</th>
            <th scope="col">Filme</th>
            <th scope="col">Id da sala</th>
            <th scope="col">Status</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>

        @foreach($sessao as $sessaos)
        @php
            $filme=$sessaos->relFilmes($sessaos->filme)['titulo'];
        @endphp
        <tr>
            <th scope="row">#{{$sessaos->id}}</th>
            <td>{{$sessaos->dataInicio}}</td>
            <td>{{$sessaos->duracaoTotal}}</td>
            <td>{{$filme}}</td>
            <td>{{$sessaos->sala}}</td>
            <td>{{$sessaos->status}}</td>
            <td>
                <a href="{{url("sessoes/$sessaos->id")}}">
                    <button class="btn btn-primary">Visualizar</button>
                </a>
                <a href="{{url("sessoes/$sessaos->id/edit")}}">
                    <button class="btn btn-info">Editar</button>
                </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection