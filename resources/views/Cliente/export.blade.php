@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')

<div class="container">

    <div class="card-body">
        <div class="table-responsive">
            {{-- tabla --}}
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Administracion</th>
                        <th>Descripcion</th>
                        <th>Tratamiento</th>
                        <!-- <th>Operaciones</th> -->
                    </tr>
                <tbody>
                    {{-- consulta eloquente en vista  --}}
                    @foreach($medicamentos as $medicamento)
                    <tr>
                        <td>{{$medicamento->id}}</td>
                    <td>{{$medicamento->nombre}}</td>
                    <td>{{$medicamento->tipo}}</td>
                    <td>{{$medicamento->descripcion}}</td>
                    <td>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
        </div>
    </div>






</div>

@stop

