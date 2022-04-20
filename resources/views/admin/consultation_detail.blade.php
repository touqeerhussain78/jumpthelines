@extends('layouts.myapp')
@extends('layouts.sidebar')
@section('content')

{{-- <?php
$pg = 'consultation-requests';
$title = "Consultation Requests Details";
include('header.php');
include('sidebar.php');
?> --}}

<div class="app-content content dashboard">
    <div class="content-wrapper content-wrapper-2">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="card py-lg-5 py-3 px-2 px-md-3">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="main-heading ml-1 my-1 my-sm-0"><a href="" class="back-arrow"><i class="fas fa-arrow-alt-circle-left"></i></a>Consultation Request Details</h1>
                        </div>
                        <div class="col-12">
                            <div class="d-lg-flex justify-content-between align-items-center my-2 my-lg-4">
                                @if($consultation_detail->status == 'approved')
                                <div class="request-id-div">
                                    <p class="font-weight-bold m-0">Payment Status: <span class="request-status active-td">Received</span></p>
                                </div>
                                @endif
                                <div class="request-status-div text-right my-1">
                                    <span class="project-status status-approved">{{$consultation_detail->status}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="request-details">
                        <div class="gray-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="info-heading">Service Details</h2>
                                </div>
                                <div class="col-xl-4">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Service Name</h3>
                                        <p>{{$consultation_detail->service->title}}</p>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Service Category</h3>
                                        <p>{{$consultation_detail->service->category->title}}</p>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Turn-around Time</h3>
                                        <p>24 to 40 hours</p>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Description</h3>
                                        <p>{{$consultation_detail->special_note}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if($consultation_detail->status == 'approved')
                        <div class="gray-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="info-heading">Quotation Details</h2>
                                </div>
                                <div class="col-xl-4">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Project Completion Time</h3>
                                        <p>{{$consultation_detail->completion_date}}</p>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Charges</h3>
                                        <p>${{$consultation_detail->consultation_charges}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif


                        <div class="gray-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="info-heading">Company Information</h2>
                                </div>
                                <div class="col-xl-4">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Company Name</h3>
                                        <p>{{$consultation_detail->company_name}}</p>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="project-info">
                                        <h3 class="project-subheading">URL Link</h3>
                                        <p>{{$consultation_detail->url_link}}</p>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="project-info">
                                        <h3 class="project-subheading">No. of Employees</h3>
                                        <p>{{$consultation_detail->no_of_employees}}</p>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Project Title</h3>
                                        <p>{{$consultation_detail->project_title}}</p>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Business Type</h3>
                                        <p>{{$consultation_detail->business_type}}</p>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Description</h3>
                                        <p>{{$consultation_detail->special_note}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gray-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="info-heading">User Details</h2>
                                </div>
                                <div class="col-xl-4">
                                    <div class="project-info">
                                        <h3 class="project-subheading">First Name</h3>
                                        <p>{{$consultation_detail->user->first_name}}</p>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Last Name</h3>
                                        <p>{{$consultation_detail->user->last_name}}</p>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Email Address</h3>
                                        <p>{{$consultation_detail->user->email}}</p>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="project-info">
                                        <h3 class="project-subheading">Contact Number</h3>
                                        <p>{{$consultation_detail->user->mobile_no}}</p>
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