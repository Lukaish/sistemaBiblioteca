<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCreateLivroRequest;
use App\Models\ModelAutores;
use App\Models\ModelEditoras;
use App\Models\ModelEstante;
use App\Models\ModelLivros;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function show()
    {
        $livros = ModelLivros::all();
        return view("showLivros", compact('livros'));
    }

    public function returnCreate()
    {  
         $autores = ModelAutores::all();
         $estantes = ModelEstante::all();
         $editoras = ModelEditoras::all();
        return view("createLivros", compact('autores', 'estantes', 'editoras'));
    }

    public function create(UpdateCreateLivroRequest $request)
    {
        ModelLivros::create([
            'nome' => $request->nome,
            'dataPublicacao' => $request->dataPublicacao,
            'genero' => $request->genero,
            'valor' => $request->valor,
            'id_autor' => $request->id_autor,
            'id_estante' => $request->id_estante,
            'id_editora' => $request->id_editora
        ]);

        return redirect('/showAllLivros');
    }

    public function returnLivros()
    {
        return redirect('/showAllLivros');
    }

    public function visualizar($id)
    {
        $buscarLivro = ModelLivros::find($id);
        return view("visualizarLivros", compact('buscarLivro'));
    }

    public function edit($id)
    {
        $buscarLivro = ModelLivros::find($id);
        $autores = ModelAutores::all();
        $estantes = ModelEstante::all();
        $editoras = ModelEditoras::all();
        return view("editLivro", compact('buscarLivro', 'autores', 'estantes', 'editoras'));
    }

    public function update(UpdateCreateLivroRequest $request, $id)
    {
        $livro = ModelLivros::findOrFail($id);
        $livro->nome = $request->nome;
        $livro->dataPublicacao = $request->dataPublicacao;
        $livro->genero = $request->genero;
        $livro->valor = $request->valor;
        $livro->id_autor = $request->id_autor;
        $livro->id_estante = $request->id_estante;
        $livro->id_editora = $request->id_editora;
        $livro->save();

        $livros = ModelLivros::all();
        return view("showLivros", compact('livros'));
    }

    public function delete($id)
    {
        $delete = ModelLivros::find($id);
        $delete->delete();
        return redirect('/showAllLivros');
    }

    public function buy()
    {
        $livros = ModelLivros::all();
        return view('comprarLivros', compact('livros'));
    }

  
}
