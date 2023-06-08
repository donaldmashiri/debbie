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
                        <div
                            class="card-header bg-success  py-3 d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('students.create') }}" class="btn btn-secondary justify-content-end">Add New Student</a>
                        </div>
                        @include('partials.errors')
                        <div class="card-body">
                            <table class="table table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">Student Number</th>
                                    <th scope="col">Full Names</th>
                                    <th scope="col">Program</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>SD00{{$student->id}}</td>
                                        <td>{{$student->full_names}}</td>
                                        <td>{{$student->program}}</td>
                                        <td>{{$student->level}}</td>
                                        <td>{{$student->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->

    </div>
@endsection
