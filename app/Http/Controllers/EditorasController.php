<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCreateEditoraFormRequest;
use App\Models\ModelEditoras;
use Illuminate\Http\Request;

class EditorasController extends Controller
{
    public function show()
    {
        $editora = ModelEditoras::all();
        return view("showEditoras", compact('editora'));
    }

    public function create(UpdateCreateEditoraFormRequest $request)
    {
        ModelEditoras::create([
            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'dataCriacao' => $request->dataCriacao
        ]);

        return redirect('/showAllEditoras');
    }

    public function returnEditoras()
    {
        return redirect('/showAllEditoras');
    }

    public function visualizar($id)
    {
        $buscarEditora = ModelEditoras::find($id);
        return view("visualizarEditoras", compact('buscarEditora'));
    }

    public function returnCreate()
    {
        return view("createEditoras");
    }

    public function edit($id)
    {
        $buscarEditora = ModelEditoras::find($id);
        return view("editEditora", compact('buscarEditora'));
    }

    public function update(UpdateCreateEditoraFormRequest $request, $id)
    {
        $editora = ModelEditoras::findOrFail($id);
        $editora->nome = $request->nome;
        $editora->cnpj = $request->cnpj;
        $editora->dataCriacao = $request->dataCriacao;
        $editora->save();

        $editora = ModelEditoras::all();
        return view("showEditoras", compact('editora'));
    }

    public function delete($id)
    {
        $deleteEditora = ModelEditoras::find($id);
        $deleteEditora->delete();
        return redirect('/showAllEditoras');
    }
}
