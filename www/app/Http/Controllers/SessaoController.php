<?php

namespace App\Http\Controllers;

use App\Models\ModelFilme;
use App\Models\ModelSala;
use Illuminate\Http\Request;
use App\Models\ModelSessao;

class SessaoController extends Controller
{
    
    private $objSessao;
    private $objFilmes;
    private $objSalas;

    public function __construct()
    {
        $this->objSessao = new ModelSessao();
        $this->objFilmes = new ModelFilme();
        $this->objSalas = new ModelSala();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessao = $this->objSessao->all()->sortByDesc('dataInicio');
        return View('index', compact('sessao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filmes = $this->objFilmes->all();
        $salas = $this->objSalas->all();
        return View('create', compact('filmes', 'salas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = $this->objSessao->create([
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
        $sessao = $this->objSessao->find($id);
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
        $sessao = $this->objSessao->find($id);
        $filmes = $this->objFilmes->all();
        $salas = $this->objSalas->all();
        return View('edit', compact('sessao', 'filmes', 'salas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
