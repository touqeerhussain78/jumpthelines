<?php
$title = 'Edit Profile';
include('header.php');
?>

<!-- ..................... PAGE TITLE ..................... -->
<section class="page-title">
    <?php include('topbar-user.php'); ?>
    <?php include('navigation.php'); ?>

    <div class="container">
        <div class="row py-5 align-items-end">
            <div class="col-12 text-left">
                <h2 class="page-banner-title">Edit <span class="text-white">Profile</span></h2>
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
                            <h3 class="main-heading-alt h-center text-black border-bottom border-light">Edit Profile</h3>
                        </div>
                        <div class="col-12 text-center my-4">
                            <div class="avatar">
                                <form>
                                    <img src="img/user-avatar.png" alt="" class="img-fluid mx-auto">
                                    <label for="uploadAvatar" class="upload-icon"><i class="fas fa-camera"></i></label>
                                    <input type="file" name="" id="uploadAvatar">
                                </form>
                            </div>
                            <p class="user-id text-uppercase my-3">id: 123</p>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" aria-describedby="firstName" placeholder="Enter Your First Name Here">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" aria-describedby="lastName" placeholder="Enter Your Last Name Here">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label></label>
                            <input type="text" class="form-control disabled" id="email" aria-describedby="email" placeholder="Abc@Example.Com" disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone*</label></label>
                            <input type="number" class="form-control" id="phone" aria-describedby="phone" placeholder="Abc@Example.Com">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address" class="form-label">Mailing Address*</label></label>
                            <input type="text" class="form-control" id="address" aria-describedby="address" placeholder="Enter Your Mailing Address Here">
                        </div>
                        
                        <div class="col-12 text-center my-5">
                            <button type="button" class="btn gold-btn-filled" data-bs-toggle="modal" data-bs-target="#profileUpdated">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal" tabindex="-1" id="profileUpdated">
  <div class="modal-dialog modal-dialog-centered">
      <div class="bg-shape">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body text-center">
                <img src="img/checked.png" alt="" class="img-fluid mx-auto">
                <h5>Profile updated successfully!</h5>
            </div>
            <div class="modal-footer border-top-0 justify-content-center pb-5">
                <button type="button" class="btn gold-btn-filled" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
      </div>
  </div>
</div>



<?php include('footer.php'); ?>