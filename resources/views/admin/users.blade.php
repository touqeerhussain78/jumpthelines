
@extends('layouts.myapp')
@extends('layouts.sidebar')
@section('content')
{{-- <?php
$pg = 'services';
$title = "Services";
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
                        <h1 class="ml-1 main-heading">Users</h1>
                    </div>
                    <div class="col-12">
                        <div class="row mt-2 mt-lg-4">
                            <div class="dataTables_wrapper">
                                <div class="user-listing-top">
                                    <form action="{{route('user_filter')}}" method="POST">
                                   @csrf
                                    <div class="row align-items-end">
                                        <div class="col-xl-8 mt-2 sort-datepicker">
                                            <div class="d-md-flex align-items-center">
                                                <label class="m-0">Sort by:</label>
                                                <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-md-0">
                                                    <input type="date" name="start_date" placeholder="From" class="form-control profile-input" />
                                                </div>
                                                <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-md-0">
                                                    <input type="date" name="end_date" placeholder="To" class="form-control profile-input" />
                                                </div>
                                                <button class="primary-button px-2 px-lg-3 mb-md-0">Apply/Clear</button>
                                            </div>
                                        </div>
                                         </form>
                                        <div class="col-xl-4 mt-2 text-left text-xl-right">
                                            <label class="m-0">Filter by Status:</label>
                                            <select name="" id="" class="general-select profile-input w-50">
                                                <option value="" disabled selected hidden>Select</option>
                                                <option value="">Completed</option>
                                                <option value="">In-Progress</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row align-items-end my-xl-2">
                                        <div class="col-12 col-xl-6 mt-2">
                                            <div class="dataTables_length text-left">
                                                <label class="d-inline-block m-0">Show</label>
                                                <select class="form-control profile-input d-inline-block table-entry general-select profile-input">
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
                                    </div>
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
                                                                <th>Registration Dates</th>
                                                                <th>No. of Projects</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            @if(isset($users))
                                                            @foreach ($users as $item)
                                                            <tr>
                                                                <td>{{$i++}}</td>
                                                                <td>{{$item->id}}</td>
                                                                <td>{{$item->first_name}}</td>
                                                                <td>{{$item->last_name}}</td>
                                                                <td>{{$item->email}}</td>
                                                                <td>{{date('d-m-Y',strtotime($item->created_at))}}</td>
                                                                <td>00</td>
                                                                <td><span class="active-td">{{ $item->status == '1' ? 'Active' : 'InActive' }}</span></td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                            <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            {{-- <a class="dropdown-item" href="user-details.php">
                                                                                <i class="far fa-eye"></i>Details</a> --}}
                                                                            <a class="dropdown-item" data-toggle="modal" data-target="#deactivate-user_{{$item->id}}">
                                                                                <i class="fas fa-times"></i>Inactive</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            
                                                                <!-- Active User Modal -->
                                                                <div class="modal fade" id="deactivate-user_{{$item->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content site-modal">
                                                                            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
                                                                            <div class="text-center">
                                                                                <img src="images/question-mark.png" alt="">
                                                                                <p class="modal-text">Are you sure you want to Change status of this user?</p>
                                                                                <div class="modal-btn-div">
                                                                                    <form action="{{route('user_status',['id'=>$item->id])}}" method="POST" >
                                                                                            @csrf
                                                                                                <input type="hidden" name="status" value="{{$item->status}}">
                                                                                            <input type="submit" class="primary-button d-inline-block px-3 mx-1 mt-1" value="Yes">
                                                                                        {{-- <a class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#confirm-activate-user">Yes</a> --}}
                                                                                    </form>
                                                                                    <a class="general-btn btn-reject d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close">No</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Active User Modal -->
                                                                
                                                            @endforeach
                                                            @else
                                                             @foreach ($user_filter as $item)
                                                             <tr>
                                                               <td>{{$i++}}</td>
                                                                <td>{{$item->id}}</td>
                                                                <td>{{$item->first_name}}</td>
                                                                <td>{{$item->last_name}}</td>
                                                                <td>{{$item->email}}</td>
                                                                <td>{{date('d-m-Y',strtotime($item->created_at))}}</td>
                                                                <td>00</td>
                                                                <td><span class="active-td">{{ $item->status == '1' ? 'Active' : 'InActive' }}</span></td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                            <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            {{-- <a class="dropdown-item" href="user-details.php">
                                                                                <i class="far fa-eye"></i>Details</a> --}}
                                                                            <a class="dropdown-item" data-toggle="modal" data-target="#deactivate-user_{{$item->id}}">
                                                                                <i class="fas fa-times"></i>Inactive</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                             <!-- Active User Modal -->
                                                                <div class="modal fade" id="deactivate-user_{{$item->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content site-modal">
                                                                            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
                                                                            <div class="text-center">
                                                                                <img src="images/question-mark.png" alt="">
                                                                                <p class="modal-text">Are you sure you want to Change status of this user?</p>
                                                                                <div class="modal-btn-div">
                                                                                    <form action="{{route('user_status',['id'=>$item->id])}}" method="POST" >
                                                                                            @csrf
                                                                                                <input type="hidden" name="status" value="{{$item->status}}">
                                                                                            <input type="submit" class="primary-button d-inline-block px-3 mx-1 mt-1" value="Yes">
                                                                                        {{-- <a class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#confirm-activate-user">Yes</a> --}}
                                                                                    </form>
                                                                                    <a class="general-btn btn-reject d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close">No</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Active User Modal -->
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

@endsection
{{-- <?php include('footer.php') ?> --}}