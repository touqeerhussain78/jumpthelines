{{-- <?php 
    $title = 'Service Listing';
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
                <h2 class="page-banner-title">Service <span class="text-white">Listing</span></h2>
            </div>
        </div>
    </div>
    <img src="{{asset('user_files/img/light-tri-one.png')}}" alt="" class="img-fluid tri-one">
    <img src="{{asset('user_files/img/light-tri-two.png')}}" alt="" class="img-fluid tri-two">
    <img src="{{asset('user_files/img/light-tri-three.png')}}" alt="" class="img-fluid tri-three">
</section>


                            
<!-- SECTION -->

<div class="container">
    <div class="row my-3 pt-5 align-items-center justify-content-between">
        <div class="col-md-1">
            <a href="#" class="golden-back-button"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="col-md-11 text-center">
            <h3 class="dark-heading">Service Listing </h3>
        </div>
        <div class="col-12 mt-5">
        <!-- search form -->
            <form action="">
                <div class="row">
                    <div class="col-md-6 text-center mx-auto">
                        <div class="search">
                            <input type="text" class="searchTerm" placeholder="Search Service listing here">
                            <button type="submit" class="searchButton gold-btn-filled">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Service boxes -->
    <div class="row pb-5 mb-5 text-center">
        @foreach ($services as $item)
            
       
        <div class="col-xl-4 col-md-6 mt-5">
            <div class="category-box" data-aos="zoom-in-down" data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
                <img src="{{asset('user_files/img/category-one.png')}}" alt="" class="img-fluid w-100">
                <div class="category-content">
                    <h4>{{$item->title}} </h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an  it to make a type specimen book.
                    </p>
                    <a href="{{route('service_detail',['id'=>$item->id])}}" class="gold-btn-filled d-inline-block my-4">View</a>
                </div>
            </div>
        </div>
         @endforeach
        <div class="col-12 my-5 text-center">
                <a href="#" class="gold-btn-filled d-inline-block my-4">View All</a>
        </div>
    </div>
</div>

@endsection
{{-- <?php include('footer.php'); ?> --}}