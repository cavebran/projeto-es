<?php

use App\Http\Controllers\SessaoController;
use App\Http\Controllers\FuncionarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('/', 'login');
Route::get('/', function() {
    if(session()->has('user')) {
        return redirect('/sessoes');
    }
    return view('login');
});

Route::post('/login', [FuncionarioController::class, 'FuncionarioLogin']);

Route::get('/logout', function() {
    if(session()->has('user')) {
        session()->pull('user');
    }
    return redirect('/');
});

Route::resource('/sessoes', SessaoController::class);
