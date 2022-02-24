@extends('layouts.base')

@section('content')
<section class="container mt-4">
        <h1>Editar Cliente</h1>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/cliente">Devolver</a>
            </div>
        </div>
        <div class="row">
            <div class="col mt-4">
                <form action="/cliente/{{$cliente->id}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                    <label for="nombre" class="mt-2">
                        <span>Nombre</span>
                        <input type="text"
                        value="{{$cliente->nombre}}"
                        class="form-control"
                        id="nombre"
                        name="nombre"
                        required
                        autocomplete="name"
                        placeholder="Type Name"
                        >
                    </label> <br>
                    <label for="apellido" class="mt-2">
                        <span>Apellido</span>
                        <input type="text"
                        value="{{$cliente->apellido}}"
                        class="form-control"
                        id="apellido"
                        name="apellido"
                        required
                        autocomplete="apellido"
                        placeholder="Type apellido"
                        >
                    </label><br>
                    <label for="direccion" class="mt-2">
                        <span>Direccion</span>
                        <input type="text"
                        value="{{$cliente->direccion}}"
                        class="form-control"
                        id="direccion"
                        name="direccion"
                        required
                        autocomplete="direccion"
                        placeholder="Type direccion"
                        >
                    </label><br>
                    <label for="fecha_nacimiento" class="mt-2">
                        <span>Fecha Nacimiento</span>
                        <input type="date"
                        value="{{$cliente->fecha_nacimiento}}"
                        class="form-control"
                        id="fecha_nacimiento"
                        name="fecha_nacimiento"
                        required
                        >
                    </label><br>
                    <label for="telefono" class="mt-2">
                        <span>Telefono</span>
                        <input type="text"
                        value="{{$cliente->telefono}}"
                        class="form-control"
                        id="telefono"
                        name="telefono"
                        required
                        autocomplete="telefono"
                        placeholder="Type telefono"
                        >
                    </label><br>
                    <label for="email" class="mt-2">
                        <span>email</span>
                        <input type="email"
                        value="{{$cliente->email}}"
                        class="form-control"
                        id="email"
                        name="email"
                        required
                        autocomplete="email"
                        placeholder="Type email"
                        >
                    </label><br>
                    <label for="categoria" class="mt-2">
                        <span>Categoria</span>
                        <input list="categoria"
                        value="{{$cliente->categoria}}"
                        class="form-control"
                        name="categoria"
                        required>
                        <datalist id="categoria">
                            <option value="Cat A1"></option>
                            <option value="Cat A2"></option>
                        </datalist>
                    </label> <br>
                    </div>
                    <input type="submit" value="Editar" class="btn btn-primary mt-2">
                </form>
            </div>
        </div>
    </section>
@endsection
