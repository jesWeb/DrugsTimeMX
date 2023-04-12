@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')

<div class="container">
        <!-- DataTales Example -->
        <div class="card shadow mb-3">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                {{-- titulo --}}
                <div class="card-header py-3">
                    <h3 class="m-1 font-weight-bold text-primary"> DrugSlide</h3>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary " href="{{route('MaquiAdd')}}">Agregar DrugSlide<i
                                class=" m-2 fa-solid fa-plus" style="color: #fcfcfc;"></i></a>
                    </div>
                </div>
                {{-- tabla --}}
                <div class="mb-5 mt-5">
                    <!-- contenido cuidadores -->
                    <div class="d-flex justify-content-center">
                        <!-- vista de base de datos -->
                        <!-- card-1 -->
                        <div class="maquina">
                            <div class="card cards-today rounded shadow-sm cliente-card"
                                style="height: 25rem; width:26em;">
                                <!-- imagen -->
                                <img src="" alt="" class="card-img-top">
                                <!-- descripcion de card cliente -->
                                <div class="card-body text-center">
                                    <!-- titulo-card -->
                                    <h4 class="card-title">Elnombre</h4>
                                    <!-- info card cuidador -->
                                    <p class="card-text">nombre</p>
                                    <p class="card-text">Puesto</p>
                                    <p class="card-text">Telefono</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
