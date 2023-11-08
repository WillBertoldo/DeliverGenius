<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasFiscaisController;

Route::get('/processar-notas', [NotasFiscaisController::class, 'processarNotas']);
Route::get('/buscar-por-remetente/{cnpj}', [NotasFiscaisController::class, 'buscarPorRemetente']);
Route::get('/', function () {
    return view('welcome');
});
