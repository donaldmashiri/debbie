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
                        <div class="card-block">
                            @if($students->count() > 0)
                            <div class="table-responsive">
                                <table class="table m-b-0 photo-table">
                                    <thead>
                                    <tr class="text-uppercase">
                                        <th>Student Number</th>
                                        <th>Full Names</th>
                                        <th>Program</th>
                                        <th>Level</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    @foreach($students as $student)
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->full_names}}</td>
                                        <td>{{$student->program}}</td>
                                        <td>{{$student->level}}</td>
                                        <td>{{$student->created_at}}</td>
                                    @endforeach
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            @else
                                <h3 class='text-center alert alert-danger'>No Students Added</h3>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->

    </div>
@endsection
