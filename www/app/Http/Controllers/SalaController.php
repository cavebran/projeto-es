<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelSala;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = ModelSala::all();
        return View('index-sala', compact('salas'));
    }
}
