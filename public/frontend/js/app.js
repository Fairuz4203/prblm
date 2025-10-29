$(document).ready(function(){
    $('.slidebar').slick({
        autoplay: true,
        autoplaySpeed:2500,
        prevArrow: '#banners .leftArrow',
        nextArrow: '#banners .rightArrow',
        dots: true,
        
    });
    
    $('.slideshow').slick({
      infinite: true,
      slidesToShow: 3,
      prevArrow: '#products .leftArrow',
      nextArrow: '#products .rightArrow',
      dots: true,
    })
   
     $(document).ready(function () {
    $('.bannerSlider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.minibannerSlider'
    });
     $('.minibannerSlider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.bannerSlider',
      vertical: true,
      verticalSwiping: true,
      autoplay: true,
      autoplaySpeed: 2000,
      focusOnSelect: true,
      prevArrow: '.slick-prev',
      nextArrow: '.slick-next',
      responsive: [
        {
          breakpoint: 767,
          settings: {
            vertical: false,
            verticalSwiping: false,
            arrows: false,
            dots: true,
          }
        }
      ]
    });
  });
   
   $(document).ready(function () {
  // Quantity selector
  $('.increase-btn').click(function () {
    let currentVal = parseInt($('.quantity-input').val());
    $('.quantity-input').val(currentVal + 1);
  });

  $('.decrease-btn').click(function () {
    let currentVal = parseInt($('.quantity-input').val());
    if (currentVal > 1) {
      $('.quantity-input').val(currentVal - 1);
    }
  });
});         
    

$('.timer').countdown($('.timer').attr('data-date'), function(event) {
    // $(this).html(event.strftime('%w weeks %d days %H:%M:%S'));
    $('.timer .days').html(event.strftime('%d'))
    $('.timer .hrs').html(event.strftime('%H'))
    $('.timer .mins').html(event.strftime('%M'))
    $('.timer .secs').html(event.strftime('%S'))
});
$('.testimonialSlider').slick({
    slidesToShow: 3,
    prevArrow: '#testimonial .leftArrow',
    nextArrow: '#testimonial .rightArrow',
    responsive: [
       
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
          }
        },
       
      ]
})
new VenoBox({
  selector: '.https://www.youtube.com/watch?v=sB2MVRraMwg',
});
});
$('.featureSlider').slick({
    arows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: `.featuredProductsSlider .leftArrow`,
    nextArrow: `.featuredProductsSlider .rightArrow`,
    dots: false,
    slidesToShow: 5,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
