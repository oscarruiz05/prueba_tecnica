@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('editar', $datos)}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
            <label for="email">Correo:</label>
            <input type="email" class="form-control"  id="email" name="correo" value="{{$datos->correo}}">
            </div>
            <div class="form-group">
            <label for="nombre">nombre:</label>
            <input type="text" class="form-control"  id="nombre" name="nombre" value="{{$datos->nombre}}">
            </div>
            <div class="form-group">
                <label for="apellido">apellido:</label>
                <input type="text" class="form-control"  id="apellido" name="apellido" value="{{$datos->apellido}}">
            </div>
            <div class="form-group">
                <label for="codigo">codigo:</label>
                <input type="number" class="form-control"  id="codigo" name="codigo" value="{{$datos->codigo}}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
