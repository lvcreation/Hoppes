@extends('layouts.master')
@section('titre-admin')
    Chart js
@endsection
@section('contenu')

<h1>Online user</h1>
{{$onlineUsers}}

<h1>Graphique</h1>

    <h1>Statistique</h1>

    <div class="col-md-6">
        <div>
            <canvas id="myChart"></canvas>
          </div>
    </div>
      <script>
        var _ydata=JSON.parse('{!! json_encode($months) !!}');
        var _xdata=JSON.parse('{!! json_encode($monthCount) !!}');
      </script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: _ydata,
            datasets: [{
              label: ' Nbr inscription',
              data: _xdata,
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
      </script>

@endsection