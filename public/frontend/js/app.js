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