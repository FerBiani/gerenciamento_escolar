<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Nivel, Usuario};

class UsuarioController extends Controller
{
    public function index() {

        $usuarios = Usuario::all();

        return view('index', compact('usuarios'));
    }

    public function create() {

        $niveis = Nivel::all();

        return view('form', compact('niveis'));
    }

    public function store(Request $request) {
        
        // Usuario::create([
        //     'nome' => $request->nome,
        //     'email' => $request->email,
        //     'data_nascimento' => $request->data_nascimento,
        //     'nivel_id' => $request->nivel_id
        // ]);

        Usuario::create($request->all());

        return redirect('/');

    }

    public function edit($id) {
        $usuario = Usuario::findOrFail($id);
        $niveis = Nivel::all();

        return view('form', compact('usuario', 'niveis'));
    }

    public function update(Request $request, $id) {

        $usuario = Usuario::findOrFail($id);

        // $usuario->update([
        //     'nome' => $request->nome,
        //     'email' => $request->email,
        //     'data_nascimento' => $request->data_nascimento,
        //     'nivel_id' => $request->nivel_id
        // ]);

        $usuario->update($request->all());

        return redirect('/');

    }

    // public function soma($a, $b) {
    //     return 'Soma: '.($a + $b);
    // }
}
