<?php
$title = 'My Profile';
include('header.php');
?>

<!-- ..................... PAGE TITLE ..................... -->
<section class="page-title">
    <?php include('topbar-user.php'); ?>
    <?php include('navigation.php'); ?>

    <div class="container">
        <div class="row py-5 align-items-end">
            <div class="col-12 text-left">
                <h2 class="page-banner-title">My <span class="text-white">Profile</span></h2>
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
                        <div class="col-12 mb-4 text-center">
                            <h3 class="main-heading-alt h-center text-black border-bottom border-light">My Profile</h3>
                        </div>
                        <div class="col-12 text-center my-4">
                            <div class="avatar">
                                <img src="img/user-avatar.png" alt="" class="img-fluid mx-auto">
                                <p class="user-id text-uppercase my-3">id: 123</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">First Name</h4>
                            <h6 class="sub-title">Jhon</h6>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Last Name</h4>
                            <h6 class="sub-title">Doe</h6>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Mailing Address</h4>
                            <h6 class="sub-title">abc mailing address</h6>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Phone</h4>
                            <h6 class="sub-title">+12-123-456+7890</h6>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h4 class="sub-heading h-left">Email</h4>
                            <h6 class="sub-title">info@example.com</h6>
                        </div>
                        <div class="col-12 text-center">
                            <button type="button" class="btn gold-btn-filled" data-bs-toggle="modal" data-bs-target="#passwordUpdate">Change Password</button>
                            <a href="edit-profile.php" class="btn gold-btn-outline">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
</div>


<div class="modal" tabindex="-1" id="formSubmitted">
  <div class="modal-dialog modal-dialog-centered">
      <div class="bg-shape">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body text-center">
                <img src="img/checked.png" alt="" class="img-fluid mx-auto">
                <h5>Your form has been submitted successfully</h5>
            </div>
            <div class="modal-footer border-top-0 justify-content-center pb-5">
                <button type="button" class="btn gold-btn-filled" data-bs-dismiss="modal">Got it</button>
                <button type="button" class="btn gold-btn-outline">View Form</button>
            </div>
        </div>
      </div>
  </div>
</div>

<!-- Password Update modal -->
<div class="modal" tabindex="-1" id="passwordUpdate">
  <div class="modal-dialog modal-dialog-centered">
      <div class="bg-shape">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <h5 class="main-heading-alt h-center text-black border-bottom border-light text-center">Change Password</h5>
                <div id="general-form" class="border-0 py-0">
                    <div class="row">
                        <!-- Current password -->
                        <div class="col-12 mb-3">
                            <label for="password" class="form-label">Current Password*</label>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter Your Current Password Here">
                                <i class="far fa-eye-slash pass-icon"></i>
                            </div>
                        </div>

                         <!-- New password -->
                         <div class="col-12 mb-3">
                            <label for="password" class="form-label">New Password*</label>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="Confirm New Here">
                                <i class="far fa-eye-slash pass-icon"></i>
                            </div>
                        </div>

                        <!-- confirm password -->
                        <div class="col-12 mb-3">
                            <label for="password" class="form-label">Confirm Password*</label>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="Confirm Password Here">
                                <i class="far fa-eye-slash pass-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-top-0 justify-content-center pb-5">
                <button type="button" class="btn gold-btn-filled" data-bs-toggle="modal" data-bs-target="#successfulPayment" data-bs-dismiss="modal">Update</button>
            </div>
        </div>
      </div>
  </div>
</div>
<?php include('footer.php'); ?>