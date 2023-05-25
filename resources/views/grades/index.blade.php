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
                        <div class="card-header bg-secondary text-white"> <h4>Records the grade attained by each student </h4></div>
                        <div class="card-body">
                            <table class="table table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">Semester Name</th>
                                    <th scope="col">Year</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($semesters as $semester)
                                    <tr>
                                        <td>{{$semester->name}}</td>
                                        <td>{{$semester->year}}</td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">select</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">Student Number</th>
                                    <th scope="col">Full Names</th>
                                    <th scope="col">Program</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Mark</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>SD00{{$student->id}}</td>
                                        <td>{{$student->full_names}}</td>
                                        <td>{{$student->program}}</td>
                                        <td>{{$student->level}}</td>
                                        <td>
                                            <input type="text" class="form-group form-control">
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary btn-block">Submit Marks</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table m-b-0 photo-table">
                                    <thead>
                                    <tr class="text-uppercase">
                                        <th>Student Number</th>
                                        <th>Student Name</th>
                                        <th>Grade</th>
                                        <th>Semester</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>R1789273H</td>
                                        <td>Sarah Tencredi</td>
                                        <td>85</td>
                                        <td>2</td>
                                        <td>
                                            <span class="pie" style="display: none;">226,134</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 1 1 4.209902994920235 25.41987555688496 L 15 15" fill="#2196F3"></path><path d="M 4.209902994920235 25.41987555688496 A 15 15 0 0 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                        </td>
                                        <td>October 21, 2015</td>
                                    </tr>

                                    </tbody>
                                </table>

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
