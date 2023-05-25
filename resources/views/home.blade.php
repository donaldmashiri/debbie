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
                <div class="col-lg-12">
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

        </div>
        <!-- Main content ends -->

    </div>


@endsection
