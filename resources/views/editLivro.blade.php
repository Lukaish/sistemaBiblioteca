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
                {{ __('Editar Livro') }}
            </h2>
        </x-slot>
        <div class="col-8 m-auto">
            <br>
            <h1 class="text-center">Editar Livro</h1>
            <hr>
            <br><br><br>
            <form name="formCad" id="formCad" method="post" action={{url("livros/$buscarLivro->id/update")}}>
                @csrf
                @method("PUT")
                <input class="form-control" type="text" value="{{$buscarLivro->id}}" name="id" id="id" placeholder="id" readonly><br>
                <input class="form-control" type="text" value="{{$buscarLivro->nome}}" name="nome" id="nome" placeholder="Nome"><br>
                <input class="form-control" type="date" value="{{$buscarLivro->dataPublicacao}}" name="dataPublicacao" id="dataPublicacao" placeholder="Data de publicação"><br>
                <input class="form-control" type="text" value="{{$buscarLivro->genero}}" name="genero" id="genero" placeholder="Gênero"><br>
                <input class="form-control" type="number" value="{{$buscarLivro->valor}}" name="valor" id="valor" placeholder="Valor"><br>
                <select class="form-control" name="id_estante" id="id_estante">
                    <option value="{{$buscarLivro->relEstante->id}}">{{$buscarLivro->relEstante->identificador}}</option>
                    @foreach($estantes as $e)
                    <option value="{{$e->id}}">{{$e->identificador}}</option>
                    @endforeach
                </select><br>
                <select class="form-control" name="id_autor" id="id_autor">
                <option value="{{$buscarLivro->relAutor->id}}">{{$buscarLivro->relAutor->nome}}</option>
                    @foreach($autores as $a)
                    <option value="{{$a->id}}">{{$a->nome}}</option>
                    @endforeach
                </select><br>
                <select class="form-control" name="id_editora" id="id_editora">
                <option value="{{$buscarLivro->relEditora->id}}">{{$buscarLivro->relEditora->nome}}</option>
                    @foreach($editoras as $ed)
                    <option value="{{$ed->id}}">{{$ed->nome}}</option>
                    @endforeach
                </select><br>
                <a href={{url("livros/$buscarLivro->id/update")}}>
                    <button class="btn btn-dark">Atualizar</button>
                </a>

            </form>

            @if($errors->any())

            @foreach($errors->all() as $error)
            <br>
            <div class="col-8 m-auto alert alert-danger text-center">
                <p class="error">{{ $error }}</p><br>
            </div>
            @endforeach

            @endif
            <br><br><br>
        </div>
    </x-app-layout>
</body>

</html>