<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCreateEstanteFormRequest;
use App\Models\ModelEstante;
use Illuminate\Http\Request;

class EstanteController extends Controller
{
    public function create(UpdateCreateEstanteFormRequest $request)
    {
        ModelEstante::create([
            'identificador' => $request->identificador
        ]);

        return redirect('/showEstantes');
    }

    public function returnCreate()
    {
        return view("createEstante");
    }

    public function show()
    {
        $estante = ModelEstante::all();
        return view("showEstantes", compact('estante'));
    }

    public function visualizar($id)
    {
        $buscarEstante = ModelEstante::find($id);
        return view("visualizarEstante", compact('buscarEstante'));
    }

    public function edit($id)
    {
        $buscarEstante = ModelEstante::find($id);
        return view("editEstante", compact('buscarEstante'));
    }


    public function update(UpdateCreateEstanteFormRequest $request, $id)
    {
        $estantes = ModelEstante::findOrFail($id);
        $estantes->identificador = $request->identificador;
        $estantes->save();

        $estante = ModelEstante::all();
        return view("showEstantes", compact('estante'));
    }

    public function delete($id)
    {
        $deleteEstante = ModelEstante::find($id);
        $deleteEstante->delete();
        return redirect('/showEstantes');
    }
}
