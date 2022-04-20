<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jump the Line - <?php echo ((isset($title)) ? $title : 'Home'); ?></title>
    <link rel="shortcut icon" href="{{asset('user_files/img/favicon.png')}}" type="image/x-icon">

    <!-- Font Awesome 5.15.4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Bootstrap style sheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="{{asset('user_files/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user_files/css/responsive.css')}}">
</head>
<body>
    

    
    


    
  @yield('content')
  
  



<footer>
    <div class="container">
        <div class="row justify-content-center pt-5 my-5" >
            <div class="col-12 text-center">
                <div class="footer-logo">
                    <a href="#"><img src="{{asset('user_files/img/footer-logo.png')}}" alt="" class="img-fluid mx-auto"></a>
                </div>
            </div>

            <div class="col-12 my-5 py-5">
                <div class="footer-content">
                    <div class="row justify-content-center ps-xl-5 ms-xl-5">
                        <div class="col-md-4 col-sm-6 col-12 px-3 my-3 px-md-0 my-md-0">
                            <h4 class="footer-title">Quick Links</h4>
                            <ul class="foot-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 px-3 my-3 px-md-0 my-md-0">
                            <h4 class="footer-title">Contact</h4>
                            <ul class="foot-links">
                                <li>412, Hill Avenue, Houston</li>
                                <li><a href="#">Info@jumptheline.com</a></li>
                                <li><a href="#">2588-8566841</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12 px-3 my-3 px-md-0 my-md-0">
                            <h4 class="footer-title">Our Services</h4>
                            <ul class="foot-links">
                                <li><a href="#">Investment & Financial Consultation</a></li>
                                <li><a href="#">Tracking Record Of Your Earning</a></li>
                                <li><a href="#">Feasibility Studies</a></li>
                                <li><a href="#">Management Service</a></li>
                                <li><a href="#">More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="col-12 text-center">
                <p class="copyright text-white">Copyright &copy; 2021 <a href="index.php">Jumptheline</a>. All Right Reserved</p>
            </div>
        </div>
    </div>
</footer>



<!-- Jquery to make slider work -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<!-- Owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Aos animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<!-- Custom JS functions -->
<script src="{{asset('user_files/js/functions.js')}}"></script>
<script>
    AOS.init({disable: 'mobile'});
</script>
</body>
</html>