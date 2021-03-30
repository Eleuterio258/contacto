<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PagamentoController;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('allContactos', 'App\Http\Controllers\ContactoController@allContactos');
Route::post('addContacto', 'App\Http\Controllers\ContactoController@addContacto');
Route::post('pagarProduto', 'App\Http\Controllers\PagamentoController@pagarProduto');
