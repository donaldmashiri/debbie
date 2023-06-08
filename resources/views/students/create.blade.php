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
                            <a href="{{ route('students.index') }}" class="btn btn-secondary justify-content-end">Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('students.store')}}" method="POST">
                                @csrf
                                <div class="row mb-3 font-weight-bolder">
                                    <div class="col-sm-12">
                                        <label for="inputText" class=" col-form-label">Full names</label>
                                        <input type="text" name="full_names" min="4" class="form-control" placeholder="Enter Full Name:" required>
                                    </div>
                                </div>
                                <div class="row mb-3 font-weight-bolder">
                                    <div class="col-sm-12">
                                        <label for="inputText" class=" col-form-label">Program</label>
                                        <select name="program"  class="form-control"  id="">
                                            <option value="">Select Program</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Information System">Information System</option>
                                            <option value="Accounting">Accounting</option>
                                            <option value="Insurance">Insurance</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row mb-3 font-weight-bolder">
                                    <div class="col-sm-12">
                                        <label for="inputText" class=" col-form-label">Level</label>
                                        <select name="level"  class="form-control"  id="">
                                            <option value="">Select level</option>
                                            <option value="1.1">1.1</option>
                                            <option value="1.2">1.2</option>
                                            <option value="2.1">2.1</option>
                                            <option value="2.2">2.2</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>

            </div>
            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->

    </div>
@endsection
