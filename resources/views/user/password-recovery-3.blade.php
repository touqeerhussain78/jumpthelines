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
                <form id="general-form" method="POST" action="{{route('user_update_password_save')}}">
                    @csrf
                    <div class="row px-md-5 px-3">
                        <div class="col-12 text-center">
                            <h3 class="main-heading-alt h-center">Password Recovery</h3>
                        </div>
                          <input type="hidden" name="email" value="{{ request()->email  }}">
                         <!-- password -->
                         <div class="col-xl-6 col-12 mb-3">
                            <label for="password" class="form-label">Password*</label>
                            <div class="position-relative">
                                <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter Your Password Here">
                                <i class="far fa-eye-slash pass-icon"></i>
                            </div>
                        </div>
                        <!-- confirm password -->
                        <div class="col-xl-6 col-12 mb-3">
                            <label for="password" class="form-label">Confirm Password*</label>
                            <div class="position-relative">
                                <input type="password" class="form-control" name="password_confirmation" id="password" aria-describedby="password" placeholder="Confirm Password Here">
                                <i class="far fa-eye-slash pass-icon"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <input type="submit"  class="btn gold-btn-filled mt-5" value="Update">
                        {{-- <a href="password-recovery-3.php" class="btn gold-btn-filled mt-5">Update</a> --}}
                        <a href="{{route('login')}}" class="btn gold-btn-outline mt-5">Back To Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- <?php include('footer.php'); ?> --}}