@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')

    <div class="container">
           <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-primary">Agrega un tratamiento</h1>
    </div>
        <div class="d-flex justify-content-center aling-content-center">
            <div class="shadow card-body mt-4">
                {{-- titulo--}}
                <div class="">
                    <h4 class="text-center m-3">Registra  tu Tratamiento</h4>
                    <div class="">
                        <img src="" alt="">
                    </div>
                </div>
                <form class="row p-3 mx-3" action="{{route('TratamientoCreate')}}" ectype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <!--Nombre -->
                    <div class="col-md-4">
                        <label for="text" class="form-label">Nombre </label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ejemplo:@nombre" require
                            id="">
                    </div>
                    <!--Nombre -->
                    <div class="col-md-4">
                        <label for="text" class="form-label"> Cantidad de medicameto</label>
                        <input type="text" class="form-control" name="dosis" id="" placeholder="1 pastilla/100ml">
                    </div>
                    <!-- horario -->
                    <div class="col-md-4">
                        <label for="time" class="form-label">Horario</label>
                        <input type="time" name="horario" class="form-control" id="t">
                    </div>
                    <!-- dias -->
                    <div class="mt-5  text-center">
                        <!-- dias -->
                        <div class="form-check ">
                            {{-- check lunes --}}
                            <input class=" " type="checkbox" id="inlineCheckbox1" name="dias"
                                value="lunes">
                                <label class="form-check-label" for="inlineCheckbox1">Lunes</label>
                            {{-- check martes --}}
                            <input class=" " type="checkbox" id="inlineCheckbox2" name="dias"
                                value="martes">
                            <label class="" for="inlineCheckbox2">Martes</label>
                            {{-- miercoles --}}
                            <input class=" " type="checkbox" id="inlineCheckbox3" name="dias"
                                value="miercoles">
                            <label class="" for="inlineCheckbox3">Miercoles</label>
                            {{-- jueves --}}
                            <input class=" " type="checkbox" id="inlineCheckbox4" name="dias"
                                value="jueves">
                            <label class="" for="inlineCheckbox4">Jueves</label>
                            {{-- viernes --}}
                            <input class=" " type="checkbox" id="inlineCheckbox5" name="dias"
                                value="viernes">
                            <label class="" for="inlineCheckbox5">Viernes</label>
                            {{-- sabado --}}
                            <input class=" " type="checkbox" id="inlineCheckbox6" name="dias"
                                value="sabado">
                            <label class="" for="inlineCheckbox6">Sabados</label>
                            {{-- domingo --}}
                            <input class=" " type="checkbox" id="inlineCheckbox7" name="dias"
                                value="domingo">
                            <label class="" for="inlineCheckbox7">Domingo</label>
                        </div>

                    </div>
                    <!-- btn -->
                    <div class="text-center mt-5 mb-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@stop
