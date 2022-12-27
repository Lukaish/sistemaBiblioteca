<html>

<head>
    <title>
        Biblioteca
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Comprar Livros') }}
            </h2>
        </x-slot>
  
        <br><br>
        <h1 class="text-center">Comprar Livros</h1>
        <hr>
        <br>
        <br>
        <div class="col-8 m-auto">
            @csrf
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Editora</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($livros as $l)
                    @php
                    $a=$l->find($l->id)->relAutor;
                    $e=$l->find($l->id)->relEstante;
                    $ed=$l->find($l->id)->relEditora;
                    @endphp
                    <tr>
                        <th scope="row">{{$l->id}}</th>
                        <td> {{$l->nome}}</td>                      
                        <td> {{$a->nome}}</td>
                        <td> {{$ed->nome}}</td>


                        <th>
                            <a href="{{url("livros/$l->id/comprar")}}">
                                <button class="btn btn-success">Comprar</button>
                            </a>
                        </th>
                    </tr>


                    @endforeach
                </tbody>

            </table>
            <br><br><br>
        </div>
    </x-app-layout>
</body>

</html>