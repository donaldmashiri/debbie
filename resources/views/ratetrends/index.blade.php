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

                        <div class="container mt-5">
                            <h1>Pass Rate Prediction System</h1>
                            <form id="passRateForm">
                                <div class="form-group">
                                    <label for="semester">Select Semester:</label>
                                    <select class="form-control" id="semester">
                                        <option value="spring">Spring</option>
                                        <option value="summer">Summer</option>
                                        <option value="fall">Fall</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="previousPassRate">Previous Pass Rate:</label>
                                    <input type="number" class="form-control" id="previousPassRate" placeholder="Enter previous pass rate">
                                </div>
                                <button type="submit" class="btn btn-primary">Predict</button>
                            </form>
                            <div class="mt-3" id="predictionResult"></div>
                        </div>

                        <script>
                            // Define a function to handle the form submission
                            function predictPassRate(event) {
                                event.preventDefault();

                                // Get the selected semester and previous pass rate from the form
                                const semester = document.getElementById('semester').value;
                                const previousPassRate = parseFloat(document.getElementById('previousPassRate').value);

                                // Perform the pass rate prediction using a classification algorithm
                                // Replace this part with your own classification algorithm implementation

                                let predictedPassRate;
                                if (previousPassRate >= 70) {
                                    predictedPassRate = previousPassRate + 5;
                                } else {
                                    predictedPassRate = previousPassRate - 3;
                                }

                                // Display the prediction result
                                const predictionResult = document.getElementById('predictionResult');
                                predictionResult.innerHTML = `<h3>Predicted Pass Rate for ${semester}: ${predictedPassRate}%</h3>`;
                            }

                            // Attach an event listener to the form submit event
                            document.getElementById('passRateForm').addEventListener('submit', predictPassRate);
                        </script>


                    </div>
                </div>
            </div>
            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->

    </div>
@endsection
