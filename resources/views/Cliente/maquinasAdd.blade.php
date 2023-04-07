@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Agrega un Drugslide</h1>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center aling-content-center">
            <div class="shadow card-body mt-4">
                <div class="">
                    <h4 class="text-center m-3">Registra tu Drugslide</h4>
                    <div class="">
                        <img src="" alt="">
                    </div>
                </div>
                <form action="{{route('maquinas.store')}}" ectype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <!--Nombre -->
                    <div class="mb-4">
                        <label for="text" class="form-label">Nombre </label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ejemplo:@nombre" require
                            id="">
                    </div>

                    <!-- parentesco -->
                    <div class="mb-4">
                        <label for="text" class="form-label">Modelo</label>
                        <input type="text" class="form-control" name="Modelo"
                            placeholder="Ejemplo: familiar / trabajador" require id="">
                    </div>

                    <!-- matricula -->
                    <div class="mb-4">
                        <label for="text" class="form-label">Humedad</label>
                        <input type="text" name="Humedad" class="form-control" id="">
                    </div>

                    <!-- btn -->
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



@stop
