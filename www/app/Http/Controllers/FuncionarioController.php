<?php

namespace App\Http\Controllers;

use App\Models\ModelFuncionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function FuncionarioLogin(Request $request) {
        $data = $request->input();
        $funcionario = ModelFuncionario::find($data['user']);
        
        if($funcionario) {
            $funcionario = $funcionario->toArray();
        }

        if($funcionario && $funcionario['senha'] == $data['pass'] && $funcionario['cargo'] == 'GERENTE') {
            $request->session()->put('user', $funcionario['nome']);
            return redirect('/sessoes');
        }
        else {
            return redirect('/');
        }
    }
}
