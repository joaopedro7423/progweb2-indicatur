<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function listaUsuarios()
    {
        $users = User::all();

        return view('usuario.ListagemUsuario')->with(compact('users'));
    }
}
