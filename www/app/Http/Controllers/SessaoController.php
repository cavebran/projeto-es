<?php

namespace App\Http\Controllers;

use App\Models\ModelFilme;
use App\Models\ModelSala;
use App\Http\Requests\SessaoRequest;
use App\Models\ModelSessao;

class SessaoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessao = ModelSessao::all()->sortByDesc('dataInicio');
        return View('index', compact('sessao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filmes = ModelFilme::all();
        $salas = ModelSala::all();
        return View('create', compact('filmes', 'salas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SessaoRequest $request)
    {
        $cad = ModelSessao::create([
            'dataInicio'=>$request->dataInicio,
            'status'=>$request->status,
            'filme'=>$request->filme,
            'sala'=>$request->sala
        ]);
        if($cad) {
            return redirect('sessoes');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sessao = ModelSessao::find($id);
        return View('show', compact('sessao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sessao = ModelSessao::find($id);
        $filmes = ModelFilme::all();
        $salas = ModelSala::all();
        return View('create', compact('sessao', 'filmes', 'salas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SessaoRequest $request, $id)
    {
        ModelSessao::where('id', $id)->update([
            'dataInicio'=>$request->dataInicio,
            'status'=>$request->status,
            'filme'=>$request->filme,
            'sala'=>$request->sala
        ]);
        return redirect('sessoes');
    }
}
