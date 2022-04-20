{{-- <?php
$pg = '';
$title = "Profile";
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
                        <h1 class="ml-1 main-heading">Admin Profile</h1>
                    </div>
                    <div class="col-12">
                        <div class="row mt-md-2 mt-1">
                            <div class="col-12">
                                <div class="profile-image text-center">
                                    <img src="images/profile-image.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="account-info">
                                            <h3 class="info-heading">Account Information</h3>
                                            <div class="info-div mb-2 mb-xl-3">
                                                <label for="" class="info-label">Full Name</label>
                                                <p class="info-value">{{Auth::user()->name}}</p>
                                            </div>
                                            <div class="info-div mb-2 mb-xl-3">
                                                <label for="" class="info-label">Email Address</label>
                                                <p class="info-value">{{Auth::user()->email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="account-info">
                                            <h3 class="info-heading">Contact Information</h3>
                                            <div class="info-div mb-2 mb-xl-3">
                                                <label for="" class="info-label">Phone Number</label>
                                                <p class="info-value">{{Auth::user()->mobile_no}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <a href="{{route('edit_profile')}}" class="primary-button d-table mx-auto mt-1">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>
@endsection
{{-- <?php include('footer.php') ?> --}}