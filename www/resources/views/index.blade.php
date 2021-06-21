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
                    <a class="nav-link" href="#">Salas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sessões <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<br>
<h1 class="text-center mt-5">Sessões</h1>
<a href="{{url("sessoes/create")}}">
    <button class="btn btn-primary">Cadastrar</button>
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
            $filme=$sessaos->find($sessaos->filme)->relFilmes;
        
        @endphp
        <tr>
            <th scope="row">#{{$sessaos->id}}</th>
            <td>{{$sessaos->dataInicio}}</td>
            <td>{{$sessaos->duracaoTotal}}</td>
            <td>{{$filme->titulo}}</td>
            <td>{{$sessaos->sala}}</td>
            <td>{{$sessaos->status}}</td>
            <td>
                <a href="{{url("sessoes/$sessaos->id")}}">
                    <button class="btn btn-primary">Visualizar</button>
                </a>
                <a href="{{url("sessoes/$sessaos->id/edit")}}">
                    <button class="btn btn-primary">Editar</button>
                </a>
                <a href="">
                    <button class="btn btn-primary">Deletar</button>
                </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
