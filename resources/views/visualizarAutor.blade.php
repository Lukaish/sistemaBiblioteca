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
                {{ __('Visualizar Autor') }}
            </h2>
        </x-slot>
        <div class="col-8 m-auto">
            <br>
            <h1 class="text-center">Visualizar</h1>
            <hr>
            <br><br><br>
            @php
            $a=$buscarAutor->find($buscarAutor->id);

            @endphp
            <form name="formCad" id="formCad" method="get" action="{{url('returnAutores')}}">
                @csrf
                <input class="form-control" type="text" value="{{$a->id}}" name="id" id="id" readonly><br>
                <input class="form-control" type="text" value="{{$a->nome}}" name="nome" id="nome" readonly><br>
                <input class="form-control" type="text" value="{{$a->cpf}}" name="cpf" id="cpf" readonly><br>
                Data Nascimento:
                <input class="form-control" type="date" value="{{$a->dataNascimento}}" name="dataNascimento" id="dataNascimento" readonly><br>

                <a href="{{url("returnAutores")}}">
                    <button class="btn btn-dark">Autores</button>
                </a>

            </form>
        </div>
    </x-app-layout>
</body>

</html>