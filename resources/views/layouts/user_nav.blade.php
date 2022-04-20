
  <!-- top bar -->
  <div class="container">
      <div class="row align-items-center justify-content-between">
          <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-8 ps-xl-5 order-1 order-lg-2 order-xl-1 d-none d-lg-block">
              <ul class="list-inline">
                  <li class="list-inline-item">
                      <div class="top-link-box">
                          <div class="box-icon"><i class="fas fa-phone-alt"></i></div>
                          <div class="box-content ms-2">
                              <span>Support Anytime</span>
                              <p class="mb-0"> (000) 111-1111</p>
                          </div>
                      </div>
                  </li>
                  <li class="list-inline-item">
                      <div class="top-link-box">
                          <div class="box-icon"><i class="fas fa-phone-alt"></i></div>
                          <div class="box-content ms-2">
                              <span>Email</span>
                              <p class="mb-0">info@example.com</p>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
  
          <div class="col-xxl-4 col-xl-3 col-lg-4 col-md-6 col-sm-7 order-2 order-lg-1 order-md-1 order-sm-1 order-xl-2">
              <a href="{{route('home')}}"><img src="{{asset('user_files/img/logo.png')}}" alt="" class="img-fluid"></a>
          </div>
  
          <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-5 text-end pe-lg-5 order-1 order-lg-3 order-md-2 order-xl-3">
              <ul class="list-inline">
                  
                  <li class="list-inline-item">
                      <!-- <div class="dropdown">
                          <button class="btn account-btn-bordered" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              <div class="bell-icon">    
                                  <i class="fas fa-bell"></i>
                              </div>
                              <span class="noti-count">3</span>
                          </button>
                         
                          <ul class="dropdown-menu account-dropdown notification-dropdown" aria-labelledby="dropdownMenuButton1">
                             <li>
                                 <h5 class="main-heading-alt h-center text-black border-bottom border-light text-center f-20">Notifications</h5>
                             </li>
                             <li>
                                 <a class="dropdown-item py-2 border-bottom border-light" href="">
                                     <div class="noti-icon">
                                         <img src="img/noti-bell.png" alt="" class="img-fluid mx-md-auto pt-2">
                                     </div>
                                  
                                     <div class="noti-content">
                                         <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                             Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                             when an unknown printer took a galley of type and scrambled it to make a type
                                             specimen book. It has survived not only five centuries, but also the leap into
                                             electronic typesetting, remaining essentially unchanged bppk.
                                         </span>
                                         <span class="noti-date">7:40 PM - 03/01/2021</span>
                                     </div>
                                 </a>
                             </li>
                              
                          </ul>
                      </div> -->
                      <div class="btn-group dropstart">
                          <button class="btn account-btn-bordered" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              <div class="bell-icon">    
                                  <i class="fas fa-bell"></i>
                              </div>
                              <span class="noti-count">3</span>
                          </button>
                          <ul class="dropdown-menu mt-5 noti-drop" aria-labelledby="dropdownMenuButton1">
                              <li>
                                 <h5 class="main-heading-alt h-center text-black border-bottom border-light text-center f-20">Notifications</h5>
                             </li>
                              <li>
                                  <a class="dropdown-item" href="">
                                      <div class="d-flex">
                                          <div class="flex-shrink-0">
                                              <i class="fas fa-bell yellow-text"></i>
                                          </div>
                                          <div class="flex-grow-1 ms-3">
                                              <p class="mb-0">Lorem Ipsum is simply dummy text of the printing <br> and remaining essentially unchanged book.</p>
                                              <p class="p-sm mb-0 grey-text">7:40 PM - 03/01/2021</p>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <hr class="grey-line">
                              <li>
                                  <a class="dropdown-item" href="">
                                      <div class="d-flex">
                                          <div class="flex-shrink-0">
                                              <i class="fas fa-bell yellow-text"></i>
                                          </div>
                                          <div class="flex-grow-1 ms-3">
                                              <p class="mb-0">Lorem Ipsum is simply dummy text of the printing <br> and remaining essentially unchanged book.</p>
                                              <p class="p-sm mb-0 grey-text">7:40 PM - 03/01/2021</p>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <hr class="grey-line">
                              <li>
                                  <a class="dropdown-item" href="">
                                      <div class="d-flex">
                                          <div class="flex-shrink-0">
                                              <i class="fas fa-bell yellow-text"></i>
                                          </div>
                                          <div class="flex-grow-1 ms-3">
                                              <p class="mb-0">Lorem Ipsum is simply dummy text of the printing <br> and remaining essentially unchanged book.</p>
                                              <p class="p-sm mb-0 grey-text">7:40 PM - 03/01/2021</p>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <hr class="grey-line">
                              <li class="text-center">
                                  <button type="button" onclick="location.href=''" class="btn gold-btn-filled">View All</button>
                              </li>
                          </ul>
                      </div>                    
                  </li>
                                    @if(!isset(Auth::user()->id))
                    <li class="list-inline-item">
                      <div class="dropdown">
                          <button class="btn account-btn-filled" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i></button>                    
                          <ul class="dropdown-menu account-dropdown" aria-labelledby="dropdownMenuButton1">
                              <li>
                                  <a class="dropdown-item py-2 border-bottom border-light" href="#">
                                      <div class="d-flex align-items-center">
                                          <a href="{{route('login')}}" class="">Login</a>
                                          {{-- <img src="{{asset('user_files/img/out-icon.png')}}" alt="" class="img-fluid me-3"> Login --}}
                                      </div>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </li>
                  @endif
                  @if(isset(Auth::user()->id))
                  <li class="list-inline-item">
                      <div class="dropdown">
                          <button class="btn account-btn-filled" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i></button>                    
                          <ul class="dropdown-menu account-dropdown" aria-labelledby="dropdownMenuButton1">
                              <li>
                                  <a class="dropdown-item py-2 border-bottom border-light" href="my-">
                                      <div class="d-flex align-items-center">
                                          <img src="{{asset('user_files/img/profile-icon.png')}}" alt="" class="img-fluid me-3"> My Profile
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a class="dropdown-item py-2 border-bottom border-light" href="#">
                                      <div class="d-flex align-items-center">
                                          <img src="{{asset('user_files/img/projects-icon.png')}}" alt="" class="img-fluid me-3"> Projects
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a class="dropdown-item py-2 border-bottom border-light" href="{{route('enquiry_form_log')}}">
                                      <div class="d-flex align-items-center">
                                          <img src="{{asset('user_files/img/log-icon.png')}}" alt="" class="img-fluid me-3"> Enquiry Form Log
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  {{-- <a class="dropdown-item py-2 border-bottom border-light" href="#">
                                      <div class="d-flex align-items-center">
                                          <img src="{{asset('user_files/img/out-icon.png')}}" alt="" class="img-fluid me-3"> Log out 
                                      </div>
                                  </a> --}}
                                   <a class="dropdown-item py-2 border-bottom border-light" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                              </li>
                          </ul>
                      </div>
                  </li>
                  @endif
              </ul>
          </div>
      </div>
  </div>
  
  <!-- navigation menu starts -->
  <div class="container">
      <div class="row justify-content-center py-4">
          <div class="col-xl-8 text-center">
  
              <nav class="navbar navbar-expand-md navbar-dark justify-content-center" id="navigation">
                  <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Services
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="{{route('service_category')}}">Service Category</a></li>
                                  <li><a class="dropdown-item" href="{{route('service_listing')}}">Service Listing</a></li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{route('about_us')}}">About Us </a>
                          </li>
                          
                          <li class="nav-item">
                              <a class="nav-link" href="{{route('contact')}}">Contact Us </a>
                          </li>
                      </ul>
                      </div>
                  </div>
              </nav>
  
          </div>
      </div>
  </div>
  <!-- navigation menu ends -->
@yield('nav')