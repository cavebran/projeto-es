@extends('templates.template')

@section('content')
<h1 class="text-center">aaaa</h1>
<hr>

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
          <th scope="row">#{{$sessaos->idSessao}}</th>
          <td>{{$sessaos->dataInicio}}</td>
          <td>{{$sessaos->duracaoTotal}}</td>
          <td>{{$filme->titulo}}</td>
          <td>{{$sessaos->sala}}</td>
          <td>{{$sessaos->status}}</td>
          <td>
            <a href= "">
                <button class="btn btn-primary">Visualizar</button>
            </a>
            <a href= "">
              <button class="btn btn-primary">Editar</button>
            </a>
            <a href= "">
              <button class="btn btn-primary">Deletar</button>
            </a>
          </td>
        </tr>
      @endforeach
      
    </tbody>
  </table>

@endsection
