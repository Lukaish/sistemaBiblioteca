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
                {{ __('Registro Vendas') }}
            </h2>
        </x-slot>

        <br><br>
        <h1 class="text-center">Registro Vendas</h1>
        <hr>
        <div class="col-8 m-auto">
            @csrf
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Livro</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Email</th>
                        <th scope="col">Data Venda</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($registro as $r)
                    @php
                    $r=$r->find($r->id);
                    @endphp
                    <tr>
                        <th scope="row">{{$r->id}}</th>
                        <td> {{$r->nome}}</td>
                        <td> {{$r->nomeLivro}}</td>
                        <td><b>R$</b> {{$r->valor}}</td>
                        <td> {{$r->email}}</td>
                        <td> {{$r->dataVenda}}</td>
                    </tr>

                    @endforeach
                </tbody>

            </table>

        </div>
    </x-app-layout>
</body>

</html>