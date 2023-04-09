@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')

<div class="container">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- titulo --}}
            <h3 class="m-1 font-weight-bold text-primary">Tus Estadisticas</h3>
        </div>
        {{-- card- perfil --}}
        <div class="">
            <canvas id="medicamentos" width="400px" height="400">
            </canvas>
        </div>
    </div>
</div>
{{--  --}}
<script>
    var  grafica1 = document.getElementByid("medicamentos").getContext("2d")
    var medi= new chart(ctx,
</script>
@stop
