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
                <li class="nav-item active">
                    <a class="nav-link" href="/salas">Salas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sessoes">Sessões</a>
                </li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{session('user')}}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item disabled text-muted" href="#">Perfil</a>
                <a class="dropdown-item" href="/logout">Deslogar</a>
            </div>
        </div>
    </nav>
</header>
<br>
<h1 class="text-center mt-5">SALAS</h1>
<hr>
<a href="#">
    <button class="btn btn-success mb-2">Cadastrar</button>
</a>
<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Tipo</th>
            <th scope="col">Capacidade</th>
            <th scope="col">Intervalo Mínimo</th>
            <th scope="col">Intervalo Ideal</th>
        </tr>
    </thead>
    <tbody>

        @foreach($salas as $sala)
        <tr>
            <th scope="row">#{{$sala->id}}</th>
            <td>{{$sala->tipo}}</td>
            <td>{{$sala->capacidade}}</td>
            <td>{{$sala->intervaloMin}}</td>
            <td>{{$sala->intervaloIdeal}}</td>
            <td>
                <a href="#">
                    <button class="btn btn-primary">Visualizar</button>
                </a>
                <a href="#">
                    <button class="btn btn-info">Editar</button>
                </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
