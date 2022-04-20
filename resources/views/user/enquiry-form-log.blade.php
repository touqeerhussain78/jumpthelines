{{-- <?php
$title = 'Enquiry Form Log';
include('header.php');
?> --}}
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
                <h2 class="page-banner-title">Enquiry <span class="text-white">Form</span></h2>
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
        <!-- Contact form starts here -->
        <div class="col-12 my-5">
            <div class="bg-shape" data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="600">
                <div id="general-form">
                    <div class="row px-md-5 px-3 mt-5 mt-md-0">
                        <div class="col-12 mb-4 text-center">
                            <h3 class="main-heading-alt h-center text-black border-bottom border-light">Enquiry Form Log</h3>
                        </div>
                    </div>
                    <!-- Before table fields -->
                    <form action="{{route('enquiry_log_filter')}}" method="POST">
                        @csrf
                        <!-- sorting and filters -->
                        <div class="row py-4 align-items-center my-1 pe-lg-5">
                            <div class="col-xl-8 col-12 mb-3 mb-xl-0">
                                <div class="d-flex sorting to-column">
                                    <label class="inline-block mt-1 me-3">Sort by</label>
                                    <input class="date"  type="date" name="start_date" id="">
                                    <span class="mt-2 mx-3">-</span>
                                    <input class="date" type="date" name="end_date" id="">
                                    <input type="submit" value="Search" class="btn gold-btn-filled ms-md-4 mx-auto mt-4 mt-md-0">
                                    {{-- <button type="button" class="btn gold-btn-filled ms-md-4 mx-auto mt-4 mt-md-0">Apply/Clear</button> --}}
                                </div>
                            </div>
                            {{-- <div class="col-xl-4 col-12">
                                <div class="d-flex filter justify-content-end">
                                    <label class="inline-block mt-1 me-3"> Filter by</label>
                                    <select class="form-select filters" aria-label="Select">
                                        <option selected="">Select</option>
                                        <option value="1">All</option>
                                        <option value="2">Submit</option>
                                        <option value="3">Pending</option>
                                        <option value="4">Expired</option>
                                        <option value="5">Rejected</option>
                                    </select>
                                </div>
                            </div> --}}
                        </div>

                        <!-- Entries -->
                        {{-- <div class="row py-md-4 align-items-center my-1 justify-content-between pe-lg-5">
                            <div class="col-md-4 col-sm-6 col-8 mx-auto mb-3 mb-sm-0">
                                <div class="d-flex sorting">
                                    <label class="inline-block mt-1 me-3">Show </label>
                                    <select class="form-select entries" aria-label="10">
                                        <option selected="">10</option>
                                        <option value="1">10</option>
                                        <option value="2">20</option>
                                        <option value="3">30</option>
                                    </select>
                                    <label class="inline-block mt-1 ms-3">Entries </label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-11 text-end mx-auto">
                                <div class="d-flex filter justify-content-center">
                                    <input type="text" class="search-bar" name="" id="" placeholder="Search">
                                </div>
                            </div>
                        </div> --}}
                    </form>
                    <!-- Log table starts here -->
                    <div class="table-responsive">
                        <table class="table table-borderless log-table">
                            <thead>
                                <tr>
                                    <th scope="col">S. No</th>
                                    <th scope="col">Service Id</th>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @if(isset($user_service))
                                @foreach ($user_service as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->service_id}}</td>
                                    <td>{{$item->service->title}}</td>
                                    <td>{{$item->service->category->title}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->service->estimate_time}}</td>
                                    <td><span class="current-stat">{{$item->status}}</span></td>
                                    <td>
                                        <div class="dropdown" id="table-toggle">
                                            <button class="btn btn-sm dropdown-toggle table-dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <a class="dropdown-item" href="{{route('enquiry_form_submitted',['id'=>$item->id])}}"><i class="fas fa-eye"></i>Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                 @foreach ($user_service_filter as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->service_id}}</td>
                                    <td>{{$item->service->title}}</td>
                                    <td>{{$item->service->category->title}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->service->estimate_time}}</td>
                                    <td><span class="current-stat">{{$item->status}}</span></td>
                                    <td>
                                        <div class="dropdown" id="table-toggle">
                                            <button class="btn btn-sm dropdown-toggle table-dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <a class="dropdown-item" href="{{route('enquiry_form_submitted',['id'=>$item->id])}}"><i class="fas fa-eye"></i>Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>

                    <!-- pagination -->
                    <div class="row justify-content-between align-items-center px-3 my-3">
                        <div class="col-lg-6">
                            <p class="pagination-text">Showing 1 to 20 of 52 entries </p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
{{-- <?php include('footer.php'); ?> --}}