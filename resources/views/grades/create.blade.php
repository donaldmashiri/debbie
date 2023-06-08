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
                        <div class="card-header bg-secondary text-white"> <h4>Records the grade attained by each student </h4>
                            <a href="{{ route('grades.index') }}" class="btn btn-secondary justify-content-end">Back</a></div></div>
                        <div class="card-body">
                            <table class="table table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Semester Name</th>
                                    <th scope="col">Year</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($semesters as $semester)
                                    <tr>
                                        <td>{{$semester->id}}</td>
                                        <td>{{$semester->name}}</td>
                                        <td>{{$semester->year}}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm" onclick="selectSemester({{$semester->id}})">select</a>
                                        </td>
                                    </tr>
                                @endforeach
                                {{--                                <input type="text" value="" name="semester_id" id="semester_id_input">--}}

                                <script>
                                    function selectSemester(semesterId) {
                                        document.getElementById('semester_id_input').value = semesterId;
                                    }
                                </script>



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
                                <form action="{{ route('grades.store') }}" method="post">
                                    @csrf
                                    <div class="container m-3">
                                        <label for="">You Semester Selected</label>
                                        <div class="br"></div>
                                        <input type="text" value="" name="semester_id" id="semester_id_input" readonly>
                                    </div>
                                    @foreach($students as $student)

                                        <tr>
                                            <td>SD00{{$student->id}} <input name="students[{{$student->id}}][student_id]" type="hidden" value="{{$student->id}}" class="form-group form-control"> </td>
                                            <td>{{$student->full_names}}</td>
                                            <td>{{$student->program}}</td>
                                            <td>{{$student->level}}</td>
                                            <td>
                                                <input name="students[{{$student->id}}][mark_name]" type="text" class="form-group form-control">
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
                                </form>

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

