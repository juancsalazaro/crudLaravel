@extends('layouts.base')

@section('content')
<section class="container mt-4">
        <h1>Eliminar Cliente</h1>
        <span style="font-size:1.8rem">Nombre:  {{$cliente->nombre}}</span>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/cliente">Devolver</a>
            </div>
        </div>
        <div class="row">
            <div class="col mt-4">
                <form action="/cliente/{{$cliente->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="form-group">
                    </div>
                    <input type="submit" value="ELIMINAR" class="btn btn-danger mt-2">
                </form>
            </div>
        </div>
    </section>
@endsection
