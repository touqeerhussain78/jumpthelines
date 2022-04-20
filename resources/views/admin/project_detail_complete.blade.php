@extends('layouts.myapp')
@extends('layouts.sidebar')
@section('content')

<div class="app-content content dashboard">
    <div class="content-wrapper content-wrapper-2">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="card py-lg-5 py-3 px-2 px-md-3">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="ml-1 main-heading"><a href="" class="back-arrow"><i class="fas fa-arrow-alt-circle-left"></i></a>Project ABC</h1>
                        </div>
                        <div class="col-12">
                            <div class="project-tabs mt-3">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="project-summary-tab" data-toggle="pill" href="#project-summary" role="tab" aria-controls="project-summary" aria-selected="true">Summary</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="project-report-tab" data-toggle="pill" href="#project-report" role="tab" aria-controls="project-report" aria-selected="false">Reports</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="project-stats-tab" data-toggle="pill" href="#project-stats" role="tab" aria-controls="project-stats" aria-selected="false">Stats</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="project-payments-tab" data-toggle="pill" href="#project-payments" role="tab" aria-controls="project-payments" aria-selected="false">Payments</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="project-discussion-tab" data-toggle="pill" href="#project-discussion" role="tab" aria-controls="project-discussion" aria-selected="false">Discussion Board</a>
                                    </li>
                                </ul>
                                <div class="project-tabs-content">
                                    <div class="d-sm-flex justify-content-between align-items-center my-2 my-lg-4">
                                        <div class="project-id-div">
                                            <p class="font-weight-bold m-0">Project Id: <span class="project-id font-weight-normal">{{$project->id}}</span></p>
                                        </div>
                                        <div class="project-status-div my-1">
                                            <span class="project-status status-completed">{{$project->status}}</span>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="pills-tabContent">

                                        <div class="tab-pane fade show active" id="project-summary" role="tabpanel" aria-labelledby="project-summary-tab">
                                            <div class="gray-card">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="info-heading">Project Information</h2>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Company Name</h3>
                                                            <p>{{$project->company_name}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">URL Link</h3>
                                                            <p>{{$project->url_link}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">No. of Employees</h3>
                                                            <p>{{$project->no_of_employees}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Project Title</h3>
                                                            <p>{{$project->project_title}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Business Type</h3>
                                                            <p>{{$project->business_type}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Special Notes</h3>
                                                            <p>{{$project->special_note}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gray-card">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="info-heading">Project Schedule</h2>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Project Start</h3>
                                                            <p>{{$project->start_date}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Project Completion</h3>
                                                            <p>{{$project->completion_date}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gray-card">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="info-heading">Service Details</h2>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Service Name</h3>
                                                            <p>{{$project->service->title}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Service Category</h3>
                                                            <p>{{$project->service->category->title}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Estimated Turn-around Time</h3>
                                                            <p>24 to 40 hours</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Project Title</h3>
                                                            <p>{{$project->project_title}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Description</h3>
                                                            <p>{{$project->special_note}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gray-card">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="info-heading">Quotation Details</h2>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Project Completion Time</h3>
                                                            <p>{{$project->completion_date}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Charges</h3>
                                                            <p>${{$project->consultation_charges}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gray-card">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="info-heading">User Details</h2>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">First Name</h3>
                                                            <p>{{$project->user->first_name}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Last Name</h3>
                                                            <p>{{$project->user->last_name}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Email Address</h3>
                                                            <p>{{$project->user->email}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Contact Number</h3>
                                                            <p>{{$project->user->mobile_no}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="project-report" role="tabpanel" aria-labelledby="project-report-tab">
                                            <div class="row mt-2 mt-lg-4">
                                                <div class="dataTables_wrapper">
                                                    {{-- <div class="user-listing-top">
                                                        <div class="row align-items-end mx-0">
                                                            <div class="col-xl-8 mt-2 sort-datepicker">
                                                                <div class="d-xl-flex align-items-center">
                                                                    <label class="m-0">Sort by:</label>
                                                                    <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-xl-0">
                                                                        <input type="date" placeholder="From" class="form-control general-select profile-input" />
                                                                    </div>
                                                                    <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-xl-0">
                                                                        <input type="date" placeholder="To" class="form-control general-select profile-input" />
                                                                    </div>
                                                                    <button class="primary-button px-3">Apply/Clear</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 mt-2 text-left text-xl-right">
                                                                <a type="button" class="primary-button px-3" data-toggle="modal" data-target="#add-project-report">Add New</a>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-end mt-xl-2 mx-0">
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
                                                        </div>
                                                    </div> --}}
                                                    <div class="row row-table mx-0">
                                                        <div class="main-tabble table-responsive">
                                                            <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <table class="table table-borderless dataTable text-center">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>S. No.</th>
                                                                                    <th>Report Title</th>
                                                                                    <th>Files</th>
                                                                                    <th>Date</th>
                                                                                    {{-- <th>Actions</th> --}}
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @php
                                                                                    $i=1;
                                                                                @endphp

                                                                                @foreach ($reports as $item)
                                                                                <tr>
                                                                                    <td>{{$i++}}</td>
                                                                                    <td>{{$item->title}}</td>
                                                                                    <td><a href="{{asset('reports')}}/{{$item->report}}" target="_blank">File</a></td>
                                                                                    <td>{{$item->created_at}}</td>
                                                                                    {{-- <td>
                                                                                        <div class="btn-group ml-1">
                                                                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                                                <i class="fa fa-ellipsis-v"></i>
                                                                                            </button>
                                                                                            <div class="dropdown-menu">
                                                                                                <a class="dropdown-item" data-toggle="modal" data-target="#report-modal-detail_{{$item->id}}">
                                                                                                    <i class="far fa-eye"></i>Details</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td> --}}
                                                                                </tr>
    
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-4 align-items-center">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="project-stats" role="tabpanel" aria-labelledby="project-stats-tab">
                                            <div class="gray-card">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="info-heading">Project Stats</h2>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">First Name</h3>
                                                            <p>{{$project->user->first_name}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Last Name</h3>
                                                            <p>{{$project->user->last_name}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Email Address</h3>
                                                            <p>{{$project->user->email}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Contact Number</h3>
                                                            <p>{{$project->user->mobile_no}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="project-payments" role="tabpanel" aria-labelledby="project-payments-tab">
                                            <div class="row">
                                                <div class="dataTables_wrapper">
                                                    <div class="user-listing-top">
                                                        <div class="row align-items-end">
                                                            <div class="col-12 mt-2 mt-xl-0 d-md-flex ml-auto d-block justify-content-end align-items-center">
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
                                                                                    <th>Date</th>
                                                                                    <th>Time</th>
                                                                                    <th>Amount</th>
                                                                                    <th>Payment Status</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @php
                                                                                 $i=1;
                                                                                @endphp
                                                                                @foreach ($transactions as $item)
                                                                                <tr>
                                                                                    <td>{{$i++}}</td>
                                                                                    <td>{{$item->created_at->format('m/d/Y')}}</td>
                                                                                    <td>{{$item->created_at->format('h:i')}}</td>
                                                                                    <td>${{$item->amount/100}}</td>
                                                                                    <td><span class="active-td">Paid</span></td>
                                                                                </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="project-discussion" role="tabpanel" aria-labelledby="project-discussion-tab">
                                            <div class="gray-card">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="info-heading">Project Discussion</h2>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">First Name</h3>
                                                            <p>{{$project->user->first_name}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Last Name</h3>
                                                            <p>{{$project->user->last_name}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Email Address</h3>
                                                            <p>{{$project->user->email}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="project-info">
                                                            <h3 class="project-subheading">Contact Number</h3>
                                                            <p>{{$project->user->mobile_no}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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



@endsection
{{-- <?php include('footer.php') ?> --}}