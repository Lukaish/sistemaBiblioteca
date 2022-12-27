<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCreateAutorFormRequest;
use App\Models\ModelAutores;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    public function show()
    {
        $autor = ModelAutores::all();
        return view("showAutores", compact('autor'));
    }

    public function create(UpdateCreateAutorFormRequest $request)
    {
        ModelAutores::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'dataNascimento' => $request->dataNascimento
        ]);

        return redirect('/showAllAutores');
    }

    public function returnAutores()
    {
        return redirect('/showAllAutores');
    }

    public function returnCreate()
    {
        return view("createAutores");
    }

    public function visualizar($id)
    {
        $buscarAutor = ModelAutores::find($id);
        return view("visualizarAutor", compact('buscarAutor'));
    }

    public function edit($id)
    {
        $buscarAutor = ModelAutores::find($id);
        return view("editAutor", compact('buscarAutor'));
    }

    public function update(UpdateCreateAutorFormRequest $request, $id)
    {
        $autor = ModelAutores::findOrFail($id);
        $autor->nome = $request->nome;
        $autor->cpf = $request->cpf;
        $autor->dataNascimento = $request->dataNascimento;
        $autor->save();

        $autor = ModelAutores::all();
        return view("showAutores", compact('autor'));
    }

    public function delete($id)
    {
        $deleteAutor = ModelAutores::find($id);
        $deleteAutor->delete();
        return redirect('/showAllAutores');
    }
}
