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
                <h3 class="m-1 font-weight-bold text-primary">Tus Cuidadores</h3>
                {{-- btn-cuidador --}}
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary " href="{{route('cuidadorAdd')}}">Agregar Cuidador<i
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
                                <th>Parentesco</th>
                                <th>Lugar de trabajo</th>
                                <th>Telefono</th>
                                <th>correo electronico</th>
                                <th>Eliminar</th>
                                <!-- <th>Operaciones</th> -->
                            </tr>
                        <tbody>
                            {{-- consulta eloquente en vista  --}}
                            @foreach($cuidadores as $cuidado)
                                <tr>
                                    <td>{{$cuidado->id}}</td>
                            <td>{{$cuidado->nombre}}</td>
                            <td>{{$cuidado->parentesco}}</td>
                            <td>{{$cuidado->lugarTrabajo}}</td>
                            <td>{{$cuidado->Telefono}}</td>
                            <td>{{$cuidado->email}}</td>
                            <td>
                                <a class="btn btn-danger" href="{{route('cuidadordelate', ['id' => $cuidado->id ])}}"><i class="bi bi-trash"></i></a>
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
