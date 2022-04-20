<?php
$title = 'Notifications';
include('header.php');
?>

<!-- ..................... PAGE TITLE ..................... -->
<section class="page-title">
    <?php include('topbar-user.php'); ?>
    <?php include('navigation.php'); ?>

    <div class="container">
        <div class="row py-5 align-items-end">
            <div class="col-12 text-left">
                <h2 class="page-banner-title">Notifications</h2>
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
                        <div class="col-12 text-center">
                            <h3 class="main-heading-alt h-center text-black border-bottom border-light">Notificaitons</h3>
                        </div>

                        <div class="col-12 my-5">
                            <div class="notification-block pb-2 border-bottom border-light">
                                <div class="row justify-content-between align-items-start">
                                    <div class="col-md-1">
                                        <div class="noti-icon">
                                            <img src="img/noti-bell.png" alt="" class="img-fluid mx-md-auto pt-2">
                                        </div>
                                    </div>
                                    
                                    <div class="col-11">
                                        <div class="noti-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                when an unknown printer took a galley of type and scrambled it to make a type 
                                                specimen book. It has survived not only five centuries, but also the leap into 
                                                electronic typesetting, remaining essentially unchanged bppk.
                                            </p>
                                            <span class="noti-date">7:40 PM - 03/01/2021</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="notification-block pb-2 border-bottom border-light">
                                <div class="row justify-content-between align-items-start">
                                    <div class="col-md-1">
                                        <div class="noti-icon">
                                            <img src="img/noti-bell.png" alt="" class="img-fluid mx-md-auto pt-2">
                                        </div>
                                    </div>
                                    
                                    <div class="col-11">
                                        <div class="noti-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                when an unknown printer took a galley of type and scrambled it to make a type 
                                                specimen book. It has survived not only five centuries, but also the leap into 
                                                electronic typesetting, remaining essentially unchanged bppk.
                                            </p>
                                            <span class="noti-date">7:40 PM - 03/01/2021</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="notification-block pb-2 border-bottom border-light">
                                <div class="row justify-content-between align-items-start">
                                    <div class="col-md-1">
                                        <div class="noti-icon">
                                            <img src="img/noti-bell.png" alt="" class="img-fluid mx-md-auto pt-2">
                                        </div>
                                    </div>
                                    
                                    <div class="col-11">
                                        <div class="noti-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                when an unknown printer took a galley of type and scrambled it to make a type 
                                                specimen book. It has survived not only five centuries, but also the leap into 
                                                electronic typesetting, remaining essentially unchanged bppk.
                                            </p>
                                            <span class="noti-date">7:40 PM - 03/01/2021</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="notification-block pb-2 border-bottom border-light">
                                <div class="row justify-content-between align-items-start">
                                    <div class="col-md-1">
                                        <div class="noti-icon">
                                            <img src="img/noti-bell.png" alt="" class="img-fluid mx-md-auto pt-2">
                                        </div>
                                    </div>
                                    
                                    <div class="col-11">
                                        <div class="noti-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                when an unknown printer took a galley of type and scrambled it to make a type 
                                                specimen book. It has survived not only five centuries, but also the leap into 
                                                electronic typesetting, remaining essentially unchanged bppk.
                                            </p>
                                            <span class="noti-date">7:40 PM - 03/01/2021</span>
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