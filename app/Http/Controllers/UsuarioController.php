<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Nivel, Usuario, Materia};
use App\Http\Requests\UsuarioStoreRequest;
use DB;

class UsuarioController extends Controller
{
    public function index() {

        //Apenas os ativos
        $usuarios = Usuario::all();

        //Excluídos e não excluídos
        //$usuariosDeletadoseNaoDeletados = Usuario::withTrashed()->get();

        //Só excluídos
        $usuariosInativos = Usuario::onlyTrashed()->get();

        return view('index', compact('usuarios', 'usuariosInativos'));
    }

    public function create() {

        $niveis = Nivel::all();
        $materias = Materia::all();

        return view('form', compact('niveis', 'materias'));
    }

    public function store(UsuarioStoreRequest $request) {
        
        DB::beginTransaction();
        try{
        
            $usuario = Usuario::create($request->all());

            $usuario->materias()->sync(
                [
                    1 => ['carga_horaria' => 20], 
                    2 => ['carga_horaria' => 25]
                ]
            );

            DB::commit();
    
            return back()->with('success', 'Usuário cadastrado com sucesso');

        }catch(\Exception $e){
            DB::rollback();
            return back()->with('error', 'Erro no servidor');
        }

    }

    public function edit($id) {
        $usuario = Usuario::findOrFail($id);
        $niveis = Nivel::all();

        return view('form', compact('usuario', 'niveis'));
    }

    public function update(UsuarioStoreRequest $request, $id) {

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

    public function destroy($id){
       $usuario = Usuario::findOrFail($id);
       $usuario->delete();
       return back();
    }

    public function restore($id){
        $usuario = Usuario::onlyTrashed()->findOrFail($id);
        $usuario->restore();
        return back();
    }
}
