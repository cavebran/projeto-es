<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function FuncionarioLogin(Request $request) {
        $data = $request->input();
        $request->session()->put('user', $data['user']);
        return redirect('/sessoes');
    }
}
