@extends('layouts.master')
@section('titre-admin')
    Chart js graphique
@endsection
@section('contenu')

<h1>Chart donut</h1>
<div class="container">
   <div class="col-md-6">
    <canvas id="myLineChart" width="800" height="400"></canvas>
   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('myLineChart').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($data['labels']) !!},
                datasets: [{
                    label: 'Nombre d\'utilisateurs connectés',
                    data: {!! json_encode($data['data']) !!},
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false,
                }],
            },
            options: {
                scales: {
                    x: [{
                        type: 'time',
                        time: {
                            unit: 'second',
                            displayFormats: {
                                second: 'H:mm:ss',
                            },
                        },
                        display: true,
                    }],
                    y: [{
                        display: true,
                    }],
                },
            },
        });
    });
</script>


{{-- <div class="row">
    <div class="col-md-12">
        <h3>Last 30 speed measurements</h3>
        <canvas id="myChart"></canvas>
    </div>
</div> --}}



            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
            type: 'line',
            data: {
            labels: [],
            datasets: [{
            label: 'Speed',
            data: [],
            borderWidth: 1
            }]
            },
            options: {
            scales: {
            xAxes: [],
            yAxes: [{
            ticks: {
            beginAtZero:true
            }
            }]
            }
            }
            });
            var updateChart = function() {
            $.ajax({
            url: "{{ route('api.chart') }}",
            type: 'GET',
            dataType: 'json',
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
            myChart.data.labels = data.labels;
            myChart.data.datasets[0].data = data.data;
            myChart.update();
            },
            error: function(data){
            console.log(data);
            }
            });
            }

            updateChart();
            setInterval(() => {
            updateChart();
            }, 1000);
            </script>
@endsection