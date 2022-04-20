{{-- <?php
$title = 'Enquiry Details';
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
                <h2 class="page-banner-title">Service <span class="text-white">Form</span></h2>
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
        @if(session('success'))
            <span style="color:green">{{session('success')}}</span>
    @endif
        <div class="col-12 my-5">
            <div class="bg-shape" data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="600">
                <div id="general-form">
                    <div class="row px-md-5 px-3">
                        <div class="col-12 mb-4 text-center">
                            <h3 class="main-heading-alt h-center text-black border-bottom border-light">Services Details</h3>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Service Name</h4>
                            <h6 class="sub-title">{{$service->title}}</h6>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Service Category</h4>
                            <h6 class="sub-title">{{$service->category->title}}</h6>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Turn-around Time</h4>
                            <h6 class="sub-title">{{$service->estimate_time}}</h6>
                        </div>
                        <div class="col-12">
                            <h4 class="sub-heading h-left">Description</h4>
                            <p class="pe-4">{{$service->description}}</p>
                        </div>
                    </div>
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
                        <form action="{{route('book_service')}}" method="POST">
                            @csrf
                            <input type="hidden" name="service_id" value="{{$service->id}}">
                            <input type="hidden" name="status" value="submitted">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <!-- Company Name* -->
                                    <div class="col-12 mb-3">
                                        <label for="companyName" class="form-label">Company Name*</label>
                                        <input type="text" name="company_name" class="form-control" id="companyName" aria-describedby="companyName" placeholder="Abc Company">
                                    </div>
                                    <!-- No. Of Employees* -->
                                    <div class="col-12 mb-3">
                                        <label for="employees" class="form-label">No. Of Employees*</label>
                                        <input type="number" name="no_of_employees" class="form-control" id="employees" aria-describedby="employees" placeholder="1120">
                                    </div>
                                    <!-- Project Title* -->
                                    <div class="col-12 mb-3">
                                        <label for="projectTitle" class="form-label">Project Title*</label>
                                        <input type="text" name="project_title" class="form-control" id="projectTitle" aria-describedby="projectTitle" placeholder="Abc Project">
                                    </div>
                                    <!-- Buisness Type* -->
                                    <div class="col-12 mb-3">
                                        <label for="businessType" class="form-label">Buisness Type*</label>
                                        <input type="text" name="business_type" class="form-control" id="businessType" aria-describedby="businessType" placeholder="Software Development">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <!-- URL Link* -->
                                    <div class="col-12 mb-3">
                                        <label for="url" class="form-label">URL Link*</label>
                                        <input type="text" name="url_link" class="form-control" id="url" aria-describedby="url" placeholder="Https://Abc//">
                                    </div>
                                    <!-- Special Notes* -->
                                    <div class="col-12 mb-4">
                                        <label for="notes" class="form-label">Special Notes*</label>
                                    <textarea name="special_note" id="" cols="30" rows="10" class="form-control" placeholder="Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the isto printing and type setting industry. Lorem Ipsum has been the industry's oka standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."></textarea>
                                    </div>
                                    <div class="col-12">
                                        @if(Auth::user())
                                            @if(Auth::user()->is_admin == '0')
                                        <input type="submit" class="btn gold-btn-filled" value="Submit Now">
                                        @endif
                                        @endif
                                        {{-- <a href="#" class="btn gold-btn-filled" data-bs-toggle="modal" data-bs-target="#formSubmitted">Submit Now</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
</div>


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