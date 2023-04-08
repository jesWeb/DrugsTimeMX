@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')


<div class="container-fluid">
    <!-- DataTales Example -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- titulo --}}
            <h3 class="m-1 font-weight-bold text-primary">Tu Perfil</h3>
            {{-- btn-cuidador --}}
            {{-- <div class="d-flex justify-content-end">
                <a class="btn btn-primary " href="{{route('cuidadorAdd')}}">Agregar Cuidador<i
                class=" m-2 fa-solid fa-plus" style="color: #fcfcfc;"></i></a>
        </div> --}}
    </div>
    {{-- card- perfil --}}
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow mt-4 MaquiCard text-center" style="height: 80vh">
                <div class="Maquicontent mt-3">
                    <h1>hola</h1>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>


@stop
