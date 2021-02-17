@extends('layouts.app')

@section('content')
    <div class="container form">
        <form class="form-inline" action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="file">Seleccionar archivo txt: </label>
            <input type="file" class="form-control" name="file" id="file" accept=".txt">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    @if (session()->has('create'))
        <div class="container">
            <div class="alert  {{ (session()->has('create') == 1) ? 'alert-success' : 'alert-danger' }} alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('mensaje') }}
            </div>
        </div>
    @endif


    <div class="container tables">
        <h2>Usuarios Activos</h2>
    
            
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Correo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Codigo</th>
                <th>acciones</th>
            </tr>
            </thead>
            <tbody>
                
                        
                @foreach ($datos->where('codigo', 1) as $dato)
                    <tr>
                        <td>{{$dato->correo}}</td>
                        <td>{{$dato->nombre}}</td>
                        <td>{{$dato->apellido}}</td>
                        <td>{{$dato->codigo}}</td>
                        <td>
                            <a href="{{route('show',$dato)}}"><button type="button" class="btn btn-warning">editar</button></a>
                            <a href="javascript:eliminar_registro({{ $dato->id }})"><button type="button" class="btn btn-danger">eliminar</button></a>
                        </td>
                    </tr>
                @endforeach 
                
            </tbody>
        </table>
    </div>

    <div class="container tables">
        <h2>Usuarios Inactivos</h2>
        <table class="table table-striped">
        <thead>
            <tr>
            <th>Correo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Codigo</th>
            <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($datos->where('codigo', 2) as $dato)
                <tr>
                    <td>{{$dato->correo}}</td>
                    <td>{{$dato->nombre}}</td>
                    <td>{{$dato->apellido}}</td>
                    <td>{{$dato->codigo}}</td>
                    <td>
                        <a href="{{route('show',$dato)}}"><button type="button" class="btn btn-warning">editar</button></a>
                        <a href="javascript:eliminar_registro({{ $dato->id }})"><button type="button" class="btn btn-danger">eliminar</button></a>
                    </td>
                </tr>
            @endforeach 
        
        </tbody>
        </table>
    </div>
    <div class="container tables">
        <h2>Usuarios En Espera</h2>
        <table class="table table-striped">
        <thead>
            <tr>
            <th>Correo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Codigo</th>
            <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($datos->where('codigo', 3) as $dato)
                <tr>
                    <td>{{$dato->correo}}</td>
                    <td>{{$dato->nombre}}</td>
                    <td>{{$dato->apellido}}</td>
                    <td>{{$dato->codigo}}</td>
                    <td>
                        <a href="{{route('show',$dato)}}"><button type="button" class="btn btn-warning">editar</button></a>
                        <a href="javascript:eliminar_registro({{ $dato->id }})"><button type="button" class="btn btn-danger">eliminar</button></a>
                    </td>
                </tr>
            @endforeach 
        
        </tbody>
        </table>
    </div>
        
    {{-- <!-- The Modal -->
    <div class="modal" id="show">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                <label for="correo">Correo:</label>
                <input type="email" value="{{$dato->correo}}">
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
        
            </div>
        </div>
    </div> --}}
@endsection
    