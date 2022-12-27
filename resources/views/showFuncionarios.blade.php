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
                {{ __('Lista Funcionarios') }}
            </h2>
        </x-slot>

        <br><br>
        <h1 class="text-center">Lista Funcionarios</h1>
        <hr>

        <div class="text-md-center mt-3 m-4">
            <a href="{{url('funcionarios/create')}}">
                <button class="btn btn-success">Inserir</button>
                <a />
        </div>
        <div class="col-8 m-auto">
            @csrf
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Salário</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($funcionarios as $f)
                    @php
                    $f=$f->find($f->id);
                    @endphp
                    <tr>
                        <th scope="row">{{$f->id}}</th>
                        <td> {{$f->nome}}</td>
                        <td> {{$f->cpf}}</td>
                        <td> {{$f->dataNascimento}}</td>
                        <td><b>R$</b> {{$f->salario}}</td>

                        <th>
                            <a href="{{url("funcionarios/$f->id/visualizar")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                        </th>
                        <th>
                            <a href="{{url("funcionarios/$f->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                        </th>

                        <th>
                            <a href="{{url("funcionarios/$f->id/delete")}}">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </th>
                    </tr>


                    @endforeach
                </tbody>

            </table>

        </div>
    </x-app-layout>
</body>

</html>