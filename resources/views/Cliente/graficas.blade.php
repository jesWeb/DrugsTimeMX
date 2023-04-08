@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')

<!-- graficas -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


<div class="container-fluid">
    <!-- DataTales Example -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- titulo --}}
            <h3 class="m-1 font-weight-bold text-primary">Tus estadiscticas</h3>
            {{-- btn-cuidador --}}
            {{-- <div class="d-flex justify-content-end">
                <a class="btn btn-primary " href="{{route('cuidadorAdd')}}">Agregar Cuidador<i
                class=" m-2 fa-solid fa-plus" style="color: #fcfcfc;"></i></a>
        </div> --}}
    </div>
    {{-- card- perfil --}}
    <div class="row justify-content-center">
        <div class="col-6">
            <img src="" alt="">
        </div>
        <div class="col-6">
            <p>Descarga tu historial y usalos como evidencia de tus tratamientos <br> y ten un mayor control </p>
            <div class="">

            </div>
        </div>
    </div>

</div>
</div>


@stop
