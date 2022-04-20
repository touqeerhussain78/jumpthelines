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
                                @if($consultation_detail->status == 'submitted' )
                                <div class="request-id-div">
                                    <a class="general-btn btn-accept d-inline-block px-3 mr-1" data-toggle="modal" data-target="#approve-consultation">Approve</a>
                                    <a class="general-btn btn-reject d-inline-block px-3" data-toggle="modal" data-target="#reject-consultation">Reject</a>
                                </div>
                                @endif
                                
                                <div class="request-status-div text-right my-1">
                                    <span class="project-status status-process">{{$consultation_detail->status}}</span>
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

                        @if($consultation_detail->status == 'pending')
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


<!-- Approve Consultation Modal -->
<div class="modal fade" id="approve-consultation" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
               <form action="{{route('accept_quote')}}" method="POST">
                    @csrf
                    <div class="info-div form-group position-relative w-100">
                        <label for="consultation-completion-date" class="info-label">Start Date<span class="text-danger">*</span></label>
                        <input type="date" name="start_date" id="completion-date" class="form-control profile-input">
                    </div>
                    <div class="info-div form-group position-relative w-100">
                        <label for="consultation-completion-date" class="info-label">Completion Date<span class="text-danger">*</span></label>
                        <input type="date" name="completion_date" id="completion-date" class="form-control profile-input">
                    </div>
                    <input type="hidden" name="status" value="pending">
                    <input type="hidden" name="user_service_id" value="{{$consultation_detail->id}}">
                    <div class="info-div form-group position-relative w-100">
                        <label for="consultation-charges" class="info-label">Total Weeks<span class="text-danger">*</span></label>
                        <input type="number" name="weeks" id="consultation-charges" class="form-control profile-input" placeholder="Enter Charges">
                    </div>
                    <div class="info-div form-group position-relative w-100">
                        <label for="consultation-charges" class="info-label">Charges<span class="text-danger">*</span></label>
                        <input type="number" name="consultation_charges" id="consultation-charges" class="form-control profile-input" placeholder="Enter Charges">
                    </div>
                    <div class="modal-btn-div">
                        <input type="submit" class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" value="Approve">
                        {{-- <a type="submit" class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#approved-consultation">Approve</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Approve Consultation Modal -->



<!-- Reject Consultation Modal -->
<div class="modal fade" id="reject-consultation" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">`
                <img src="images/question-mark.png" alt="">
                <p class="modal-text">Are you sure you want to reject this request?</p>
                <div class="modal-btn-div">
                    <a class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" onclick="reject_me({{$consultation_detail->id}})">Yes</a>
                    <a class="general-btn btn-reject d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close">No</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reject Consultation Modal -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // $(document).ready(function(){


        function reject_me(id){
             $.ajax({
            url: "{{route('user_status_change')}}",
            type: "POST",
            data:{ 
                _token:'{{ csrf_token() }}',
                 id:id,
                 status:'reject'
            },
            dataType: 'json',
            }).done(function( response ) {
                location.reload();
            });
        }

    // });


</script>
@endsection
{{-- <?php include('footer.php') ?> --}}