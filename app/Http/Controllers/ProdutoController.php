<?php

namespace App\Http\Controllers;
use App\Models\Produto
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public fumction inex(){
        $produtos = produto::orderBy('nome')->get();
        return View('produtos.index',compact('produtos'));
    }
}
