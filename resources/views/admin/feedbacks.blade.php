{{-- <?php
$pg = 'feedbacks';
$title = "Feedbacks";
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
                        <h1 class="ml-1 main-heading">Feedbacks</h1>
                    </div>
                    <div class="col-12">
                        <div class="row mt-2 mt-lg-4">
                            <div class="col-12">
                                <div class="dataTables_wrapper">
                                    <div class="user-listing-top">
                                        <form action="{{route('feedback_filter')}}" method="POST">
                                        @csrf
                                    <div class="row align-items-end">
                                        <div class="col-xl-8 mt-2 sort-datepicker">
                                            <div class="d-md-flex align-items-center">
                                                <label class="mb-2 mb-md-1">Sort by:</label>
                                                <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-md-1">
                                                    <input type="date" name="start_date" placeholder="From" class="form-control general-select profile-input" />
                                                </div>
                                                <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-md-1">
                                                    <input type="date" name="end_date" placeholder="To" class="form-control general-select profile-input" />
                                                </div>
                                                <input type="submit" value="Apply" class="primary-button px-2 px-lg-3 mb-md-1">
                                                {{-- <button class="primary-button px-2 px-lg-3 mb-md-1">Apply/Clear</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                     </form>
                                        {{-- <div class="row align-items-end my-xl-2">
                                            <div class="col-12 col-xl-6 mt-2">
                                                <div class="dataTables_length text-left">
                                                    <label class="d-inline-block m-0">Show</label>
                                                    <select class="form-control d-inline-block table-entry general-select profile-input">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                    <label class="d-inline-block ml-1 m-0">Entries</label>

                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-6 mt-2 mt-xl-0 d-md-flex d-block justify-content-end align-items-center">
                                                <div class="dataTables_filter text-right">
                                                    <div class="search-wrap">
                                                        <input type="search" class="form-control" placeholder="Search" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="row row-table">
                                        <div class="main-tabble table-responsive">
                                            <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-borderless dataTable text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th>S. No.</th>
                                                                    <th>ID</th>
                                                                    <th>First Name</th>
                                                                    <th>Last Name</th>
                                                                    <th>Email</th>
                                                                    <th>Date</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $i=1;
                                                                @endphp

                                                                @if(isset($feedbacks))
                                                                @foreach($feedbacks as $item)
                                                                <tr>
                                                                    <td>{{$i++}}</td>
                                                                    <td>{{$item->id}}</td>
                                                                    <td>{{$item->first_name}}</td>
                                                                    <td>{{$item->last_name}}</td>
                                                                    <td>{{$item->email}}</td>
                                                                    <td>{{$item->created_at}}</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="fa fa-ellipsis-v"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="{{route('feedback_detail',['id'=>$item->id])}}">
                                                                                    <i class="far fa-eye"></i>Details</a>
                                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#delete-feedback_{{$item->id}}">
                                                                                    <i class="far fa-trash"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                    <!-- Delete Service Modal -->
                                                                    <div class="modal fade" id="delete-feedback_{{$item->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content site-modal">
                                                                                <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
                                                                                <div class="text-center">
                                                                                    <img src="images/question-mark.png" alt="">
                                                                                    <p class="modal-text">Are you sure you want to delete this service</p>
                                                                                    <div class="modal-btn-div">
                                                                                        <form action="{{route('feedback_delete',['id'=>$item->id])}}" method="POST" >
                                                                                            @csrf
                                                                                            <input type="submit" class="primary-button d-inline-block px-3 mx-1 mt-1" value="Yes">
                                                                                        {{-- <a class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#confirm-delete-service">Yes</a> --}}
                                                                                        </form>
                                                                                        <a class="general-btn btn-reject d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close">No</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Delete Service Modal -->
                                                                @endforeach
                                                                @else
                                                                @foreach($feedback_filter as $item)
                                                                <tr>
                                                                    <td>{{$i++}}</td>
                                                                    <td>{{$item->id}}</td>
                                                                    <td>{{$item->first_name}}</td>
                                                                    <td>{{$item->last_name}}</td>
                                                                    <td>{{$item->email}}</td>
                                                                    <td>{{$item->created_at}}</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="fa fa-ellipsis-v"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="{{route('feedback_detail',['id'=>$item->id])}}">
                                                                                    <i class="far fa-eye"></i>Details</a>
                                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#delete-feedback_{{$item->id}}">
                                                                                    <i class="far fa-trash"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                    <!-- Delete Service Modal -->
                                                                    <div class="modal fade" id="delete-feedback_{{$item->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content site-modal">
                                                                                <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
                                                                                <div class="text-center">
                                                                                    <img src="images/question-mark.png" alt="">
                                                                                    <p class="modal-text">Are you sure you want to delete this service</p>
                                                                                    <div class="modal-btn-div">
                                                                                        <form action="{{route('feedback_delete',['id'=>$item->id])}}" method="POST" >
                                                                                            @csrf
                                                                                            <input type="submit" class="primary-button d-inline-block px-3 mx-1 mt-1" value="Yes">
                                                                                        {{-- <a class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#confirm-delete-service">Yes</a> --}}
                                                                                        </form>
                                                                                        <a class="general-btn btn-reject d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close">No</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Delete Service Modal -->
                                                                @endforeach
                                                                @endif
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                {{-- <div class="row mb-4 align-items-center">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="showing-result" id="DataTables_Table_0_info">
                                                            Showing 1 to 20 of 52 entries
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                            <ul class="pagination">
                                                                <li class="paginate_button page-item previous disabled">
                                                                    <a href="#" class="page-link">Previous</a>
                                                                </li>
                                                                <li class="paginate_button page-item active">
                                                                    <a href="#" class="page-link">01</a>
                                                                </li>
                                                                <li class="paginate_button page-item">
                                                                    <a href="#" class="page-link">02</a>
                                                                </li>
                                                                <li class="paginate_button page-item">
                                                                    <a href="#" class="page-link">03</a>
                                                                </li>
                                                                <li class="paginate_button page-item next disabled" i="">
                                                                    <a href="#" class="page-link">Next</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
            </section>
        </div>
    </div>
</div>

{{-- <?php include('footer.php') ?> --}}