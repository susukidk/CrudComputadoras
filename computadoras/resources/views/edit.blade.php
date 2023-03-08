@extends('layouts/main')
@section('contenido')
    <div class="container mt-3 ">
        <h2>
            Actualizar el Equipo
        </h2>
        <div class="row">
            <div class="col">
                <a href="/" class="btn btn-info"> Regresar </a>
                <hr>
                <form action="{{route('update', $items->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <label for="nombre">Coloca el nombre del Equpo</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$items->nombre}}" >
                    <label for="marca">Coloca la marca del Equipo</label>
                    <input type="text" name="marca" id="marca" class="form-control" value="{{$items->marca}}" >
                    <label for="modelo">Coloca el modelo del equipo</label>
                    <input type="text" name="modelo" id="modelo" class="form-control" value="{{$items->modelo}}" >
                    <label for="ram">Coloca la Ram del Equipo</label>
                    <input type="text" name="ram" id="ram" class="form-control" value="{{$items->ram}}" >
                    <label for="procesador">Coloca el procesador del Equipo</label>
                    <input type="text" name="procesador" id="procesador" class="form-control" value="{{$items->procesador}}" >
                    <label for="discoDuro">Coloca el Disco Duro del Equipo</label>
                    <input type="text" name="discoDuro" id="discoDuro" class="form-control" value="{{$items->discoDuro}}" >
                    <label for="comentarios">Comentarios</label>
                    <input type="text" name="comentarios" id="comentarios" class="form-control" value="{{$items->comentarios}}" >
                    <label for="url">Imagen del Equipo</label>
                    <input type="img" name="url" id="url" class="form-control" value="{{$items->url}}" >
                    <button class="btn btn-warning mt-3">
                        Actualizar
                    </button>

                </form>
            </div>
        </div>
    </div>    
@endsection