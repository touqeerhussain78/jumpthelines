
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
                        <h1 class="ml-1 main-heading">Feedbacks</h1>
                    </div>
                    <div class="col-12">
                        <div class="row mt-2 mt-lg-4">
                            <div class="col-12">
                                <div class="dataTables_wrapper">
                                    <div class="user-listing-top">
                                        <div class="row align-items-end">
                                            <div class="col-12 mt-2 sort-datepicker">
                                                <div class="d-md-flex align-items-center flex-wrap">
                                                    <label class="mb-2 mb-md-1">Sort by:</label>
                                                    <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-md-1">
                                                        <input type="date" placeholder="From" class="form-control general-select profile-input" />
                                                    </div>
                                                    <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-md-1">
                                                        <input type="date" placeholder="To" class="form-control general-select profile-input" />
                                                    </div>
                                                    <button class="primary-button px-3 mb-2 mb-md-1">Apply/Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-end my-xl-2">
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
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>001</td>
                                                                    <td>abc</td>
                                                                    <td>xyz</td>
                                                                    <td>abc@xyz.com</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="fa fa-ellipsis-v"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="feedback-details.php">
                                                                                    <i class="far fa-eye"></i>Details</a>
                                                                                <a class="dropdown-item" data-toggle="modal" data-target="#delete-feedback">
                                                                                    <i class="far fa-trash"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>02</td>
                                                                    <td>002</td>
                                                                    <td>abc</td>
                                                                    <td>xyz</td>
                                                                    <td>abc@xyz.com</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="fa fa-ellipsis-v"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="feedback-details.php">
                                                                                    <i class="far fa-eye"></i>Details</a>
                                                                                <a class="dropdown-item" data-toggle="modal" data-target="#delete-feedback">
                                                                                    <i class="far fa-trash"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>03</td>
                                                                    <td>003</td>
                                                                    <td>abc</td>
                                                                    <td>xyz</td>
                                                                    <td>abc@xyz.com</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="fa fa-ellipsis-v"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="feedback-details.php">
                                                                                    <i class="far fa-eye"></i>Details</a>
                                                                                <a class="dropdown-item" data-toggle="modal" data-target="#delete-feedback">
                                                                                    <i class="far fa-trash"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>04</td>
                                                                    <td>004</td>
                                                                    <td>abc</td>
                                                                    <td>xyz</td>
                                                                    <td>abc@xyz.com</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="fa fa-ellipsis-v"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="feedback-details.php">
                                                                                    <i class="far fa-eye"></i>Details</a>
                                                                                <a class="dropdown-item" data-toggle="modal" data-target="#delete-feedback">
                                                                                    <i class="far fa-trash"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>

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



                    </div>
            </section>
        </div>
    </div>
</div>


{{-- <?php include('footer.php') ?> --}}

@endsection
{{-- <?php include('footer.php') ?> --}}