{{-- <?php
$title = 'Enquiry Form Submitted';
include('header.php');
?> --}}
@extends('layouts.user_master')
@extends('layouts.user_nav')
<!-- ..................... PAGE TITLE ..................... -->
<section class="page-title">
                    @section('nav')
    {{-- <?php include('topbar-user.php'); ?>
    <?php include('navigation.php'); ?> --}}

    <div class="container">
        <div class="row py-5 align-items-end">
            <div class="col-12 text-left">
                <h2 class="page-banner-title">Enquiry <span class="text-white">Form</span></h2>
            </div>
        </div>
    </div>
    <img src="{{asset('user_files/img/light-tri-one.png')}}" alt="" class="img-fluid tri-one">
    <img src="{{asset('user_files/img/light-tri-two.png')}}" alt="" class="img-fluid tri-two">
    <img src="{{asset('user_files/img/light-tri-three.png')}}" alt="" class="img-fluid tri-three">
</section>



<!-- SECTION -->
<div class="container">
    <div class="row py-4 my-3">
        <!-- Contact form starts here -->
        <div class="col-12 my-5">
            <div class="bg-shape" data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="600">
                <div id="general-form">
                    <div class="row px-md-5 px-3">
                        <div class="col-12 mb-4 text-center">
                            <h3 class="main-heading-alt h-center text-black border-bottom border-light">Services Details</h3>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Service Name</h4>
                            <h6 class="sub-title">{{$user_service->service->title}}</h6>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Service Category</h4>
                            <h6 class="sub-title">{{$user_service->service->category->title}}</h6>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Turn-around Time</h4>
                            <h6 class="sub-title">{{$user_service->service->estimate_time}}</h6>
                        </div>
                        <div class="col-12">
                            <h4 class="sub-heading h-left">Description</h4>
                            <p class="pe-4">{{$user_service->service->description}}</p>
                        </div>
                    </div>
                    <div class="status-label green">Status : {{$user_service->status}}</div>
                </div>
            </div>
        </div>
        <!-- Service main banner -->
        <div class="col-12 my-5">
            <div class="bg-shape shape-left" data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="600">
                <div id="general-form" >
                    <div class="row">
                        <div class="col-12 mb-4 text-center">
                            <h3 class="main-heading-alt h-center text-black border-bottom border-light">Company Information</h3>
                        </div>
                        <div class="row px-5">
                            <div class="col-lg-6">
                                <div class="row">
                                    <!-- Company Name* -->
                                    <div class="col-12 mb-3">
                                        <label for="companyName" class="form-label">Company Name*</label>
                                        <p class="form-val">{{$user_service->company_name}}</p>
                                    </div>
                                    <!-- No. Of Employees* -->
                                    <div class="col-12 mb-3">
                                        <label for="employees" class="form-label">No. Of Employees*</label>
                                        <p class="form-val">{{$user_service->no_of_employees}}</p>                                    
                                    </div>
                                    <!-- Project Title* -->
                                    <div class="col-12 mb-3">
                                        <label for="projectTitle" class="form-label">Project Title*</label>
                                        <p class="form-val">{{$user_service->project_title}}</p>                                    
                                    </div>
                                    <!-- Buisness Type* -->
                                    <div class="col-12 mb-3">
                                        <label for="businessType" class="form-label">Buisness Type*</label>
                                        <p class="form-val">{{$user_service->business_type}}</p>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <!-- URL Link* -->
                                    <div class="col-12 mb-3">
                                        <label for="url" class="form-label">URL Link*</label>
                                        <p class="form-val">{{$user_service->url_link}}</p>
                                    </div>
                                    <!-- Special Notes* -->
                                    <div class="col-12 mb-4">
                                        <label for="notes" class="form-label">Special Notes*</label>
                                        <p class="form-val">{{$user_service->special_note}}</p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($user_service->status == 'pending')
    <div class="row">
<div class="col-12 my-5">
            <div class="bg-shape" data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="600">
                <div id="general-form">
                    <div class="row px-md-5 px-3 mt-5 mt-md-0">
                        <div class="col-12 mb-4 text-center">
                            <h3 class="main-heading-alt h-center text-black border-bottom border-light">Quotation Details </h3>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Project Start Time</h4>
                            <h6 class="sub-title">{{$user_service->start_date}}</h6>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Project Completion Time</h4>
                            <h6 class="sub-title">{{$user_service->completion_date}}</h6>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Total Weeks</h4>
                            <h6 class="sub-title">{{$user_service->weeks}}</h6>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Charges</h4>
                            <h6 class="sub-title">${{$user_service->consultation_charges}}</h6>
                        </div>
                        @if($user_service->status == 'pending')
                        <div class="col-12 text-center">
                            <button type="button" class="btn gold-btn-filled" data-bs-toggle="modal" data-bs-target="#paymentScreen">Accept and Pay Reject</button>
                            <button type="button" class="btn gold-btn-outline">Reject</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>


<!-- Payment screen modal -->
<div class="modal" tabindex="-1" id="paymentScreen">
  <div class="modal-dialog modal-dialog-centered">
      <div class="bg-shape">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <form action="{{route('pay')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <h5 class="main-heading-alt h-center text-black border-bottom border-light text-center">Payment Details</h5>
                    <h5 class="amount px-5">Amount: <span class="dolar">{{$user_service->consultation_charges}}</span></h5>
                    <div id="general-form" class="border-0 py-0">
                        <div class="row">
                            <!-- Card holder Name* -->
                            <div class="col-12 mb-3">
                                <label for="holderName" class="form-label">Cardholder Name*</label>
                                <input type="text" name="card_name" class="form-control" id="companyName" aria-describedby="companyName" placeholder="Enter Cardholder Name">
                            </div>
                            <!-- Card Number* -->
                            <div class="col-12 mb-3">
                                <label for="cardNumber" class="form-label">Card Number*</label>
                                <input type="text" name="card_number" class="form-control" id="cardNumber" aria-describedby="cardNumber" placeholder="Enter Card Number">
                            </div>
                            <!-- CVV* -->
                            <div class="col-12 mb-3">
                                <label for="cvv" class="form-label">CVV*</label>
                                <input type="number" name="cvv" class="form-control" id="cvv" aria-describedby="cvv" placeholder="Enter CVV Code">
                            </div>
                            <input type="hidden" name="charges" value="{{$user_service->consultation_charges}}">
                            <input type="hidden" name="user_service_id" value="{{$user_service->id}}">
                            <!-- Expiry Date* -->
                            <div class="col-12 mb-3">
                                <label for="expiryDate" class="form-label d-block">Expiry Date*</label>
                                <input class="date w-100"  type="date" name="expiry_date" id="expiryDate">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top-0 justify-content-center pb-5">
                    <input type="submit" class="btn gold-btn-filled" value="Pay">
                    {{-- <button type="button" class="btn gold-btn-filled" data-bs-toggle="modal" data-bs-target="#successfulPayment" data-bs-dismiss="modal">Pay</button> --}}
                </div>
            </form>
        </div>
      </div>
  </div>
</div>

{{-- <div class="modal" tabindex="-1" id="successfulPayment">
  <div class="modal-dialog modal-dialog-centered">
      <div class="bg-shape">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body text-center">
                <img src="img/checked.png" alt="" class="img-fluid mx-auto">
                <h5 class="main-heading-alt h-center text-black border-bottom border-light">Payment Details</h5>
            </div>
            <div class="modal-footer border-top-0 justify-content-center pb-5">
                <button type="button" class="btn gold-btn-filled" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
      </div>
  </div>
</div> --}}


<div class="modal" tabindex="-1" id="formSubmitted">
  <div class="modal-dialog modal-dialog-centered">
      <div class="bg-shape">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body text-center">
                <img src="img/checked.png" alt="" class="img-fluid mx-auto">
                <h5>Your form has been submitted successfully</h5>
            </div>
            <div class="modal-footer border-top-0 justify-content-center pb-5">
                <button type="button" class="btn gold-btn-filled" data-bs-dismiss="modal">Got it</button>
                <button type="button" class="btn gold-btn-outline">View Form</button>
            </div>
        </div>
      </div>
  </div>
</div>
@endsection
{{-- <?php include('footer.php'); ?> --}}