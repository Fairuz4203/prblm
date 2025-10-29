<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME')}}@yield('title','- All in one place')</title>
    <meta name="title" content="{{ env('APP_NAME')}}@yield('title','- All in one place')}}">
    <meta name="description" content="Online Shopping in Bangladesh">
    <link rel="shortcut icon" href="{{ asset('frontend/images/plant 1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
   <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
     @stack('css')
</head>
<body>
    
    <header>
        <div class="topheader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start">
                        <span><i class="bi bi-geo-alt"></i></span><p>Store Location: Lincoln- 344, Illinois, Chicago, USA</p>
                    </div>
                    <div class="col-lg-6 text-end topheader-right d-none d-lg-block">
                    <ul>
                        <li>
                            <select>
                                <option value="eng">Eng</option>
                                <option value="bn">Ben</option>
                            </select>
                        </li>
                        <li>
                            <select>
                                <option value="usd">USD</option>
                                <option value="bdt">BDT</option>
                            </select>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <a href="{{ route('customer.login') }}"> Sign In / Sign up</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------    mid header starts-------------- -->
    <div class="midheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-8 order-1">
                    <a href="/"><img src="{{ asset( 'frontend/images/Logo .png ') }}" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-6 search order-3 order-lg-2 my-3 my-lg-0">
                    <form action="{{ route('frontend.category.archive') }}" method="get" class="d-flex">
                        <div class="search-input">
                        <input  value ="{{ request()->search }}" type="text" placeholder="search" name="search">
                        <span class="lh-0  search-icon"><i class="fa-solid fa-magnifying-glass" width="15px"></i>
                    </span>
                    <div class="searchResult position-absolute bg-white w-100 p-3 shadow" style="z-index: 99999; display:none">
                        <ul>
                           
                            
                        </ul>

                    </div>

                    </div>
                    <button type="submit">Search</button>
                    </form>
                </div>
                <div class="col-lg-3 col-4  quicklinks order-2 order-lg-3">
                    <ul class="d-flex justify-content-end align-items-center">
                        
                        <li class="lh-0 d-none d-lg-block">
                            <a href="#" class="lh-0"><i class="bi bi-heart"></i></a>
                        </li>
                        <li class="lh-0 d-none d-lg-block"><span class="divider">|</span></li>
                        <li class="lh-0 d-none d-lg-block">
                            <a href="{{ route('checkout') }}" class="lh-0">
                                <div class="d-flex gap-2">
                                    <div class="icon">
                                <i class="bi bi-handbag"></i>
                                <span class="counter">{{ $cart['cartCount'] }}</span>
                            </div>
                            <div class="cart-text">
                                <p>Shopping cart:</p>
                                <span>{{ number_format($cart['cartTotal'],2) }}৳</span>
                            </div>
                                </div>
                            </a>
                        </li>
                        <li class="lh-0 d-lg-none">
                            <a  class="lh-0" 
                            data-bs-toggle="offcanvas"
                             href="#smallMenu"
                              role="button" 
                              aria-controls="smallMenu">
                             <i class="fa-solid fa-bars"></i>
                                </a>
                                
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------    mid header ends-------------- -->
     <!-- ------------------bottom header starts--------------- -->
      <div class="btm-header d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <ul class="d-flex align-items-center">
                        <li>
                            <a href="#" class="categorymenu">
                                <i class="fa-solid fa-bars"></i>
                                All Categories<i class="fa-solid fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    @foreach ($categories as $category)
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('storage/'. $category->icon) }}" alt="">  {{ $category->category_title }}
                                        </a>
                                    </li>
                                    @endforeach
                                 
                                </ul>
                        </li>
                        <li><a href="{{ url('/')}}" class="{{ request()->RouteIs('frontend.index') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/shop')}}" class="{{ request()->RouteIs('frontend.category.archive') ? 'active' : '' }}">Shop</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="#">Contact Us</a></li>

                    </ul>
                </div>
                <div class="col-lg-3">
                    <a href="tel:2195550114" class="d-flex align-items-center ph-num">
                        <i class="fa-solid fa-phone-volume"></i>
                        (219) 555-0114</a>
                </div>
            </div>
        </div>
      </div>
      <!-- ------------------bottom header ends--------------- -->
     <!-- ------------------off canvas menu starts--------- -->
     <div class="offcanvas offcanvas-start" tabindex="-1" id="smallMenu" aria-labelledby="smallMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="smallMenuLabel"><img src="{{ asset( 'frontend/images/Logo .png') }}" alt=""></h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul>
                <li><a href="{{ url('/')}}">Home</a></li>
                <li><a href="{{ url('/shop')}}">Shop</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href=" /about">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
         
        </div>
      </div>
       <!-- ------------------off canvas menu ends--------- -->
</header>
<main>
    @yield('content')
     </main>
 <!-- ------------------main section ends here--------------- -->

<!-- ----------------footer starts here--------------- -->
<footer>
  <footer class="footer">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-3 col-md-6 mb-4 mb-sm-1 mb-lg-0 ">
          <h5>About Shopery</h5>
          <p>Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna.</p>
          <div class="contactinfo leftside">
           <span> <a href="tel: (219)555-0114">(219) 555-0114  </a> 
            <p> or </p>
             </span>
             <span> <a href="mailto:Proxy@gmail.com"> Proxy@gmail.com </a></span>
 
          </div>
        </div>

        
        <div class="col-lg-2 col-md-6 col-6 mb-6 mb-sm-1 mb-lg-0">
          <h5>My Account</h5>
          <ul>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Order History</a></li>
            <li><a href="#">Shopping Cart</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Settings</a></li>
          </ul>
        </div>

        
        <div class="col-lg-2 col-md-6 col-6 mb-6 mb-sm-1 mb-lg-0">
          <h5>Helps</h5>
          <ul>
            <li><a href="#">Contact</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Terms &amp; Condition</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>

        
        <div class="col-lg-2 col-md-6 col-6 mb-6 mb-sm-1 mb-lg-0">
          <h5>Proxy</h5>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Products Details</a></li>
            <li><a href="#">Track Order</a></li>
          </ul>
        </div>

        
        <div class="col-lg-3 col-md-6 col-6">
          <h5>Instagram</h5>
          <div class="instagram-feed">
            <img src="{{ asset('frontend/images/Image (1).png') }}" alt="Instagram post">
            <img src="{{ asset('frontend/images/Image (2).png') }}" alt="Instagram post">
            <img src="{{ asset('frontend/images/Image (3).png') }}" alt="Instagram post">
            <img src="{{ asset('frontend/images/Image (4).png') }}" alt="Instagram post">
            <img src="{{ asset('frontend/images/Image (5).png') }}" alt="Instagram post">
            <img src="{{ asset('frontend/images/Image6.png') }}" alt="Instagram post">
            <img src="{{ asset('frontend/images/Image (4).png') }}" alt="Instagram post">
            <img src="{{ asset('frontend/images/Image (5).png') }}" alt="Instagram post">
          </div>
        </div>
      </div>

      
      <div class="footer-bottom">
        <div class="social-icons col-lg-4 col-md-4 col-6">
          <a href="#"><iconify-icon icon="ri:facebook-fill" width="20" height="20"></iconify-icon></a>
          <a href="#"><iconify-icon icon="ri:twitter-fill" width="20" height="20"></iconify-icon></a>
          <a href="#"><iconify-icon icon="jam:pinterest" width="20" height="20"></iconify-icon></a>
          <a href="#"><iconify-icon icon="mdi:instagram" width="20" height="20"></iconify-icon></a>
        </div>
        <div>
          <div class="copyright d-none d-lg-block text-center">
            <p>Shopery eCommerce © 2021. All Rights Reserved.</p>
          </div>
        </div>
        <div class="payment-methods col-lg-4 col-md-4 col-6 text-end">
          <img class="img-fluid" src="{{ asset('frontend/images/Payment Method.png') }}" alt="">
        </div>
      </div>
      <div class="copyright copyrightLast col-12  text-center d-lg-none d-md-none d-sm-block">
        <p>Shopery eCommerce © 2021. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
  </footer>
    <div class="mblfooter d-lg-none">
        <div class="container">
            <ul class="d-flex align-items-center justify-content-around text-center">
                <li>
                    <a href="#">
                        <span><i class="bi bi-shop"></i></span>
                        <p>Shop</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span><i class="bi bi-cart"></i></span>
                        <p>Cart</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span><i class="bi bi-heart"></i></span>
                        <p>Wishlist</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span><i class="bi bi-person"></i></span>
                        <p>My Account</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
 </footer>
 <!-- ----------------footer ends here--------------- -->




    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js')}}"></script>
    <script src="http://scode.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/venobox.min.js') }}"></script>
    <script src ="{{ asset('frontend/js/om-javascript-range-slider.js') }}"></script>
    <script src="{{asset('frontend/js/app.js') }}"> </script>
    <script>
        $('.search-input input').keyup(function(){
            const searchValue = $(this).val()
           if(searchValue.length >=3){
            $.ajax({
                url: `{{ route('frontend.search') }}`,
                method: `GET`,
                data:{
                    search: searchValue
                },
                success: function(res){
                  if(res.length > 0){
                    let searchItems = [];
                   res.forEach(item =>{
                      let url = `{{ route('frontend.product.show','::slug') }}`
                      url =  url.replace('::slug', item.slug)
                      let liItem = `<li class="my-2"><a href="${url}">${item.title}</a></li>`
                       searchItems.push(liItem)     
                   })
                    $('.searchResult ul').html(searchItems)
                  }else{
                   $('.searchResult ul').html ('No product found!')
                  }
                },
                error: function(error){
                     console.log(error)
                },

            })
              $('.searchResult').slideDown()
           }else{
            $('.searchResult').hide()
           }
          
        })
    </script>
  @stack('script')
</body>
</html>