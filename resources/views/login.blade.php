@extends('layouts.myapp')
@section('content')

<!-- <section class="welcome-mob mb-2 py-2 d-block d-lg-none">
    <div class="container-fluid">
        <h2 class="my-1">Welcome to Jump The Line</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
    </div>
</section> -->
<section class="login">
    <div class="container-fluid">
        <div class="row align-items-stretch">
            <div class="col-lg-4 m-auto">
                <div class="login-form pt-2 pt-lg-0">
                    <div class="text-left mb-3 mb-lg-4">
                        <img src="images/logo.png" alt="" class="img-fluid">
                    </div>
                    <form method="POST" action="{{ route('create') }}">
                        @csrf
                        <div class="form-heading mb-2 mb-lg-3">
                            <h2>Login</h2>
                        </div>
                        <div class="form-group position-relative mb-3">
                            <input type="email" name="email" class="w-100" id="emailInput" aria-describedby="emailHelp" placeholder="Enter Email Address*">
                            <label for="emailInput" class="input-icon"><i class="fas fa-envelope accent-color"></i></label>
                        </div>
                        <div class="form-group position-relative">
                            <input type="password" name="password" class="w-100 pass-field enter-input" id="exampleInputPassword1" placeholder="Enter Password*">
                            <i class="far fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                        </div>
                        <div class="form-group form-check text-right w-90 mb-3">
                            <a href="{{route('password_recovery')}}" class="decorated-link-aqua">Forgot Password?</a>
                        </div>
                            
                        <div class="text-center pb-lg-0 pb-2">
                            @if(session('success'))
                                <span style="color:red">{{session('success')}}</span>
                            @endif
                            <button type="submit" class="aqua-btn mt-lg-2 mt-1 w-100">Login</button>
                              {{-- <input type="submit"  class="aqua-btn mt-lg-2 mt-1 w-100" style="color:white" value="Log In"> --}}
                            <a href="#_" class="d-inline-block back-to-web mt-2">Back To Website</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 right-bg d-none d-lg-block">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="welcome-content w-50 mx-auto">
                        <div class="welcome-img d-none d-lg-block">
                            <img src="images/welcome-img.png" alt="" class="img-fluid">
                        </div>
                        <div class="welcome-text">
                            <h2 class="my-1">Welcome to Jump The Line</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection