<?php 
    $title = 'Search - No results found';
    include('header.php');
?> 

<!-- ..................... PAGE TITLE ..................... -->
<section class="page-title">
    <?php include('topbar-user.php'); ?>
    <?php include('navigation.php'); ?>
 
    <div class="container">
        <div class="row py-5 align-items-end">
            <div class="col-12 text-left">
                <h2 class="page-banner-title">Our <span class="text-white">Services</span></h2>
            </div>
        </div>
    </div>
    <img src="img/light-tri-one.png" alt="" class="img-fluid tri-one">
    <img src="img/light-tri-two.png" alt="" class="img-fluid tri-two">
    <img src="img/light-tri-three.png" alt="" class="img-fluid tri-three">
</section>



<!-- SECTION -->

<div class="container">
    <div class="row my-3 pt-5 align-items-center">
        <div class="col-12">
        <!-- search form -->
            <form action="">
                <div class="row">
                    <div class="col-md-6 text-center mx-auto">
                        <div class="search">
                            <input type="text" class="searchTerm" placeholder="Search">
                            <button type="submit" class="searchButton gold-btn-filled">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row pb-5 mb-5">
        <div class="col-12 my-5">
            <div class="bg-shape" data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="600">
                <div id="general-form">
                    <div class="row px-md-5 px-3">
                        <div class="col-12 text-center">
                            <h3 class="main-heading-alt h-center">Sorry No Result Found</h3>
                        </div>

                        <div class="col-12 my-5 text-center">
                            <img src="img/no-results-found.png" alt="" class="img-fluid mx-auto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="#" class="golden-link">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>