
$('#slider').owlCarousel({
    loop:true,
    margin:10,
    nav: true,
    dots: false,
    navText: ["<i class='fas fa-arrow-left text-white'></i>","<i class='fas fa-arrow-right text-white'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});


// number count for stats, using jQuery animate

$('.counting').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
    
    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },
  
    {
  
      duration: 2000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum + '+');
        //alert('finished');
      }
  
    });  
});
jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + "px");
    return this;
}
  
  
$(document).ready(function() {
  
  $(".video").css({
    "width"  : $("#player").css("width"),
    "height" : $("#player").css("height")
  });
  
  $(".play-button").click(function() {
    $(".video-wrapper").fadeIn('fast', function() {
      $(".video").fadeIn(); 
      $(".video").center(); 
    });
        
  });
  
  $(".video-wrapper").click(function(e) {
    if($(e.target).is(".video-wrapper")) {
      $(".video").fadeOut(function() {
        $(".video-wrapper").fadeOut(function() {
         $(".video, .video-wrapper").css({'display':'none'}); 
          var src=$("#player").attr("src");
          $("#player").attr("src", "");
          $("#player").attr("src", src);
        });
      });
    }
  });
  
  $(document).keyup(function(e) {
    var isShown=$(".video-wrapper").css("display");
    
    if(isShown !== "none" && e.which==27) {
       $(".video-wrapper").click(); 
    }
    
  });
  
});

$('.testimonials').owlCarousel({
  loop:true,
  margin:10,
  nav: true,
  dots: false,
  navText: ["<i class='fas fa-arrow-left text-maroon'></i>","<i class='fas fa-arrow-right text-maroon'></i>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
});