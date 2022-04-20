{{-- <?php
$pg = '';
$title = "Edit Profile";
include('header.php');
include('sidebar.php');
?> --}}

@extends('layouts.myapp')
@extends('layouts.sidebar')
@section('content')


<div class="app-content content dashboard">
    <div class="content-wrapper content-wrapper-2">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row card py-lg-5 py-3 px-2 px-md-3">
                    <div class="col-12">
                        <h1 class="ml-1 main-heading"><a href="profile.php" class="back-arrow"><i class="fas fa-arrow-alt-circle-left"></i></a>Edit Profile</h1>
                        <form action="{{route('profile_update')}}" method="POST">
                            @csrf
                            <div class="row mt-md-2 mt-1">

                                <div class="col-12">
                                    <div class="profile-image text-center position-relative">
                                        <img src="images/profile-placeholder.png" alt="" class="img-fluid">
                                        <label for="upload-image" class="upload-camera"><i class="fas fa-camera"></i></label>
                                        <input type="file" id="upload-image" accept="image/*" class="d-none">
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="account-info">
                                                <h3 class="info-heading">Account Information</h3>
                                                <div class="info-div form-group position-relative w-75">
                                                    <label for="full-name" class="info-label">Full Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="name" id="full-name" class="form-control profile-input" placeholder="Enter Full Name" value="{{Auth::user()->name}}" >
                                                </div>
                                                <div class="info-div mb-2 mb-xl-3">
                                                    <label for="" class="info-label">Email Address</label>
                                                    <p class="info-value">{{Auth::user()->email}}</p>
                                                </div>
                                            </div>

                                            <div class="account-info">
                                                <h3 class="info-heading">Change Password</h3>
                                                <label for="current-password" class="info-label">Current Password<span class="text-danger">*</span></label>
                                                <div class="info-div form-group position-relative w-75">
                                                    <input type="password" class="w-100 pass-field enter-input profile-input" id="current-password" placeholder="Enter Current Password*" name="current_password">
                                                    <i class="far fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                                </div>
                                                <label for="new-password" class="info-label">New Password<span class="text-danger">*</span></label>
                                                <div class="info-div form-group position-relative w-75">
                                                    <input type="password" class="w-100 pass-field enter-input profile-input" id="new-password" placeholder="Enter New Password*" name="new_password">
                                                    <i class="far fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                                </div>
                                                {{-- <label for="confirm-password" class="info-label">Confirm Password<span class="text-danger">*</span></label>
                                                <div class="info-div form-group position-relative w-75">
                                                    <input type="password" class="w-100 pass-field enter-input profile-input" id="confirm-password" placeholder="Enter Confirm Password*" name="confirm_password">
                                                    <i class="far fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="account-info">
                                                <h3 class="info-heading">Contact Information</h3>
                                                <div class="info-div form-group position-relative w-75">
                                                    <label for="phone-number" class="info-label">Phone Number<span class="text-danger">*</span></label>
                                                    <input type="text" name="mobile_no" id="phone-number" class="w-100 pass-field enter-input profile-input" placeholder="+1 (123) 456–7890" value="{{Auth::user()->mobile_no}}">
                                                </div>

                                            </div>
                                        </div>
                                    @if(session('success'))
                                        <span style="color:red">{{session('success')}}</span>
                                    @endif
                                        <div class="col-12">
                                            <input type="submit" class="primary-button d-table mx-auto mt-1" value="Submit">
                                            {{-- <a class="primary-button d-table mx-auto mt-1" data-toggle="modal" data-target="#save-profile">Save</a> --}}
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </form>
                    </div>
            </section>
        </div>
    </div>
</div>



@endsection
{{-- <?php include('footer.php') ?> --}}