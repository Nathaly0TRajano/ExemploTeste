<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){
        return Tarefa::all();
    }

    public function store(Request $request){
        $tarefa = Tarefa::create($request->all());
        return response()->json($tarefa,201);
    }

    public function show(string $id){
        return Tarefa::find($id);
    }

    // string $id -> pra dizer que aquele dado(id no caso) vai ser recebido como string.
    // só pra didático, esse tipo de código pra update pode gerar vários erros, então o melhor é fazer ele todo.
    public function update(Request $request, string $id){
        $tarefa = Tarefa::find($id);
        $tarefa->udpate($request->all());
        return response()->json($tarefa,200);
    }

    public function destroy(string $id){
        $tarefa = Tarefa::find($id)->delete();
        return response()->json(null, 204);

    }

}