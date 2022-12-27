<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCreateFuncionariosFormRequest;
use App\Models\ModelFuncionarios;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function show()
    {
        $funcionarios = ModelFuncionarios::all();
        return view("showFuncionarios", compact('funcionarios'));
    }

    public function create(UpdateCreateFuncionariosFormRequest $request)
    {
        ModelFuncionarios::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'dataNascimento' => $request->dataNascimento,
            'salario' => $request->salario,
        ]);

        return redirect('/showAllFuncionarios');
    }

    public function returnFuncionarios()
    {
        return redirect('/showAllFuncionarios');
    }

    public function returnCreate()
    {
        return view("createFuncionarios");
    }

    public function visualizar($id)
    {
        $buscaFuncionario = ModelFuncionarios::find($id);
        return view("visualizarFuncionario", compact('buscaFuncionario'));
    }

    public function edit($id)
    {
        $buscarFuncionario = ModelFuncionarios::find($id);
        return view("editFuncionario", compact('buscarFuncionario'));
    }

    public function update(UpdateCreateFuncionariosFormRequest $request, $id)
    {
        $funcionario = ModelFuncionarios::findOrFail($id);
        $funcionario->nome = $request->nome;
        $funcionario->cpf = $request->cpf;
        $funcionario->dataNascimento = $request->dataNascimento;
        $funcionario->salario = $request->salario;
        $funcionario->save();

        $funcionarios = ModelFuncionarios::all();
        return view("showFuncionarios", compact('funcionarios'));
    }

    public function delete($id)
    {
        $deleteFuncionario= ModelFuncionarios::find($id);
        $deleteFuncionario->delete();
        return redirect('/showAllFuncionarios');
    }
}
