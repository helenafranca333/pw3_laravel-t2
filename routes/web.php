<?php
use App\http\Controller\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produtos',[ProdutoController])