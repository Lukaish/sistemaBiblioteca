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
                {{ __('Visualizar Editora') }}
            </h2>
        </x-slot>
        <div class="col-8 m-auto">
            <br>
            <h1 class="text-center">Visualizar Editora</h1>
            <hr>
            <br><br><br>
            @php
            $edt=$buscarEditora->find($buscarEditora->id);

            @endphp
            <form name="formCad" id="formCad" method="get" action="{{url('returnEditoras')}}">
                @csrf
                <input class="form-control" type="text" value="{{$edt->id}}" name="id" id="id" readonly><br>
                <input class="form-control" type="text" value="{{$edt->nome}}" name="nome" id="nome" readonly><br>
                <input class="form-control" type="text" value="{{$edt->cnpj}}" name="cpf" id="cpf" readonly><br>
                Data Criação:
                <input class="form-control" type="date" value="{{$edt->dataCriacao}}" name="dataCriacao" id="dataCriacao" readonly><br>

                <a href="{{url("returnEditoras")}}">
                    <button class="btn btn-dark">Editoras</button>
                </a>

            </form>
        </div>
    </x-app-layout>
</body>

</html>