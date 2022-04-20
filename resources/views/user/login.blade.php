@extends('layouts.user_master')
@extends('layouts.user_nav')
<!-- ..................... PAGE TITLE ..................... -->
<section class="page-title">

                @section('nav')
    <div class="container">
        <div class="row py-5 align-items-end">
            <div class="col-12 text-left">
                <h2 class="page-banner-title">Log<span class="text-white">in</span></h2>
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
                    <form id="general-form" method="POST" action="{{ route('create') }}">
                        @csrf
                    <div class="row px-md-5 px-3">
                        <div class="col-12 text-center">
                            <h3 class="main-heading-alt h-center">Login</h3>
                        </div>
                        <!-- email -->
                        <div class="col-xl-6 col-12 mb-3">
                            <label for="email" class="form-label">Email Address*</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Your Email Address Here">
                        </div>
                        <input type="hidden" name="is_admin" value="0">
                        <!-- password -->
                        <div class="col-xl-6 col-12 mb-3">
                            <label for="password" class="form-label">Password*</label>
                            <div class="position-relative">
                                <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter Your Password Here">
                                <i class="far fa-eye-slash pass-icon"></i>
                            </div>
                        </div>

                        <div class="col-12 text-end">
                             @if (Route::has('password.request'))
                                    <a href="{{route('reset_password')}}" class="blue-link" >Forgot your password?</a>
                                    {{-- <a class="btn btn-link" href="{{ route('password.request') }}" class="forgotLink">
                                        {{ __('Forgot Your Password?') }}
                                    </a> --}}
                                    @endif
                            {{-- <a href="" class="blue-link">Forgot Password?</a> --}}
                        </div>
                    </div>
                             @if(session('success'))
                                <span style="color:red">{{session('success')}}</span>
                            @endif
                    <div class="text-center">
                        <button type="submit" class="btn gold-btn-filled mt-5">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- <?php include('footer.php'); ?> --}}