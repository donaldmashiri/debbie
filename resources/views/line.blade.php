@extends('layouts.header')
@include('layouts.sidebar')

@section('content')
    <!-- Sidebar chat end-->
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Students</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->

            <!-- 2-1 block start -->
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        @include('partials.errors')

                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            // Function to generate the line graph
                            function generateLineGraph() {
                                // Get the canvas element for the graph
                                const canvas = document.getElementById('lineGraph');

                                // Define the data for the line graph (sample data)
                                const data = {
                                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                                    datasets: [{
                                        label: 'Pass Rate',
                                        data: [75, 80, 85, 82, 88, 90],
                                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                        borderColor: 'rgba(54, 162, 235, 1)',
                                        borderWidth: 2,
                                        pointRadius: 3,
                                        pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                                        pointBorderColor: '#fff',
                                        pointHoverRadius: 5,
                                        pointHoverBackgroundColor: 'rgba(54, 162, 235, 1)',
                                        pointHoverBorderColor: '#fff',
                                        pointHitRadius: 10
                                    }]
                                };

                                // Define the options for the line graph
                                const options = {
                                    responsive: true,
                                    maintainAspectRatio: false
                                };

                                // Create the line graph using Chart.js library
                                new Chart(canvas, {
                                    type: 'line',
                                    data: data,
                                    options: options
                                });
                            }
                        </script>

                        <div class="container mt-5">
                            <h1>Line Graph Display</h1>
                            <canvas id="lineGraph" width="400" height="200"></canvas>
                        </div>

                        <script>
                            // Call the function to generate the line graph on page load
                            window.onload = generateLineGraph;
                        </script>



                    </div>
                </div>
            </div>
            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->

    </div>
@endsection
