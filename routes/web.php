<?php
use App\Http\Controllers\UserController;
use App\Models\User;
use App\http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/produtos',[ProdutoController::class , 'index']);
Route::post('/produtos',[ProdutoController::class , 'store']);
Route::view('/landing','landing');
Route::view('/admin','admin.dashboard');
Route::get('/usuarios/novo',[UserController::class,'create']);
Route::Post('/usuarios',[UserController::class,'store']);
Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/eventos/novo', [EventoController::class, 'create']);
Route::post('/eventos', [EventoController::class, 'store']);

Route::get('/teste-orm', function() {
    User::create([
        'name'=> 'ana clara santos',
        'email'=> 'ana.santos@escola.sp.gov.br',
        'password'=>'12345678',

    ]);
    return User::all();
});