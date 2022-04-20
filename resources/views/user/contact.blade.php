{{-- <?php 
    $title = 'Contact Us';
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
                <h2 class="page-banner-title">Contact <span class="text-white">Us</span></h2>
            </div>
        </div>
    </div>
    <img src="{{asset('img/light-tri-one.png')}}" alt="" class="img-fluid tri-one">
    <img src="{{asset('img/light-tri-two.png')}}" alt="" class="img-fluid tri-two">
    <img src="{{asset('img/light-tri-three.png')}}" alt="" class="img-fluid tri-three">
</section>



<!-- SECTION -->

<section id="contact">
    <div class="container">
        <div class="row py-5 my-5">
            <div class="col-12">
                <h3 class="main-heading-alt h-left">Mandatory Disclosure</h3>
                <p class="pe-md-5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining 
                    essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
                    versions of Lorem Ipsum.
                </p>
            </div>

            <!-- Contact form starts here -->
            <div class="col-12 my-5">
                <div class="bg-shape" data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="600">
                    <form id="contact-form">
                        <div class="row ps-md-5 ps-3">
                            <!-- first name -->
                            <div class="col-sm-6 col-12 mb-3">
                                <label for="firstName" class="form-label">First Name*</label>
                                <input type="text" class="form-control" id="firstName" aria-describedby="firstName" placeholder="Enter Your First Name Here">
                            </div>
                            <!-- last name -->
                            <div class="col-sm-6 col-12 mb-3">
                                <label for="lastName" class="form-label">Last Name*</label>
                                <input type="text" class="form-control" id="lastName" aria-describedby="lastName" placeholder="Enter Your Last Name Here">
                            </div>
                            <!-- email -->
                            <div class="col-sm-6 col-12 mb-3">
                                <label for="email" class="form-label">Email Address*</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Your Email Address Here">
                            </div>
                            <!-- Phone Number* -->
                            <div class="col-sm-6 col-12 mb-3">
                                <label for="phone" class="form-label">Phone Number*</label>
                                <input type="text" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter Your Last Name Here">
                            </div>
                            <!-- Subject* -->
                            <div class="col-12 mb-3">
                                <label for="subject" class="form-label">Subject*</label>
                                <input type="text" class="form-control" id="subject" aria-describedby="subject" placeholder="Enter Your Subject Here">
                            </div>
                            <!-- Message* -->
                            <div class="col-12 mb-3">
                                <label for="subject" class="form-label">Message*</label>
                                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Type Message Here"></textarea>
                            </div>
                        </div>
                    
                        <div class="text-center">
                            <button type="submit" class="btn gold-btn-filled mt-5">Send</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 d-sm-block d-none">
                <div class="contact-overlay" >
                    <img src="img/contact-form-img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
{{-- <?php include('footer.php'); ?> --}}