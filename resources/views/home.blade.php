@extends('layouts.header')
@include('layouts.sidebar')

@section('content')
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Teacher Profile</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->


            <!-- 1-3-block row start -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="user-block-2">
                            <img class="img-fluid" src="assets/images/widget/user-1.png" alt="user-header">
                            <h5>Debbie</h5>
                            <h6>Teacher</h6>
                            <h5>debbie@gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Bar chart</h5>
                        </div>
                        <div class="card-block">
                            <div id="barchart" style="min-width: 250px; height: 330px; margin: 0 auto"></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 1-3-block row end -->

            <!-- 2-1 block start -->
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table m-b-0 photo-table">
                                    <thead>
                                    <tr class="text-uppercase">
                                        <th>Photo</th>
                                        <th>Project</th>
                                        <th>Completed</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-2.png" alt="User">
                                        </th>
                                        <td>Appestia Project
                                            <p><i class="icofont icofont-clock-time"></i>Created 14.9.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">226,134</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 1 1 4.209902994920235 25.41987555688496 L 15 15" fill="#2196F3"></path><path d="M 4.209902994920235 25.41987555688496 A 15 15 0 0 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                        </td>
                                        <td>50%</td>
                                        <td>October 21, 2015</td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Bar chart</h5>
                        </div>
                        <div class="card-block">
                            <div id="piechart" style="min-width: 250px; height: 460px; margin: 0 auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->

    </div>


@endsection
