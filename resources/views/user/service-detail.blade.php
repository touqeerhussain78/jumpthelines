{{-- <?php 
    $title = 'Service Details';
    include('header.php');
?>  --}}
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
                <h2 class="page-banner-title">Service <span class="text-white">Details</span></h2>
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
        <!-- Service main banner -->
        <div class="col-12 my-5">
            <div class="bg-shape" data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="600">
                <div id="general-form" class="no-padding">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('user_files/img/service-detail-banner.png')}}" alt="" class="img-fluid w-100">
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <h4 class="sub-heading h-left">Service Name</h4>
            <h6 class="sub-title">{{$service->title}}</h6>
        </div>
        <div class="col-md-3">
            <h4 class="sub-heading h-left">Service Category</h4>
            <h6 class="sub-title">{{$service->category->title}}</h6>
        </div>
        <div class="col-md-3">
            <h4 class="sub-heading h-left">Turn-around Time</h4>
            <h6 class="sub-title">{{$service->estimate_time}}</h6>
        </div>

        <div class="col-12 mt-5">
            <h4 class="sub-heading h-left">Description</h4>
            <p class="pe-4">{{$service->description}}
            </p>

            <a href="{{route('enquiry_detail',['id' => $service->id])}}" class="gold-btn-filled d-inline-block my-4">Book Now</a>
        </div>
    </div>
</div>

@endsection
{{-- <?php include('footer.php'); ?> --}}