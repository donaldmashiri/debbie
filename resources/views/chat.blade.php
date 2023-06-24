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

                        <script>
                            // Function to send a message
                            function sendMessage() {
                                const message = document.getElementById('message').value;

                                // Send the message to the backend for encryption and delivery
                                // Implement the logic to send the message to the server for encryption and delivery
                                // This code only focuses on the frontend components

                                // Clear the input field after sending
                                document.getElementById('message').value = '';
                            }
                        </script>

                        <div class="container mt-5">
                            <h1>End-to-End Encrypted Chat</h1>
                            <div id="chatbox" class="border p-3 mb-3" style="height: 300px; overflow-y: scroll;"></div>
                            <form>
                                <div class="input-group">
                                    <input type="text" id="message" class="form-control" placeholder="Type your message">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary" onclick="sendMessage()">Send</button>
                                    </div>
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
