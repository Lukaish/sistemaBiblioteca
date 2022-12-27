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
                {{ __('Cadastrar Editora') }}
            </h2>
        </x-slot>
        <br><br>
        <h1 class="text-center">Cadastrar Editora</h1>
        <hr>
        <br>
        <div class="col-8 m-auto">

            <form name="formCad" id="formCad" method="post" action="/createEditoras">
                @csrf
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome"><br>
                <input class="form-control" type="text" name="cnpj" id="cnpj" placeholder="CNPJ"><br>
                Data Criação:
                <input class="form-control" type="date" name="dataCriacao" id="dataCriacao" placeholder="Data de Criação"><br>


                <a href="/createEditoras">
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

        </div>
    </x-app-layout>
</body>

</html>