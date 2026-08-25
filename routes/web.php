<?php
use App\http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::View('/landing','landing');
Route::View('/admin','admin.dashboard');

Route::get('/produtos',[ProdutoController::class , 'index']);
Route::post('/produtos',[ProdutoController::class , 'store']);
