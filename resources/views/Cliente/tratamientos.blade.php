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
                        <a class="btn btn-primary " href="{{route('tratamiento.create')}}">Agregar Tratamiento<i
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
                                {{-- @foreach($recomendacion as $recomend)
                                <tr>
                                    <td>{{$recomend->id}}</td>
                                <td>{{$recomend->nombre}}</td>
                                <td>{{$recomend->dosis}}</td>
                                <td>{{$recomend->horario}}</td>
                                <td>
                                    <p>{{$recomend->dias}}</p>
                                    <p>{{$recomend->dias}}</p>
                                    <p>{{$recomend->dias}}</p>
                                </td>

                                <td>
                                    <div class="row justify-content-center">
                                        <div class="col-auto">
                                            <form action="tratamiento/{{$recomend->id}}" method="post">
                                                {!! csrf_field() !!}
                                                @method("delete")

                                                <button class="btn btn-danger m-3" type="submit"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>

@stop
