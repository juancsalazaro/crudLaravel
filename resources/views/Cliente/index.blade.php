@extends('layouts.base')

@section('content')
<section class="container mt-4">
        <h1>CLIENTES</h1>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="/cliente/create">Crear nuevo Cliente</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="default">
                <thead>
                    <tr>
                        <th>Nombre |</th>
                        <th> Apellido |</th>
                        <th> Direccion |</th>
                        <th> Fecha Nacimiento |</th>
                        <th> Telefono |</th>
                        <th> Email |</th>
                        <th> Categoria |</th>
                        <th> Acciones </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @foreach($clientes as $cliente)
                                {{$cliente->nombre}} <br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($clientes as $cliente)
                                {{$cliente->apellido}} <br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($clientes as $cliente)
                                {{$cliente->direccion}} <br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($clientes as $cliente)
                                {{$cliente->fecha_nacimiento}} <br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($clientes as $cliente)
                                {{$cliente->telefono}} <br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($clientes as $cliente)
                                {{$cliente->email}} <br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($clientes as $cliente)
                                {{$cliente->categoria}} <br>
                            @endforeach
                        </td>
                        <td>
                        @foreach($clientes as $cliente)
                        <a href="cliente/{{$cliente->id}}/edit" class="btn btn-primary p-0">Editar</a>
                        <a href="cliente/{{$cliente->id}}/delete" class="btn btn-danger p-0">Eliminar</a>
                                 <br>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </section>
@endsection
