{{-- <?php
$pg = 'feedbacks';
$title = "Feedback Details";
include('header.php');
include('sidebar.php');
?> --}}

@extends('layouts.myapp')
@extends('layouts.sidebar')
@section('content')

<div class="app-content content dashboard">
    <div class="content-wrapper content-wrapper-2">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row card py-lg-5 py-3 px-2 px-md-3">
                    <div class="col-12">
                        <h1 class="ml-1 main-heading"><a href="feedbacks.php" class="back-arrow"><i class="fas fa-arrow-alt-circle-left"></i></a>Feedback Details</h1>
                    </div>
                    <div class="col-12">
                        <div class="row mt-md-2 mt-1">
                            <div class="col-12">
                                <div class="profile-image text-center">
                                    {{-- <img src="images/profile-image.png" alt="" class="img-fluid"> --}}
                                    <p class="font-weight-bold mt-2">ID: <span class="feedback-id font-weight-normal">{{$feedback_detail->id}}</span></p>
                                </div>
                            </div>
                            <div class="col-12 mt-2 mt-lg-2">
                                <div class="request-details">
                                    <div class="gray-card">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="project-info">
                                                    <h3 class="project-subheading">First Name</h3>
                                                    <p>{{$feedback_detail->first_name}}</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="project-info">
                                                    <h3 class="project-subheading">Last Name</h3>
                                                    <p>{{$feedback_detail->last_name}}</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="project-info">
                                                    <h3 class="project-subheading">Subject</h3>
                                                    <p>{{$feedback_detail->subject}}</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="project-info">
                                                    <h3 class="project-subheading">Last Name</h3>
                                                    <p>{{$feedback_detail->last_name}}</p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="project-info">
                                                    <h3 class="project-subheading">Message</h3>
                                                    <p>{{$feedback_detail->message}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>
@endsection
{{-- <?php include('footer.php') ?> --}}