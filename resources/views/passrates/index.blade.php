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
                    <h4>Semester Pass Rates </h4>
                </div>
            </div>
            <!-- 4-blocks row start -->

            <!-- 2-1 block start -->
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="table-responsive">
                                <div class="container">
                                    <h1>Pass Rate Trends and Comparisons</h1>
                                    <div id="chart"></div>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Semester</th>
                                            <th>Pass Rate</th>
                                            <th>% Change</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Semester 1</td>
                                            <td>85%</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Semester 2</td>
                                            <td>78%</td>
                                            <td>-8%</td>
                                        </tr>
                                        <tr>
                                            <td>Semester 3</td>
                                            <td>90%</td>
                                            <td>15%</td>
                                        </tr>
                                        <tr>
                                            <td>Semester 4</td>
                                            <td>82%</td>
                                            <td>-9%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Include JavaScript Libraries -->
                                <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <!-- Create JavaScript Code to Generate Chart -->
                                <script>
                                    var options = {
                                        chart: {
                                            height: 350,
                                            type: 'line',
                                            zoom: {
                                                enabled: true
                                            }
                                        },
                                        series: [{
                                            name: 'Pass Rate',
                                            data: [85, 78, 90, 82]
                                        }],
                                        xaxis: {
                                            categories: ['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4']
                                        },
                                        yaxis: {
                                            title: {
                                                text: 'Pass Rate'
                                            }
                                        },
                                        title: {
                                            text: 'Pass Rate Trends'
                                        }
                                    }
                                    var chart = new ApexCharts(document.querySelector("#chart"), options);
                                    chart.render();
                                </script>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->
    </div>
@endsection
