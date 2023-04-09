@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')


<div class="container">
    <!-- DataTales Example -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- titulo --}}
            <h3 class="m-1 font-weight-bold text-primary">Historial</h3>
        </div>
    </div>
    {{-- card- perfil --}}
    <div class="row justify-content-center align-items-center">
        <div class="col-xl-6 col-md-8">
            <img src="{{asset('img/visuales/reportes.jpg')}}" class="img-fluid text-center" alt="">
        </div>
        <div class="col-xl-6 text-center col-md-4 ">
            <p>Descarga tu Historial de medicamentos y Tratamientos  </p>
            <div class="mt-2">
                {{-- <h3 class="h4">Medicamentos</h3> --}}
                <a href="{{route('Reporte.export')}}"   class="btn btn-success m-2">Descarga Excell</a>
                <a href="{{route('reportePDF')}}"  class="btn btn-danger m-2">Descarga PDF</a>
            </div>

        </div>
    </div>

</div>
</div>


@stop
