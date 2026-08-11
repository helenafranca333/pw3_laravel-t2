<?php
use App\http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/produtos',[ProdutoController::class , 'index']);
Route::post('/produtos',[ProdutoController::class , 'store']);
Route::View('/landing','landing');