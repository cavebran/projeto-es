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
<h1 class="text-center mt-5">@if(isset($sessao)) Editar uma Sessão @else Cadastrar nova sessão @endif</h1>

@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger"> 
        @foreach($errors->all() as $erro)
            {{$erro}} <br>
        @endforeach
    </div>
@endif

@if(isset($sessao))
    <form method="POST" name="formEdit" id="formEdit" action="{{url("sessoes/$sessao->id/")}}">
    @method('PUT')
@else
    <form method="POST" name="formCad" id="formCad" action="{{url('sessoes/')}}">
@endif

    @csrf
    <input class="form-control" type="text" name="dataInicio" id="dataInicio" value="{{$sessao->dataInicio ?? ''}}" placeholder="AAAA-MM-DD HH:MM:SS"><br>
    <div class="input-group">
        <select class="custom-select" id="status" name="status">
            <option selected value="{{$sessao->status ?? ''}}">{{$sessao->status ?? 'Escolha um Status'}}</option>
            <option value="NAO_INICIADA">Não iniciada</option>
            <option value="EM_ANDAMENTO">Em andamento</option>
            <option value="ATRASADA">Atrasada</option>
            <option value="FINALIZADA">Finalizada</option>
        </select>
        <div class="input-group-append">
            <label class="input-group-text" for="inputGroupSelect02">Options</label>
        </div>
    </div><br>
    <div class="input-group">
        <select class="custom-select" id="filme" name="filme">
            <option selected value="{{$sessao->relFilmes->id ?? ''}}">{{$sessao->relFilmes->titulo ?? 'Escolha um Filme'}}</option>
            @foreach($filmes as $filme)
                <option value="{{$filme->id}}">{{$filme->titulo}}</option>
            @endforeach
        </select>
        <div class="input-group-append">
            <label class="input-group-text" for="inputGroupSelect02">Options</label>
        </div>
    </div><br>
    <div class="input-group">
        <select class="custom-select" id="sala" name="sala">
            <option selected value="{{$sessao->relSalas->id ?? ''}}">{{$sessao->relSalas->id ?? 'Escolha uma Sala'}}</option>
            @foreach($salas as $sala)
                <option value="{{$sala->id}}">{{$sala->id}}</option>
            @endforeach
        </select>
        <div class="input-group-append">
            <label class="input-group-text" for="inputGroupSelect02">Options</label>
        </div>
    </div><br>
    <input class="btn btn-primary" type="submit" value="@if(isset($sessao)) Editar @else Cadastrar @endif">

</form>
@endsection
