@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')

<div class="container-fluid">
        <!-- Page titulo-->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Agrega un Medicamento</h1>
        </div>
        {{-- area de formulario  --}}
        <div class="container">
            <div class="d-flex jusify-content-center aling-content-center">
                {{-- carta de form --}}
                <div class="shadow card-body mt-4">
                    {{-- titulo --}}
                    <div class="">
                        <h4 class="text-center m-3">Registra tu Medicamento</h4>
                        <div class="">
                            <img src="" alt="">
                        </div>
                    </div>
                    {{-- formulario --}}
                    <form class="row jusitfy-content-center p-3 " action="{{route('createMedicamento')}}" ectype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <!--Nombre -->
                        <div class="col-md-4">
                            <label for="text" class="form-label">Nombre del medicamento </label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ejemplo: paracetamol"
                                require id="">
                        </div>
                        <!--Descripcion -->
                        <div class="col-md-7">
                            <label for="">¿Para que usaras este medicamento?</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Agrega una descripcion del uso del medicamento">
                        </div>

                        <div class="row  mt-3">
                         <!--Tipo -->
                         <div class="col-md-4 ">
                            <label for="text" class="form-label">Administracion </label>
                            <input type="text" class="form-control" name="tipo" placeholder="Ejemplo: oral" require
                                id="">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="" class="">¿Pertenece a algun tratamiento
                                <select class=" form-select" name="idTratamiento">
                                    <option selected>------</option>
                                    @foreach($recomendacion as $recomend)
                                    <option value="{{$recomend->idTratamiento}}">{{$recomend->nombre}}</option>
                                @endforeach
                                </select>
                            </label>
                        </div>
                       </div>
                        <!-- btn -->
                        <div class="text-center mt-5  mb-4">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
