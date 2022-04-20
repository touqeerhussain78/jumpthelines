
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
                        <h1 class="ml-1 main-heading">Consultation Summary</h1>


                        <div class="row mt-md-2 mt-1">
                            <div class="col-xl-4 col-md-6 mt-2">
                                <div class=" circlebox d-flex justify-content-between align-items-center">
                                    <div class="circlebox-content">
                                        <h5>Total Consultations</h5>
                                        <h3 class="total-number">{{$data['consultation_request']}}</h3>
                                    </div>
                                    <i class="fas fa-user circlebox-icon"></i>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 mt-2">
                                <div class=" circlebox d-flex justify-content-between align-items-center">
                                    <div class="circlebox-content">
                                        <h5>Total In Progress</h5>
                                        <h3 class="total-number">300</h3>
                                    </div>
                                    <i class="fas fa-rocket circlebox-icon"></i>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 mt-2">
                                <div class=" circlebox d-flex justify-content-between align-items-center">
                                    <div class="circlebox-content">
                                        <h5>Total Payments</h5>
                                        <h3 class="total-number">$00</h3>
                                    </div>
                                    <i class="fas fa-dollar-sign circlebox-icon"></i>
                                </div>
                            </div>
                        </div>



                        <div class="row mt-2 mt-lg-4">
                            <div class="col-12">
                                <div class="dataTables_wrapper">
                                    <div class="user-listing-top">
                                    <form action="{{route('user_service_filter')}}" method="POST">
                                         @csrf
                                        <div class="row align-items-end">
                                            <div class="col-xl-8 mt-2 sort-datepicker">
                                                <div class="d-lg-flex align-items-center">
                                                    <label class="m-0">Sort by:</label>
                                                    <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-lg-0">
                                                        <input type="date"  name="start_date" placeholder="From" class="form-control general-select profile-input" />
                                                    </div>
                                                    <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-lg-0">
                                                        <input type="date"  name="end_date" placeholder="To" class="form-control general-select profile-input" />
                                                    </div>
                                                    <button class="primary-button px-2 px-lg-3 mb-md-0">Apply/Clear</button>
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
                                                                    <th>Service</th>
                                                                    <th>Date</th>
                                                                    <th>Category</th>
                                                                    <th>Project Title</th>
                                                                    <th>Company</th>
                                                                    <th>No Of Employees</th>
                                                                    <th>Business Type</th>
                                                                    <th>Status</th>
                                                                    <th>Actions</th>
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
                                                                    <td>{{$item->service->title}}</td>
                                                                    <td>{{$item->created_at}}</td>
                                                                    <td>{{$item->service->category->title}}</td>
                                                                    <td>{{$item->project_title}}</td>
                                                                    <td>{{$item->company_name}}</td>
                                                                    <td>{{$item->no_of_employees}}</td>
                                                                    <td>{{$item->business_type}}</td>
                                                                    <td>{{$item->status}}</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="fa fa-ellipsis-v"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                    @if($item->status == 'pending' OR $item->status == 'submitted' )
                                                                                    <a class="dropdown-item" href="{{route('consultation_detail_pending',['id' => $item->id])}}">
                                                                                        <i class="far fa-eye"></i>Details</a>
                                                                                    @else 
                                                                                    <a class="dropdown-item" href="{{route('consultation_detail',['id' => $item->id])}}">
                                                                                        <i class="far fa-eye"></i>Details</a>
                                                                                    @endif                                                                                   
                                                                                    @if($item->status == 'submitted')
                                                                                <a class="dropdown-item" data-toggle="modal" data-target="#approve-consultation_{{$item->id}}">
                                                                                    <i class="far fa-check" ></i>approved</a>
                                                                                <a class="dropdown-item" onclick="reject_me({{$item->id}})">
                                                                                    <i class="far fa-times" ></i>Reject</a>
                                                                                    @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                
                                                                    <!-- Approve Consultation Modal -->
                                                                    <div class="modal fade" id="approve-consultation_{{$item->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content site-modal">
                                                                                <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
                                                                                <div class="text-left">
                                                                                    <form action="{{route('accept_quote')}}" method="POST">
                                                                                        @csrf
                                                                                        <div class="info-div form-group position-relative w-100">
                                                                                            <label for="consultation-start-date" class="info-label">Start Date<span class="text-danger">*</span></label>
                                                                                            <input type="date" name="start_date" id="start-date" class="form-control profile-input">
                                                                                        </div>

                                                                                        <div class="info-div form-group position-relative w-100">
                                                                                            <label for="consultation-completion-date" class="info-label">Completion Date<span class="text-danger">*</span></label>
                                                                                            <input type="date" name="completion_date" id="completion-date" class="form-control profile-input">
                                                                                        </div>

                                                                                        <div class="info-div form-group position-relative w-100">
                                                                                            <label for="consultation-charges" class="info-label">Weeks<span class="text-danger">*</span></label>
                                                                                            <input type="text" name="weeks" id="consultation-charges" class="form-control profile-input" placeholder="Enter Charges">
                                                                                        </div>
                                                                                        <input type="hidden" name="status" value="pending">
                                                                                        <input type="hidden" name="user_service_id" value="{{$item->id}}">
                                                                                        <div class="info-div form-group position-relative w-100">
                                                                                            <label for="consultation-charges" class="info-label">Charges<span class="text-danger">*</span></label>
                                                                                            <input type="number" name="consultation_charges" id="consultation-charges" class="form-control profile-input" placeholder="Enter Charges">
                                                                                        </div>
                                                                                        <div class="modal-btn-div">
                                                                                            <input type="submit" class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" value="Approve">
                                                                                            {{-- <a type="submit" class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#approved-consultation">Approve</a> --}}
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Approve Consultation Modal -->
                                                                @endforeach
                                                                @else
                                                                @foreach ($user_service_filter as $item)
                                                                <tr>
                                                                    <td>{{$i++}}</td>
                                                                    <td>{{$item->service->title}}</td>
                                                                    <td>{{$item->created_at}}</td>
                                                                    <td>{{$item->service->category->title}}</td>
                                                                    <td>{{$item->project_title}}</td>
                                                                    <td>{{$item->company_name}}</td>
                                                                    <td>{{$item->no_of_employees}}</td>
                                                                    <td>{{$item->business_type}}</td>
                                                                    <td>{{$item->status}}</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="fa fa-ellipsis-v"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                               @if($item->status == 'pending')
                                                                                    <a class="dropdown-item" href="{{route('consultation_detail_pending',['id' => $item->id])}}">
                                                                                    <i class="far fa-eye"></i>Details</a>
                                                                                @else 
                                                                                <a class="dropdown-item" href="{{route('consultation_detail',['id' => $item->id])}}">
                                                                                    <i class="far fa-eye"></i>Details</a>
                                                                                @endif   
                                                                                    @if($item->status == 'pending')
                                                                                <a class="dropdown-item" data-toggle="modal" data-target="#approve-consultation_{{$item->id}}">
                                                                                    <i class="far fa-check" ></i>approved</a>
                                                                                <a class="dropdown-item" onclick="reject_me({{$item->id}})">
                                                                                    <i class="far fa-times" ></i>Reject</a>
                                                                                    @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                
                                                                    <!-- Approve Consultation Modal -->
                                                                    <div class="modal fade" id="approve-consultation_{{$item->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content site-modal">
                                                                                <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
                                                                                <div class="text-left">
                                                                                    <form action="{{route('accept_quote')}}" method="POST">
                                                                                        @csrf
                                                                                        <div class="info-div form-group position-relative w-100">
                                                                                            <label for="consultation-start-date" class="info-label">Start Date<span class="text-danger">*</span></label>
                                                                                            <input type="date" name="start_date" id="start-date" class="form-control profile-input">
                                                                                        </div>

                                                                                        <div class="info-div form-group position-relative w-100">
                                                                                            <label for="consultation-completion-date" class="info-label">Completion Date<span class="text-danger">*</span></label>
                                                                                            <input type="date" name="completion_date" id="completion-date" class="form-control profile-input">
                                                                                        </div>

                                                                                        <div class="info-div form-group position-relative w-100">
                                                                                            <label for="consultation-charges" class="info-label">Weeks<span class="text-danger">*</span></label>
                                                                                            <input type="text" name="weeks" id="consultation-charges" class="form-control profile-input" placeholder="Enter Charges">
                                                                                        </div>


                                                                                        <input type="hidden" name="status" value="pending">
                                                                                        <input type="hidden" name="user_service_id" value="{{$item->id}}">
                                                                                        <div class="info-div form-group position-relative w-100">
                                                                                            <label for="consultation-charges" class="info-label">Charges<span class="text-danger">*</span></label>
                                                                                            <input type="number" name="consultation_charges" id="consultation-charges" class="form-control profile-input" placeholder="Enter Charges">
                                                                                        </div>
                                                                                        <div class="modal-btn-div">
                                                                                            <input type="submit" class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" value="Approve">
                                                                                            {{-- <a type="submit" class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#approved-consultation">Approve</a> --}}
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Approve Consultation Modal -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // $(document).ready(function(){

        function complete_me(id){
             $.ajax({
            url: "{{route('user_status_change')}}",
            type: "POST",
            data:{ 
                _token:'{{ csrf_token() }}',
                 id:id,
                 status:'accept'
            },
            dataType: 'json',
            }).done(function( response ) {
                location.reload();
            });
        }

        function reject_me(id){
             $.ajax({
            url: "{{route('user_status_change')}}",
            type: "POST",
            data:{ 
                _token:'{{ csrf_token() }}',
                 id:id,
                 status:'reject'
            },
            dataType: 'json',
            }).done(function( response ) {
                location.reload();
            });
        }

    // });


</script>

@endsection
