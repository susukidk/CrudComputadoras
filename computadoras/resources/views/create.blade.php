@extends('layouts/main')
@section('contenido')
    <div class="container mt-3 ">
        <h2>
            Agregar Nuevo Equipo
        </h2>
        <div class="row">
            <div class="col">
                <a href="/" class="btn btn-info"> Regresar </a>
                <hr>
                <form action="/store" method="post">
                    @csrf
                    @method('POST')
                    <label for="nombre">Coloca el nombre del Equpo</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" >
                    <label for="marca">Coloca la marca del Equipo</label>
                    <input type="text" name="marca" id="marca" class="form-control" >
                    <label for="modelo">Coloca el modelo del equipo</label>
                    <input type="text" name="modelo" id="modelo" class="form-control" >
                    <label for="ram">Coloca la Ram del Equipo</label>
                    <input type="text" name="ram" id="ram" class="form-control" >
                    <label for="procesador">Coloca el procesador del Equipo</label>
                    <input type="text" name="procesador" id="procesador" class="form-control" >
                    <label for="discoDuro">Coloca el Disco Duro del Equipo</label>
                    <input type="text" name="discoDuro" id="discoDuro" class="form-control" >
                    <label for="comentarios">Comentarios</label>
                    <input type="text" name="comentarios" id="comentarios" class="form-control" >
                    <label for="url">Imagen del Equipo</label>
                    <input type="text" name="url" id="url" class="form-control" >
                    <button class="btn btn-primary mt-3">
                        Gurdar
                    </button>

                </form>
            </div>
        </div>
    </div>    
@endsection