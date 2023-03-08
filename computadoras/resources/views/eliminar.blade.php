@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col mt-3">


                <div class="card" style="background-color: rgb(179, 53, 53)" >
                    <div class="card-header" style="color: aliceblue">
                        <h2 class="text-center" >El Dato a Eliminar Es:</h2>
                    </div>
                    <div class="card-body" style="color: aliceblue">
                        <p class="card-text">
                            <ul>
                            <li>El nombre es: {{$items->nombre}}</li>
                            <li>La marca es: {{$items->marca}}</li>
                            <li>El modelo es: {{$items->modelo}}</li>
                            <li>La ram es: {{$items->ram}}</li>
                            <li>El procesador es: {{$items->procesador}}</li>
                            <li>El disco Duro es: {{$items->discoDuro}}</li>
                            <li>Los comentarios son: {{$items->comentarios}}</li>
                            <li>La imagen es: {{$items->url}}</li>
                            </ul>
                        </p>
                        <form action="{{route('destroy', $items->id)}}" method="post" >
                            @csrf
                            @method('DELETE')
                            <div class="text-center" >
                            <button class="btn btn-danger mt-3 " >
                                Eliminar definitivamente
                            </button>
                        </div>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>    

@endsection


