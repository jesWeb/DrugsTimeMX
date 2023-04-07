@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Agrega un cuidador</h1>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center aling-content-center">
            <div class="shadow card-body mt-4">
                <div class="">
                    <h4 class="text-center m-3">Registra a tu cuidador</h4>
                    <div class="">
                        <img src="" alt="">
                    </div>
                </div>
                <form action="{{route('cuidadorCreate')}}" ectype="multipart/form-data" method="POST">
                    {{csrf_field()}}
                    <!--Nombre -->
                    <div class="mb-4">
                        <label for="text" class="form-label">Nombre </label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ejemplo:@nombre" require
                            id="">
                    </div>
                    <!--sexo  -->
                    <div class="mb-4">
                        <label class="form-label" for="sexo">Sexo</label>
                        <div class="form-group">
                            <select class="form-control" name="sexo" require id="">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                    </div>
                    <!-- parentesco -->
                    <div class="mb-4">
                        <label for="text" class="form-label">Parentesco</label>
                        <input type="text" class="form-control" name="parentesco"
                            placeholder="Ejemplo: familiar / trabajador" require id="">
                    </div>
                    <!-- Fecha -->
                    <div class="mb-4">
                        <label for="date" class="form-label">fecha de Nacimiento</label>
                        <input type="date" name="fechaN" class="form-control" require id="">
                    </div>
                    <!--lugarTrabajo  -->
                    <div class="mb-4">
                        <label for="text" class="form-label">Lugar de trabajo </label>
                        <input type="text" class="form-control" name="lugarTrabajo"
                            placeholder="Ejemplo:casa / hospital" id="">
                    </div>
                    <!-- matricula -->
                    <div class="mb-4">
                        <label for="text" class="form-label">Matricula</label>
                        <input type="text" name="matricula" class="form-control" id="">
                    </div>
                    <!-- Telefono -->
                    <div class="mb-4">
                        <label for="tel" class="form-label">Telefono</label>
                        <input type="tel" name="Telefono" class="form-control" placeholder="+52" id="">
                    </div>
                    <!-- email -->
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" name="email" placeholder="@correo" id="">
                    </div>
                    <!--imagenP  -->
                    <!-- <div class=" text-center">
                            <input type="file" class="form-label" name="imagenP" id="">
                        </div> -->

                    <div class="mt-3">
                        <label class="form-label" for="sexo">Sexo</label>
                        <div class="form-group">
                            <select class="form-control" name="sexo" require id="">
                                <option value="Masculino">----</option>
                            </select>
                        </div>

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
