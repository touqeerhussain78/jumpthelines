{{-- <?php 
    $title = 'Password Recovery';
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
                <h2 class="page-banner-title">Password <span class="text-white">Recovery</span></h2>
            </div>
        </div>
    </div>
    <img src="{{asset('user_files/img/light-tri-one.png')}}" alt="" class="img-fluid tri-one">
    <img src="{{asset('user_files/img/light-tri-two.png')}}" alt="" class="img-fluid tri-two">
    <img src="{{asset('user_files/img/light-tri-three.png')}}" alt="" class="img-fluid tri-three">
</section>



<!-- SECTION -->

<div class="container">
    <div class="row py-5 my-5">
        <!-- Contact form starts here -->
        <div class="col-12 my-5">
            <div class="bg-shape" data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="600">
                <form id="general-form"  action="{{route('user_verifying_password')}}" method="POST">
                    @csrf
                    <div class="row px-md-5 px-3">
                        <div class="col-12 text-center">
                            <h3 class="main-heading-alt h-center">Password Recovery</h3>
                        </div>
                          <input type="hidden" name="email" value="{{ request()->email  }}">
                        <!-- email -->
                        <div class="col-8 mx-auto mb-3">
                            <label for="code" class="form-label">Verification Code*</label>
                            <input type="text" name="code"  class="form-control" id="code" aria-describedby="code" placeholder="Enter Your Code Here">
                        </div>

                        <div class="col-8 mx-auto text-end">
                            {{-- <a href="#" class="blue-link">Didn’t Receive Code? Send It Again</a> --}}
                        </div>
                    </div>
                
                    <div class="text-center">
                        <input type="submit"  class="btn gold-btn-filled mt-5" value="Continue">
                        {{-- <a href="password-recovery-3.php" class="btn gold-btn-filled mt-5">Continue</a> --}}
                        <a href="{{route('login')}}" class="btn gold-btn-outline mt-5">Back To Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- <?php include('footer.php'); ?> --}}