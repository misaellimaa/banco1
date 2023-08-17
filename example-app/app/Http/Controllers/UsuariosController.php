<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index() {
        return Usuarios::all();
    }

    public function post(Request $req) {
        Usuarios::create([
            "cpf"=> $req->cpf,
            "nome"=> $req->nome,
            "data_nascimento"=>$req->data_nascimento
        ]);
    }
}
