<?php
use App\Models\User;
use App\http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produtos',[ProdutoController::class , 'index']);
Route::post('/produtos',[ProdutoController::class , 'store']);

Route::get('/teste-orm', function() {
    User::create([
        'name'=> 'ana clara santos',
        'email'=> 'ana.santos@escola.sp.gov.br',
        'password'=>'12345678',

    ]);
    return User::all();
});