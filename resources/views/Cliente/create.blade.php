@extends('layouts.base')

@section('content')
<section class="container mt-4">
        <h1>Crear Cliente</h1>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/cliente">Devolver</a>
            </div>
        </div>
        <div class="row">
            <div class="col mt-4">
                <form action="/cliente" method="POST">
                    @csrf
                    <div class="form-group">
                    <label for="nombre" class="mt-2">
                        <span>Nombre</span>
                        <input type="text"
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
                        class="form-control"
                        id="fecha_nacimiento"
                        name="fecha_nacimiento"
                        required
                        >
                    </label><br>
                    <label for="telefono" class="mt-2">
                        <span>Telefono</span>
                        <input type="text"
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
                        class="form-control"
                        name="categoria"
                        required>
                        <datalist id="categoria">
                            <option value="Cat A1"></option>
                            <option value="Cat A2"></option>
                        </datalist>
                    </label> <br>
                    </div>
                    <input type="submit" value="Crear" class="btn btn-primary mt-2">
                </form>
            </div>
        </div>
    </section>
@endsection
