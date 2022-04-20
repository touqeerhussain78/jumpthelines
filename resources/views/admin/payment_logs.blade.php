
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
                        <h1 class="ml-1 main-heading">Payment Logs Summary</h1>
                    </div>
                    <div class="col-12">
                        <div class="row mt-md-2 mt-1">
                            <div class="col-xl-4 col-md-6 mt-2">
                                <div class=" circlebox d-flex justify-content-between align-items-center">
                                    <div class="circlebox-content">
                                        <h5>Total Projects</h5>
                                        <h3 class="total-number">{{$data['project_count']}}</h3>
                                    </div>
                                    <i class="fas fa-user circlebox-icon"></i>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 mt-2">
                                <div class=" circlebox d-flex justify-content-between align-items-center">
                                    <div class="circlebox-content">
                                        <h5>Total Completed</h5>
                                        <h3 class="total-number">{{$data['project_count_complete']}}</h3>
                                    </div>
                                    <i class="fas fa-rocket circlebox-icon"></i>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 mt-2">
                                <div class=" circlebox d-flex justify-content-between align-items-center">
                                    <div class="circlebox-content">
                                        <h5>Payments Total</h5>
                                        <h3 class="total-number">${{$data['total_sum']/100}}</h3>
                                    </div>
                                    <i class="fas fa-dollar-sign circlebox-icon"></i>
                                </div>
                            </div>
                        </div>



                        <div class="row mt-2 mt-lg-4">
                            <div class="col-12">
                                <div class="dataTables_wrapper">
                                    <div class="user-listing-top">
                                        <form action="{{route('payment_filter')}}" method="POST">
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
                                                                    <th>User First Name</th>
                                                                    <th>User Last Name</th>
                                                                    <th>Project Title</th>
                                                                    <th>Date</th>
                                                                    <th>Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $i=1;
                                                                @endphp
                                                                @if(isset($data['payments']))
                                                                @foreach ($data['payments'] as $item)    
                                                                <tr>
                                                                    <td>{{$i++}}</td>
                                                                    <td>{{$item->user->first_name}}</td>
                                                                    <td>{{$item->user->last_name}}</td>
                                                                    <td>{{$item->project->project_title}}</td>
                                                                    <td>{{$item->created_at}}</td>
                                                                    <td>${{$item->amount/100}}</td>
                                                                </tr>
                                                                @endforeach
                                                                @else
                                                                @foreach ($data['payment_filter'] as $item)    
                                                                <tr>
                                                                    <td>{{$i++}}</td>
                                                                    <td>{{$item->user->first_name}}</td>
                                                                    <td>{{$item->user->last_name}}</td>
                                                                    <td>{{$item->project->project_title}}</td>
                                                                    <td>{{$item->created_at}}</td>
                                                                    <td>${{$item->amount/100}}</td>
                                                                </tr>
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
@endsection
{{-- <?php include('footer.php') ?> --}}