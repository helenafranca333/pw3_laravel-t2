<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
       $dadosValidados = $request->validate([
        'name'=> 'required|min:3|max:255',
        'email'=> 'required|email|unique:users,email',
        'password'=> 'required|min:6',
       ]);
      User::create($dadosValidos);
      return redirect('/admin')->with('sucesso','usuario cadastrado com sucesso');
    }
}
