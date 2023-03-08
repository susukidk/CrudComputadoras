@extends('layouts/main')
@section('contenido')
    <div class="container">
        <h2 class="mt-3" >
            Computadoras 
        </h2>
        <div class="row">
            <div class="col">
                <a href="/create" class="btn btn-primary" >Agregar Nuevo Equipo</a>
                <hr>
                <table class="table table-info">

                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Ram</th>
                            <th>Procesador</th>
                            <th>DiscoDuro</th>
                            <th>Comentarios</th>
                            <th>Imagen</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->marca}}</td>
                            <td>{{$item->modelo}}</td>
                            <td>{{$item->ram}}</td>
                            <td>{{$item->procesador}}</td>
                            <td>{{$item->discoDuro}}</td>
                            <td>{{$item->comentarios}}</td>
                            <td><img src="{{ $item->url }}" class="rounded mx-auto d-block" width="200px"></td>
                            <td>
                                <a href="{{route('edit',$item->id)}}" class="btn btn-warning">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <a href="{{route('show', $item->id)}}" class="btn btn-danger" >
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection