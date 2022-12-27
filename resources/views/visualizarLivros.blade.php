<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Visualizar Livro') }}
            </h2>
        </x-slot>
        <div class="col-8 m-auto">
            <br>
            <h1 class="text-center">Visualizar Livros</h1>
            <hr>
            <br><br><br>
            @php
            $l=$buscarLivro->find($buscarLivro->id);
            $a=$buscarLivro->find($buscarLivro->id)->relAutor;
            $e=$buscarLivro->find($buscarLivro->id)->relEstante;
            $ed=$buscarLivro->find($buscarLivro->id)->relEditora;
            @endphp
            <form name="formCad" id="formCad" method="get" action="{{url('returnLivros')}}">
                @csrf
                <input class="form-control" type="text" value="{{$l->id}}" name="id" id="id" readonly><br>
                <input class="form-control" type="text" value="{{$l->nome}}" name="nome" id="nome" readonly><br>
                <input class="form-control" type="text" value="{{$l->genero}}" name="genero" id="genero" readonly><br>
                <input class="form-control" type="text" value="{{$l->valor}}" name="valor" id="valor" readonly><br>
                Data Publicação:
                <input class="form-control" type="date" value="{{$l->dataPublicacao}}" name="dataPublicacao" id="dataPublicacao" readonly><br>
                <input class="form-control" type="text" value="{{$a->nome}}" name="autor" id="autor" readonly><br>
                <input class="form-control" type="text" value="{{$e->identificador}}" name="estante" id="estante" readonly><br>
                <input class="form-control" type="text" value="{{$ed->nome}}" name="editora" id="editora" readonly><br>

                <a href="{{url("returnLivros")}}">
                    <button class="btn btn-dark">Livros</button>
                </a>
                <br><br><br>
            </form>
        </div>
    </x-app-layout>
</body>

</html>