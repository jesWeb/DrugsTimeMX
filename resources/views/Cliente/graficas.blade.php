@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>



    <div class="container">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- titulo --}}
                <h3 class="m-1 font-weight-bold text-primary">Tus Estadisticas</h3>
            </div>
            {{-- card- perfil --}}
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button"
                        role="tab" aria-controls="home" aria-selected="true">Medicamentos</button>
                </li>
                {{-- tratamientsos  --}}
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button"
                        role="tab" aria-controls="profile" aria-selected="false">Tratamientos</button>
                </li>
                {{-- dispensador --}}
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button"
                        role="tab" aria-controls="contact" aria-selected="false">Dispensador</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div>
                        <canvas id="myChart" style="overflow-x:auto;"></canvas>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div>
                        <canvas id="Tratamientos" style="overflow-x:auto;"></canvas>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </div>
    </div>
    {{--medicamentos  --}}
    <script>
        var fechas = [];
        var datos = [];
        $(document).ready(function() {
            $.ajax({
                url: '{{ route('graficaMedicamento') }}',
                method: 'GET',
                data: {
                    id: 1
                }
            }).done(function(res) {
                console.log(res);
                var arreglo = JSON.parse(res);
                for (let index = 0; index < arreglo.length; index++) {
                    fechas.push(arreglo[index].nombre);
                    datos.push(arreglo[index].cantidad);
                }
                console.log(fechas);
                console.log(datos);
                generarGrafica();
            })
        });

        function generarGrafica() {
            const ctx = document.getElementById('myChart');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: fechas,
                    datasets: [{
                        label: 'Medicamentos',
                        data: datos,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
        //tratamientos//
        var fechas2 = [];
        var datos2 = [];
        $(document).ready(function() {
            $.ajax({
                url: '{{ route('graficaTratamiento') }}',
                method: 'GET',
                data: {
                    id: 1
                }
            }).done(function(res) {
                console.log(res);
                var arreglo = JSON.parse(res);
                for (let index = 0; index < arreglo.length; index++) {
                    fechas2.push(arreglo[index].nombre);
                    datos2.push(arreglo[index].cantidad);
                }
                console.log(fechas2);
                console.log(datos2);
                generarGrafica2();
            })
        });

        function generarGrafica2() {
            const ctx = document.getElementById('Tratamientos');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: fechas2,
                    datasets: [{
                        label: 'Tratamientos',
                        data: datos2,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        //grafica de drugslide

        const temperatura = [];
        const humedad = [];
        $(document).ready(function() {
            $.ajax({
                url: '{{ route('graficaSlider') }}',
                method: 'GET',
                data: {
                    id: 1
                }
            }).done(function(res) {
                console.log(res);
                var arreglo = JSON.parse(res);
                for (let index = 0; index < arreglo.length; index++) {
                    temperatura.push(arreglo[index].nombre);
                    humedad.push(arreglo[index].cantidad);
                }
                console.log(temperatura);
                console.log(cantidad);
                generarGrafica3();
            })
        });

        function generarGrafica3() {
            const ctx = document.getElementById('maquina');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: temperatura,
                    datasets: [{
                        label: 'maquina',
                        data: humedad,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }




    </script>
@stop
