$('#home-banner').owlCarousel({
     loop:true,
     nav:false,
     responsive:{
          0:{
          items:1
          },
          600:{
          items:2
          },
          1000:{
          items:3
          }
     }
});
$('.cat-slider .owl-carousel').owlCarousel({
     loop:true,
     nav:false,
     responsive:{
          0:{
          items:3
          },
          600:{
          items:3
          },
          1000:{
          items:3
          }
     }
});
$(document).ready(function(){
$('.social-btn').on('click', function(){
 $(this).addClass('active');
 var divid= $(this).attr("traget-div");
 $(".social-w").addClass("v-hidden");
 $("#" + divid).removeClass("v-hidden");
});
});

