@extends('plantilla')

@section('seccion')
    @if(session('mensaje'))
        <div class="alert alert-success"> {{session('mensaje')}}</div>
    @endif

        <table class="table">
            <thead>
                @if (count($clientes) != 0)
                    <tr>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acción</th>
                    </tr>
                @endif
            </thead>
            <tbody>
                @forelse ($clientes as $cliente)

                        <tr>
                            <td>{{$cliente->cedula}}</td>
                            <td>{{$cliente->nombre}}</td>   
                            <td>                       
                                <a href="{{route('cliente.edit',$cliente)}}" class="btn btn-warning btn-sm">Editar</a>                                
                                <form action="{{route('cliente.destroy',$cliente)}}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>                                
                                </form>
                                
                            </td>           
                        </tr>
                @empty
                    <div class="alert alert-warning"><h1>No se encontraron clientes</h1></div>
                @endforelse
            </tbody>
    </table>
@endsection