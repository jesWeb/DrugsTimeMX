@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')

<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-primary">Agrega un cuidador</h1>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center aling-content-center">
            {{-- card contenedora --}}
            <div class="shadow card-body mt-3">
                {{-- titulo --}}
                <div class="">
                    <h4 class="text-center m-3">Registra a tu cuidador</h4>
                </div>
                <form class="row p-3" action="{{route('cuidadorCreate')}}" ectype="multipart/form-data" method="POST">
                    {{csrf_field()}}
                    <!--Nombre -->
                    <div class="col-md-4">
                        <label for="text" class="form-label">Nombre completo </label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ejemplo:@nombre" require
                            id="">
                    </div>
                    <!--sexo  -->
                    <div class="col-md-4">
                        <label class="form-label" for="sexo">Sexo</label>
                        <div class="form-group">
                            <select class="form-control" name="sexo" require id="">
                                <option value="">----</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                    </div>
                    <!-- Fecha -->
                    <div class="col-md-4">
                        <label for="date" class="form-label">fecha de Nacimiento</label>
                        <input type="date" name="fechaN" class="form-control" require id="">
                    </div>
                    <!-- parentesco -->
                    <div class="col-md-4">
                        <label for="text" class="form-label">Parentesco</label>
                        <input type="text" class="form-control" name="parentesco"
                            placeholder="Ejemplo: familiar / trabajador" require id="">
                    </div>
                    <!--lugarTrabajo  -->
                    <div class="col-md-4">
                        <label for="text" class="form-label">Lugar de trabajo </label>
                        <input type="text" class="form-control" name="lugarTrabajo"
                            placeholder="Ejemplo:casa / hospital" id="">
                    </div>
                    <!-- Telefono -->
                    <div class="col-md-4">
                        <label for="tel" class="form-label">Telefono</label>
                        <input type="tel" name="Telefono" class="form-control" placeholder="+52" id="">
                    </div>
                    <!-- matricula -->
                    <div class="col-md-6 col-xl-6 text-center  mt-4">
                        <label for="text" class="form-label">Matricula / No empleado</label>
                        <input type="text" name="matricula" class="form-control" id="">
                    </div>
                    <!-- email -->
                    <div class="col-md-6 col-xl-6 text-center mt-4">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" name="email" placeholder="@correo" id="">
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
