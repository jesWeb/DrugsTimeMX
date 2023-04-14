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
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div>
                        <canvas id="dispensador" style="overflow-x:auto;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- medicamentos  --}}
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

        function tiempoReal() {
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
                        datos2.push(arreglo[index].dosis);
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
        }

        function maquina() {
            var temperatura22 = [];
            var humedad2 = [];
            var fecha = [];
            $(document).ready(function() {
                $.ajax({
                    url: '{{ route('graficaSlider')}}',
                    method: 'GET',
                    data: {
                        id: 1
                    }
                }).done(function(res) {
                    console.log(res);
                    var arreglo = JSON.parse(res);
                    for (let index = 0; index < arreglo.length; index++) {
                        temperatura22.push(arreglo[index].temperatura);
                        humedad2.push(arreglo[index].Humedad);
                        fecha.push(arreglo[index].created_at);
                    }
                    generarGraficaMaquina();
                })
            });

            function generarGraficaMaquina() {
                const ctx = document.getElementById('dispensador');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: fecha,
                        datasets: [{
                            label: 'temperatura',
                            data: temperatura22,
                            backgroundColor:'rgba(255, 99, 132, 0.2)',
                            borderWidth: 1
                        },{
                            label: 'humedad',
                            data: humedad2,
                            backgroundColor:'rgba(255, 99, 132, 0.2)',
                            fillStyle: 'rgba(255, 99, 132, 0.2)'
                            borderWidth: 1
                        }
                    ]
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
        }
        setInterval(tiempoReal, 60000);
        setInterval(maquina, 60000);
    </script>
    </div>
@stop
