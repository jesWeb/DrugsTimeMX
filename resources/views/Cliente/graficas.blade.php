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
            <canvas id="bar-chart" width="800" height="450"></canvas>
        </div>
    </div>
</div>
{{--  --}}

<script>
    // Bar chart
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
</script>
@stop
