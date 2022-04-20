<?php
$title = 'Project Summary';
include('header.php');
?>

<!-- ..................... PAGE TITLE ..................... -->
<section class="page-title">
    <?php include('topbar-user.php'); ?>
    <?php include('navigation.php'); ?>

    <div class="container">
        <div class="row py-5 align-items-end">
            <div class="col-12 text-left">
                <h2 class="page-banner-title">My <span class="text-white"> Projects</span></h2>
            </div>
        </div>
    </div>
    <img src="img/light-tri-one.png" alt="" class="img-fluid tri-one">
    <img src="img/light-tri-two.png" alt="" class="img-fluid tri-two">
    <img src="img/light-tri-three.png" alt="" class="img-fluid tri-three">
</section>



<!-- SECTION -->
<div class="container">
    <div class="row py-4 my-3">
        <!-- Contact form starts here -->
        <div class="col-12 my-5">
            <div class="bg-shape" data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="600">
                <div id="general-form">
                    <div class="row px-md-5 px-3 mt-5 mt-md-0">
                        <div class="col-12 mb-4">
                            <ul class="nav project-tabs nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Summary</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">My Projects</button>
                                </li>
                            </ul>
                            <hr class="grey-line">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-xl-10 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="summary-card">
                                                        <h2>08</h2>
                                                        <h3>Total Projects</h3>
                                                        <div class="top-box">
                                                            <i class="fas fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 mt-3 mt-md-0">
                                                    <div class="summary-card">
                                                        <h2>12</h2>
                                                        <h3>Total Reports</h3>
                                                        <div class="top-box">
                                                            <i class="fas fa-file-pdf"></i>
                                                        </div>            
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 mt-3 mt-lg-0">
                                                    <div class="summary-card">
                                                        <h2 class="d-flex align-items-end">7k<span class="sm-text d-inline-block">$</span></h2>
                                                        <h3>Total Payments</h3>
                                                        <div class="top-box">
                                                            <i class="far fa-credit-card"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Before table fields -->
                                    <form>
                                        <!-- sorting and filters -->
                                        <div class="row py-4 align-items-center my-1 pe-lg-5">
                                            <div class="col-xl-8 col-12 mb-3 mb-xl-0">
                                                <div class="d-flex align-items-center sorting to-column">
                                                    <label class="inline-block w-80 me-3">Sort by</label>
                                                    <input class="date" type="date" name="" id="">
                                                    <span class="mt-2 mx-3">-</span>
                                                    <input class="date" type="date" name="" id="">
                                                    <button type="button" class="btn gold-btn-filled site-btn p-0 ms-md-4 mx-auto mt-4 mt-md-0">Apply/Clear</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-12">
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
                                            </div>
                                        </div>
                                        
                                        <!-- Entries -->
                                        <div class="row py-md-4 align-items-center my-1 justify-content-between pe-lg-5">
                                            <div class="col-sm-6 col-8 mb-3 mb-sm-0">
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
                                            <div class="col-sm-6 col-lg-4 ms-auto col-11 text-end">
                                                <div class="d-flex filter justify-content-center">
                                                    <input type="text" class="search-bar" name="" id="" placeholder="Search">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                    <h3 class="sub-heading">Recent Projects </h3>
                                    <!-- Log table starts here -->
                                    <div class="table-responsive">
                                        <table class="table table-borderless log-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Project Id</th>
                                                    <th scope="col">Project</th>
                                                    <th scope="col">Task</th>
                                                    <th scope="col">Start</th>
                                                    <th scope="col">Finsh</th>
                                                    <th scope="col">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123</td>
                                                    <td>Abc Project</td>
                                                    <td>Task Title</td>
                                                    <td>mm/dd/yyyy</td>
                                                    <td>mm/dd/yyyy</td>
                                                    <td>3weeks</td>
                                                </tr>
                                                <tr>
                                                    <td>123</td>
                                                    <td>Abc Project</td>
                                                    <td>Task Title</td>
                                                    <td>mm/dd/yyyy</td>
                                                    <td>mm/dd/yyyy</td>
                                                    <td>3weeks</td>
                                                </tr>
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
                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="sm-shape">
                                                <div class="sm-shape-inner py-4">
                                                    <h3 class="ms-5 bg-heading">Project List </h3>
                                                    <div class="search-barr mt-3">
                                                        <input type="text" placeholder="Search" class="pb-2">
                                                        <button class="transparent-btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.133" height="20.133" viewBox="0 0 20.133 20.133">
                                                                <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(-4 -4)">
                                                                    <path id="Path_3491" data-name="Path 3491" d="M21.323,12.911A8.411,8.411,0,1,1,12.911,4.5,8.411,8.411,0,0,1,21.323,12.911Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                                                    <path id="Path_3492" data-name="Path 3492" d="M29.549,29.549l-4.574-4.574" transform="translate(-6.123 -6.123)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <ul class="search-list mt-3">
                                                        <li class="py-2 px-5">
                                                            <h3 class="bg-heading d-grey-text">Project A</h3>
                                                        </li>
                                                        <li class="py-2 mt-2 px-5">
                                                            <h3 class="bg-heading d-grey-text">Project A</h3>
                                                        </li>
                                                        <li class="py-2 mt-2 px-5">
                                                            <h3 class="bg-heading d-grey-text">Project A</h3>
                                                        </li>
                                                        <li class="py-2 mt-2 px-5">
                                                            <h3 class="bg-heading d-grey-text">Project A</h3>
                                                        </li>
                                                        <li class="py-2 mt-2 px-5">
                                                            <h3 class="bg-heading d-grey-text">Project A</h3>
                                                        </li>
                                                        <li class="py-2 mt-2 px-5">
                                                            <h3 class="bg-heading d-grey-text">Project A</h3>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <nav>
                                                <div class="nav project-inner-tabs nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Info</button>
                                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Reports</button>
                                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Stats</button>
                                                    <button class="nav-link" id="nav-payments-tab" data-bs-toggle="tab" data-bs-target="#nav-payments" type="button" role="tab" aria-controls="nav-payments" aria-selected="false">Payments</button>
                                                    <button class="nav-link" id="nav-discussion-tab" data-bs-toggle="tab" data-bs-target="#nav-discussion" type="button" role="tab" aria-controls="nav-discussion" aria-selected="false">Discussion Board</button>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="d-sm-flex align-items-center justify-content-end">
                                                        <p class="mb-1 mt-3">Project Id :001</p>
                                                        <p class="yellow-tag ms-3 mt-3 mb-1">Status : In Proces</p>
                                                    </div>
                                                    <h3 class="sub-heading mt-3">Project Information</h3>
                                                    <div class="row">
                                                        <div class="col-lg-4 mt-3">
                                                            <label for="">Company Name</label>
                                                            <p class="grey-text">Abc Company</p>
                                                            <label for="">No. Of Employees</label>
                                                            <p class="grey-text">1120</p>
                                                            <label for="">Project Title</label>
                                                            <p class="grey-text">Abc Project</p>
                                                            <label for="">Buisness Type</label>
                                                            <p class="grey-text">Software Development</p>
                                                        </div>
                                                        <div class="col-lg-8 mt-3">
                                                            <label for="">URL Link</label>
                                                            <p class="grey-text">Https://Abc//</p>
                                                            <label for="">Special Notes</label>
                                                            <p class="grey-text p-sm">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the isto printing and type setting industry. Lorem Ipsum has been the industry's oka standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                        </div>
                                                    </div>
                                                    <h3 class="sub-heading mt-3">Project Schedule</h3>
                                                    <div class="row">
                                                        <div class="col-lg-4 mt-3">
                                                            <label for="">Project Start</label>
                                                            <p class="grey-text">mm/dd/yyyy</p>
                                                        </div>
                                                        <div class="col-lg-8 mt-3">
                                                            <label for="">Project Completion</label>
                                                            <p class="grey-text">mm/dd/yyyy</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <form>
                                                        <!-- sorting and filters -->
                                                        <div class="row py-4 align-items-center my-1 pe-lg-5">
                                                            <div class="col-xl-8 col-12 mb-3 mb-xl-0">
                                                                <div class="d-flex align-items-center sorting to-column">
                                                                    <label class="inline-block w-80 me-3">Sort by</label>
                                                                    <input class="date" type="date" name="" id="">
                                                                    <span class="mt-2 mx-3">-</span>
                                                                    <input class="date" type="date" name="" id="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 text-center col-12">
                                                                <button type="button" class="btn gold-btn-filled site-btn p-0 ms-md-4 mx-auto mt-4 mt-md-0">Apply/Clear</button>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Entries -->
                                                        <div class="row py-md-4 align-items-center my-1 justify-content-between pe-lg-5">
                                                            <div class="col-sm-6 col-8 mb-3 mb-sm-0">
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
                                                            <div class="col-sm-6 col-lg-4 ms-auto col-11 text-end">
                                                                <div class="d-flex filter justify-content-center">
                                                                    <input type="text" class="search-bar" name="" id="" placeholder="Search">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- Log table starts here -->
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless log-table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">S. No</th>
                                                                    <th scope="col">Report Title</th>
                                                                    <th scope="col">Files</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Abc Report</td>
                                                                    <td>2</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="dropdown" id="table-toggle">
                                                                            <button class="btn btn-sm dropdown-toggle table-dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa fa-ellipsis-v"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#_" data-bs-target=".reportDetails" data-bs-toggle="modal"><i class="fas fa-eye"></i>Details </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Abc Report</td>
                                                                    <td>2</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="dropdown" id="table-toggle">
                                                                            <button class="btn btn-sm dropdown-toggle table-dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa fa-ellipsis-v"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#_" data-bs-target=".reportDetails" data-bs-toggle="modal"><i class="fas fa-eye"></i>Details </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
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
                                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="col-xl-4 col-12 mt-3 ms-auto">
                                                        <div class="d-flex filter justify-content-end">
                                                            <label class="inline-block mt-1 me-3"> Year</label>
                                                            <select class="form-select filters" aria-label="Select">
                                                                <option selected="" disabled>Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <h3 class="sub-heading mt-3">Reports Received Per Month</h3>
                                                    <img src="img/graph.png" alt="" class="img-fluid mt-3">
                                                </div>
                                                <div class="tab-pane fade" id="nav-payments" role="tabpanel" aria-labelledby="nav-payments-tab">
                                                    <div class="col-sm-6 mt-3 col-lg-4 ms-auto col-11 text-end">
                                                        <div class="d-flex filter justify-content-center">
                                                            <input type="text" class="search-bar" name="" id="" placeholder="Search">
                                                        </div>
                                                    </div>
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
                                                                    <th scope="col">Charges</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>123</td>
                                                                    <td>Abc Service</td>
                                                                    <td>Category Abc</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>10:30 AM</td>
                                                                    <td>$20</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>123</td>
                                                                    <td>Abc Service</td>
                                                                    <td>Category Abc</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>10:30 AM</td>
                                                                    <td>$20</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-discussion" role="tabpanel" aria-labelledby="nav-discussion-tab">...</div>
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
</div>

<div class="modal reportDetails" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
      <div class="bg-shape">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body text-center">
                <h3 class="bg-heading">Report Details</h3>
                <hr class="grey-line">
                <img src="img/user.png" alt="" class="img-fluid mx-auto">
                <p class="mt-3 mb-0">Admin<span class="p-sm">(Added By)</span></p>
                <p class="grey-text">mm/dd/yyyy</p>
                <img src="img/pdf.png" alt="" class="img-fluid mx-auto">
                <p class="grey-text">PDF File</p>
            </div>
            <div class="modal-footer border-top-0 justify-content-center pb-5">
                <button type="button" class="btn gold-btn-filled" data-bs-dismiss="modal">Download</button>
            </div>
        </div>
      </div>
  </div>
</div>

<?php include('footer.php'); ?>