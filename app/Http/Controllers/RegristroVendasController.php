<?php

namespace App\Http\Controllers;

use App\Mail\BuyBook;
use App\Mail\TestEmail;
use App\Models\ModelLivros;
use App\Models\ModelRegistroVendas;
use Illuminate\Support\Facades\Mail;



class RegristroVendasController extends Controller
{
    public function comprarLivro($id)
    {
        $livro = ModelLivros::findOrFail($id);

        ModelRegistroVendas::create([
            'nome' => auth()->user()->name,
            'nomeLivro' => $livro->nome,
            'email' =>  auth()->user()->email,
            'valor' =>  $livro->valor,
            'dataVenda' => date('d/m/Y'),
        ]);
        
        Mail::to(auth()->user()->email)->send(new TestEmail(auth()->user()->email, auth()->user()->name, $livro->valor, $livro->nome));
        $livro->delete();
        $livros = ModelLivros::all();
        return view('showLivros', compact('livros'));
    }

    public function vendas()
    {
        $registro = ModelRegistroVendas::all();
        return view('registroVendas', compact('registro'));
    }
}
