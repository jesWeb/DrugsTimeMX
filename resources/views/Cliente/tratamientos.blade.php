@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-3">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- titulo --}}
                <h3 class="m-1 font-weight-bold text-primary">Tus Tratamientos</h3>
                {{-- btn de tratamiento --}}
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary " href="{{route('TratamientoAdd')}}">Agregar Tratamiento<i
                            class=" m-2 fa-solid fa-plus" style="color: #fcfcfc;"></i></a>
                </div>
            </div>
            {{-- tabla de contenido --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Cantidad de medicamento</th>
                                <th>Horario</th>
                                <th>Dias</th>
                                <th>Eliminar</th>
                                <!-- <th>Operaciones</th> -->
                            </tr>
                        <tbody>
                            {{-- consulta eloquente en vista  --}}
                            @foreach($recomendacion as $recomend)
                            <tr>
                                <td>{{$recomend->idTratamiento}}</td>
                                <td>{{$recomend->nombre}}</td>
                                <td>{{$recomend->dosis}}</td>
                                <td>{{$recomend->horario}}</td>
                                <td>{{$recomend->dias}}</td>
                                <td>
                                    <a class="btn btn-danger" href="{{ route('TratamientoDelate', ['id' => $recomend->idTratamiento ]) }}"><i  class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>
@stop
