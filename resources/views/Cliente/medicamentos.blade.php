@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')

    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-3">
            {{-- titulo de tabla --}}
            <div class="card-header py-3">
                <h3 class="m-1 font-weight-bold text-primary">Tus Medicamentos</h3>
                {{-- btn link --}}
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary " href="{{ route('MediAdd') }}">Agregar Medicamento<i
                            class=" m-2 fa-solid fa-plus" style="color: #fcfcfc;"></i></a>
                </div>
            </div>
            {{-- tabala de contenido --}}
            <div class="card-body">
                <div class="table-responsive ">
                    <table class=" table table-bordered  text-center" id="example" style="overflow-x:auto;" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Tipo</th>
                                <th>Tratamieto</th>
                                <th>Eliminar</th>
                            </tr>
                        <tbody>

                            {{-- consulta eloquente en vista  --}}
                            @foreach ($medicamentos as $medicamento)
                                <tr>
                                    {{-- <td>{{ $i }}</td> --}}
                                    <td>{{ $medicamento->idMedica }}</td>
                                    <td>{{ $medicamento->nombre }}</td>
                                    <td>{{ $medicamento->descripcion }}</td>
                                    <td>{{ $medicamento->tipo }}</td>
                                    <td>{{ $medicamento->tratamientos_id}}</td>
                                    <td>
                                    {{-- <a class="btn btn-danger" href="{{ route('delateMedicamento', ['idMedica' => $medicamento->idMedica ]) }}"><i  class="bi bi-trash"></i></a> --}}

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
    </body>
@stop
