<?php 
    $title = 'Sign Up';
    include('header.php');
?> 

<!-- ..................... PAGE TITLE ..................... -->
<section class="page-title">
    <?php include('topbar-user.php'); ?>
    <?php include('navigation.php'); ?>
 
    <div class="container">
        <div class="row py-5 align-items-end">
            <div class="col-12 text-left">
                <h2 class="page-banner-title">Sign <span class="text-white">Up</span></h2>
            </div>
        </div>
    </div>
    <img src="img/light-tri-one.png" alt="" class="img-fluid tri-one">
    <img src="img/light-tri-two.png" alt="" class="img-fluid tri-two">
    <img src="img/light-tri-three.png" alt="" class="img-fluid tri-three">
</section>



<!-- SECTION -->

<section id="contact">
    <div class="container">
        <div class="row py-5 my-5">
            <!-- Contact form starts here -->
            <div class="col-12 my-5">
                <div class="bg-shape" data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="600">
                    <form id="general-form">
                        <div class="row px-md-5 px-3">
                            <div class="col-12 text-center">
                                <h3 class="main-heading-alt h-center">Sign Up</h3>
                            </div>
                            <!-- first name -->
                            <div class="col-sm-6 col-12 mb-3">
                                <label for="firstName" class="form-label">First Name*</label>
                                <input type="text" class="form-control" id="firstName" aria-describedby="firstName" placeholder="Enter Your First Name Here">
                            </div>
                            <!-- last name -->
                            <div class="col-sm-6 col-12 mb-3">
                                <label for="lastName" class="form-label">Last Name*</label>
                                <input type="text" class="form-control" id="lastName" aria-describedby="lastName" placeholder="Enter Your Last Name Here">
                            </div>
                            <!-- email -->
                            <div class="col-sm-6 col-12 mb-3">
                                <label for="email" class="form-label">Email Address*</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Your Email Address Here">
                            </div>
                            <!-- Phone Number* -->
                            <div class="col-sm-6 col-12 mb-3">
                                <label for="phone" class="form-label">Phone Number*</label>
                                <input type="text" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter Your Last Name Here">
                            </div>
                            <!-- Subject* -->
                            <div class="col-12 mb-3">
                                <label for="address" class="form-label">Mailing Address*</label>
                                <input type="text" class="form-control" id="address" aria-describedby="address" placeholder="Enter Your Mailing Address Here">
                            </div>
                            <!-- password -->
                            <div class="col-xl-6 col-12 mb-3">
                                <label for="password" class="form-label">Password*</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter Your Password Here">
                                    <i class="far fa-eye-slash pass-icon"></i>
                                </div>
                            </div>
                            <!-- confirm password -->
                            <div class="col-xl-6 col-12 mb-3">
                                <label for="password" class="form-label">Confirm Password*</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="Confirm Password Here">
                                    <i class="far fa-eye-slash pass-icon"></i>
                                </div>
                            </div>
                        </div>
                    
                        <div class="text-center">
                            <button type="submit" class="btn gold-btn-filled mt-5">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>