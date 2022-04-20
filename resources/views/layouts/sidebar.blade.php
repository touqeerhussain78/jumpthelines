<?php
$pg="";
?>
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"> <a class="navbar-brand" href="{{route('dashboard')}}"> <img class="brand-logo img-fluid" alt="stack admin logo" src="{{asset('images/logo.png')}}"> </a> </li>
                <li class="nav-item d-md-none"> <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a> </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-notification nav-item two-bell-icons">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="fas fa-bell notifications-bell"></i>
                            <span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header border-0">
                                <h6 class="dropdown-header m-0 text-center">Notifications</h6>
                            </li>
                            <li class="scrollable-container media-list ps-container ps-theme-dark ps-active-y" data-ps-id="75e644f2-605d-3ecc-f100-72d86e4a64d8">
                                <a href="notifications.php">
                                    <div class="media border-0 main-notification">
                                        <div class="media-left">
                                            <img src="images/noti-img.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <!-- <h6 class="media-heading">You have new notification!</h6> -->
                                            <p class="noti-drp-p">Lorem ipsum dolor sit amet, consectetur</p>
                                            <div class="notification-below-info">
                                                <small>
                                                    <time class="media-meta noti-date" datetime="2015-06-11T18:29:20+08:00">mm/dd/yyyy</time>
                                                </small>
                                                <small>
                                                    <time class="media-meta noti-date" datetime="2015-06-11T18:29:20+08:00">10 mins ago</time>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="notifications.php">
                                    <div class="media border-0 main-notification">
                                        <div class="media-left">
                                            <img src="images/noti-img.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <!-- <h6 class="media-heading">You have new notification!</h6> -->
                                            <p class="noti-drp-p">Lorem ipsum dolor sit amet, consectetur</p>
                                            <div class="notification-below-info">
                                                <small>
                                                    <time class="media-meta noti-date" datetime="2015-06-11T18:29:20+08:00">mm/dd/yyyy</time>
                                                </small>
                                                <small>
                                                    <time class="media-meta noti-date" datetime="2015-06-11T18:29:20+08:00">10 mins ago</time>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="notifications.php">
                                    <div class="media border-0 main-notification">
                                        <div class="media-left">
                                            <img src="images/noti-img.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <!-- <h6 class="media-heading">You have new notification!</h6> -->
                                            <p class="noti-drp-p">Lorem ipsum dolor sit amet, consectetur</p>
                                            <div class="notification-below-info">
                                                <small>
                                                    <time class="media-meta noti-date" datetime="2015-06-11T18:29:20+08:00">mm/dd/yyyy</time>
                                                </small>
                                                <small>
                                                    <time class="media-meta noti-date" datetime="2015-06-11T18:29:20+08:00">10 mins ago</time>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item notification-view text-right border-0" href="notifications.php">View All</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online">
                                <img src="images/avatar.png" alt="avatar">
                            </span>
                            <span class="user-name">Hi, {{Auth()->user()->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            {{-- <a class="dropdown-item" href="profile.php"><i class="fas fa-user-circle"></i>Profile</a> --}}
                            
                            {{-- <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-power-off"></i>Logout</a> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <!-- <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                            <i class="ft-menu greey-menu-icon"></i>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item <?php if ($pg == "dashboard") {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>"><a href="{{route('dashboard')}}"><i class="fas fa-th-large"></i> <span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class="nav-item <?php if ($pg == "services") {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>"><a href="{{route('services')}}"><i class="fas fa-cog"></i><span class="menu-title" data-i18n="">Services</span></a></li>
            <li class="nav-item <?php if ($pg == "users") {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>"><a href="{{route('users')}}"><i class="fas fa-user"></i><span class="menu-title" data-i18n="">Users</span></a></li>
            {{-- <li class="nav-item <?php if ($pg == "projects") {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>"><a href="{{route('projects')}}"><i class="fas fa-file-alt"></i><span class="menu-title" data-i18n="">Projects</span></a></li>
            <li class="nav-item <?php if ($pg == "payment-logs") {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>"><a href="{{route('payment_logs')}}"><i class="fas fa-money-bill"></i><span class="menu-title" data-i18n="">Payment Logs</span></a></li>
            <li class="nav-item <?php if ($pg == "consultation-requests") {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>"><a href="{{route('consultation_requests')}}"><i class="fas fa-chalkboard-teacher"></i><span class="menu-title" data-i18n="">Consultation Requests</span></a></li>
            <li class="nav-item <?php if ($pg == "feedbacks") {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>"><a href="{{route('feedbacks')}}"><i class="fas fa-comment-alt"></i><span class="menu-title" data-i18n="">Feedbacks</span></a></li> --}}
            <li class="nav-item <?php if ($pg == "categories") {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>"><a href="{{route('categories')}}"><i class="fas fa-list-ul"></i><span class="menu-title" data-i18n="">Categories</span></a></li>
        </ul>
    </div>
</div>
