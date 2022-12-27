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
                {{ __('Editar Estante') }}
            </h2>
        </x-slot>
        <div class="col-8 m-auto">
            <br>
            <h1 class="text-center">Editar Estante</h1>
            <hr>
            <br><br><br>
            @php
            $est=$buscarEstante->find($buscarEstante->id);

            @endphp
            <form name="formCad" id="formCad" method="post" action={{url("estantes/$est->id/update")}}>
                @csrf
                @method("PUT")
                <input class="form-control" type="text" value="{{$est->id}}" name="id" id="id" readonly><br>
                <input class="form-control" type="text" value="{{$est->identificador}}" name="identificador" id="identificador"><br>

                <a href={{url("estantes/$est->id/update")}}>
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
        </div>
    </x-app-layout>
</body>

</html>