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
                {{ __('Cadastrar Livro') }}
            </h2>
        </x-slot>
        <br><br>
        <h1 class="text-center">Cadastrar Livro</h1>
        <hr>
        <br>
        <div class="col-8 m-auto">

            <form name="formCad" id="formCad" method="post" action="{{url('createLivros')}}">
                @csrf
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome"><br>
                Data Publicação:
                <input class="form-control" type="date" name="dataPublicacao" id="dataPublicacao" placeholder="Data de publicação"><br>
                <input class="form-control" type="text" name="genero" id="genero" placeholder="Gênero"><br>
                <input class="form-control" type="number" name="valor" id="valor" placeholder="Valor"><br>
                <select class="form-control" name="id_estante" id="id_estante">
                    <option value="">Estantes</option>
                    @foreach($estantes as $e)
                    <option value="{{$e->id}}">{{$e->identificador}}</option>
                    @endforeach
                </select><br>
                <select class="form-control" name="id_autor" id="id_autor">
                    <option value="">Autores</option>
                    @foreach($autores as $a)
                    <option value="{{$a->id}}">{{$a->nome}}</option>
                    @endforeach
                </select><br>
                <select class="form-control" name="id_editora" id="id_editora">
                    <option value="">Editoras</option>
                    @foreach($editoras as $ed)
                    <option value="{{$ed->id}}">{{$ed->nome}}</option>
                    @endforeach
                </select><br>

                <a href="{{url("createLivros")}}">
                    <button class="btn btn-dark">Cadastrar</button>
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