@extends('layouts.myapp')
@extends('layouts.sidebar')
@section('content')

{{-- <?php
$pg = 'services';
$title = "Add New Service";
include('header.php');
include('sidebar.php');
?> --}}

<div class="app-content content dashboard">
    <div class="content-wrapper content-wrapper-2">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row card py-lg-5 py-3 px-2 px-md-3">
                    <div class="col-12">
                        <h1 class="ml-1 main-heading"><a href="services.php" class="back-arrow"><i class="fas fa-arrow-alt-circle-left"></i></a>Add New Service</h1>
                        <form action="{{route('service_store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-md-2 mt-1">

                                <div class="col-12 mt-4">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="account-info">
                                                <div class="info-div form-group position-relative w-75">
                                                    <label for="title" class="info-label">Title<span>*</span></label>
                                                    <input type="text" required name="title" id="title" class="form-control profile-input" placeholder="Enter Title">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-6">
                                            <div class="account-info">
                                                <div class="info-div form-group position-relative w-75">
                                                    <label for="category-select" class="info-label">Category<span>*</span></label>
                                                    <select class="form-control profile-input" id="category-select" name="category_id" required>
                                                        <option  disabled selected >Select Category</option>
                                                            @foreach ($category as $item)
                                                                <option value="{{$item->id}}">{{$item->title}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="account-info">
                                                <div class="info-div form-group position-relative">
                                                    <label for="service-description" class="info-label">Description</label>
                                                    <textarea name="description" required id="service-description" class="form-control profile-input" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="account-info">
                                                <label for="" class="info-label">Upload Image<span class="text-danger">*</span></label>
                                                <div class="info-div service-image form-group position-relative">
                                                    <img src="{{asset('images/image-placeholder.png')}}" alt="" class="img-fluid profile-input">
                                                    <label for="upload-image" class="upload-icon"><img src="{{asset('images/upload.png')}}" alt="" class="img-fluid"></label>
                                                    <input type="file" name="image" required id="upload-image" accept="image/*" class="d-none">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="account-info">
                                                <label for="service-time" class="info-label">Estimated Turn Around Time</label>
                                                <div class="info-div form-group position-relative">
                                                    <input type="time"  required name="estimate_time" id="service-time" class="profile-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <input class="primary-button d-table mx-auto mt-1" type="submit" value="Add">
                                            {{-- <a class="primary-button d-table mx-auto mt-1" data-toggle="modal" data-target="#add-service">Add</a> --}}
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