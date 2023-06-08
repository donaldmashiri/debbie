@extends('layouts.header')
@include('layouts.sidebar')

@section('content')
    <!-- Sidebar chat end-->
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">

            <!-- 2-1 block start -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header bg-secondary text-white"> <h4>Students Grades</h4>
                            <a href="{{ route('grades.create') }}" class="btn btn-primary justify-content-end">Record Students Grades</a></div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Program</th>
                                    <th>Level</th>
                                    <th>Semester</th>
                                    <th>Mark</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($grades as $grade)
                                    <tr>
                                        <td>SD00{{ $grade->student->id }}</td>
                                        <td>{{ $grade->student->full_names }}</td>
                                        <td>{{ $grade->student->program }}</td>
                                        <td>{{ $grade->student->level }}</td>
                                        <td>{{ $grade->semester->name }} ({{ $grade->semester->year }})</td>
                                        <td>{{ $grade->mark_name }}</td>
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
