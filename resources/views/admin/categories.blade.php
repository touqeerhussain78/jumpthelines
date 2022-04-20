
@extends('layouts.myapp')
@extends('layouts.sidebar')
@section('content')
{{-- <?php
$pg = 'categories';
$title = "Categories";
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
                        <h1 class="ml-1 main-heading">Categories</h1>
                    </div>
                    <div class="col-12">
                        <div class="row mt-2 mt-lg-4">
                            <div class="dataTables_wrapper">
                                <div class="user-listing-top">
                                     <form action="{{route('categories_filter')}}" method="POST">
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
                                                <button class="primary-button px-2 px-lg-3 mb-md-1">Apply/Clear</button>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mt-2 text-left text-xl-right">
                                            <a type="button" class="primary-button px-3 mb-md-1" data-toggle="modal" data-target="#add-category">Add New</a>
                                        </div>
                                    </div>
                                     </form>
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
                                                                <th>Title</th>
                                                                <th>Date Added On</th>
                                                                <th>No. of Projects</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        @php
                                                                $i=1;
                                                                @endphp
                                                            @if(isset($category))
                                                            @foreach ($category as $item)                                                                
                                                        <tbody>
                                                            <tr>
                                                                <td>{{$i++}}</td>
                                                                <td>{{$item->title}}</td>
                                                                <td>{{date('d-m-Y',strtotime($item->created_at))}}</td>
                                                                <td>00</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                            <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target="#edit-category_{{$item->id}}">
                                                                                <i class="far fa-edit"></i>Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target="#delete-category_{{$item->id}}">
                                                                                <i class="far fa-trash"></i>Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                                <!-- Edit Category Modal -->
                                                                <div class="modal fade" id="edit-category_{{$item->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content accent-modal p-0">
                                                                            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
                                                                            <div class="accent-modal-header">
                                                                                <h5>Edit Category</h5>
                                                                            </div>
                                                                            <div class="accent-modal-body px-3 py-3">
                                                                                <form action="{{route('categories_update',['id'=>$item->id])}}" method="POST" >
                                                                                    @csrf
                                                                                    <div class="info-div form-group position-relative w-100">
                                                                                        <label for="" class="info-label d-block">Title<span>*</span></label>
                                                                                        <input type="text" name="title" id="" class="general-select profile-input w-100" value="{{$item->title}}">
                                                                                    </div>
                                                                                    <div class="modal-btn-div">
                                                                                        <input type="submit" class="primary-button d-inline-block px-3 mx-1 mt-1" value="Update">
                                                                                        {{-- <a type="button" class="primary-button d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#edited-category">Update</a> --}}
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Edit Category Modal -->

                                                                <!-- Delete Category Modal -->
                                                                <div class="modal fade" id="delete-category_{{$item->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content site-modal">
                                                                            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
                                                                            <div class="text-center">
                                                                                <img src="images/question-mark.png" alt="">
                                                                                <p class="modal-text">Are you sure you want to delete this category?</p>
                                                                                <div class="modal-btn-div">
                                                                                    <form action="{{route('categories_delete',['id'=>$item->id])}}" method="POST" >
                                                                                    @csrf
                                                                                    <input type="hidden" value="{{$item->id}}">
                                                                                    <input type="submit" class="primary-button d-inline-block px-3 mx-1 mt-1" value="Yes">
                                                                                    {{-- <a class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#deleted-category_{{$item->id}}">Yes</a> --}}
                                                                                    </form>
                                                                                    <a class="general-btn btn-reject d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close">No</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Delete Category Modal -->

                                                        </tbody>
                                                        @endforeach
                                                        @else
                                                        @foreach ($category_filter as $item)     
                                                        <tbody>

                                                            <tr>
                                                                <td>{{$i++}}</td>
                                                                <td>{{$item->id}}</td>
                                                                <td>{{$item->title}}</td>
                                                                <td>{{date('d-m-Y',strtotime($item->created_at))}}</td>
                                                                <td>00</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                            <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target="#edit-category_{{$item->id}}">
                                                                                <i class="far fa-edit"></i>Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target="#delete-category_{{$item->id}}">
                                                                                <i class="far fa-trash"></i>Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                                <!-- Edit Category Modal -->
                                                                <div class="modal fade" id="edit-category_{{$item->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content accent-modal p-0">
                                                                            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
                                                                            <div class="accent-modal-header">
                                                                                <h5>Edit Category</h5>
                                                                            </div>
                                                                            <div class="accent-modal-body px-3 py-3">
                                                                                <form action="{{route('categories_update',['id'=>$item->id])}}" method="POST" >
                                                                                    @csrf
                                                                                    <div class="info-div form-group position-relative w-100">
                                                                                        <label for="" class="info-label d-block">Title<span>*</span></label>
                                                                                        <input type="text" name="title" id="" class="general-select profile-input w-100" value="{{$item->title}}">
                                                                                    </div>
                                                                                    <div class="modal-btn-div">
                                                                                        <input type="submit" class="primary-button d-inline-block px-3 mx-1 mt-1" value="Update">
                                                                                        {{-- <a type="button" class="primary-button d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#edited-category">Update</a> --}}
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Edit Category Modal -->

                                                                <!-- Delete Category Modal -->
                                                                <div class="modal fade" id="delete-category_{{$item->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content site-modal">
                                                                            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
                                                                            <div class="text-center">
                                                                                <img src="images/question-mark.png" alt="">
                                                                                <p class="modal-text">Are you sure you want to delete this category?</p>
                                                                                <div class="modal-btn-div">
                                                                                    <form action="{{route('categories_delete',['id'=>$item->id])}}" method="POST" >
                                                                                    @csrf
                                                                                    <input type="hidden" value="{{$item->id}}">
                                                                                    <input type="submit" class="primary-button d-inline-block px-3 mx-1 mt-1" value="Yes">
                                                                                    {{-- <a class="general-btn btn-accept d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#deleted-category_{{$item->id}}">Yes</a> --}}
                                                                                    </form>
                                                                                    <a class="general-btn btn-reject d-inline-block px-3 mx-1 mt-1" data-dismiss="modal" aria-label="Close">No</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Delete Category Modal -->
                                                            </tbody>

                                                        @endforeach
                                                        @endif

                                                    </table>
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










<!-- Add Category Modal -->
<div class="modal fade" id="add-category" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content accent-modal p-0">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="accent-modal-header">
                <h5>Add New Category</h5>
            </div>
            <div class="accent-modal-body px-3 py-3">
                <form action="{{route('categories_add')}}" method="POST">
                    @csrf
                    <div class="info-div form-group position-relative w-100">
                        <label for="" class="info-label d-block">Title<span>*</span></label>
                        <input type="text" name="title" id="" class="general-select profile-input w-100" placeholder="Enter Name " >
                    </div>
                    <div class="modal-btn-div">
                        <input type="submit" class="primary-button d-inline-block px-3 mx-1 mt-1" style="color:black;background:brown" value="Add" >
                        {{-- <a type="button" >Add</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add Category Modal -->



 

@endsection
