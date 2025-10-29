@extends('layouts.frontendlayouts')
@section('content')


  <!------------- Breadcrumbs Start Here ----------->
  <section id="Breadcrumbs">
    <div class="container">
      <ul>
        <li class="d-flex align-items-center">
          <a href="{{ url('/')}}" class="homeIcon">
            <iconify-icon icon="fluent:home-16-regular" width="20" height="22"></iconify-icon>
          </a>
          <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
        </li>
        <li class="d-flex align-items-center">
          <a href= "./about.html" class="active">About Us</a>
        </li>
      </ul>
    </div>
  </section>
  <!-- Breadcrumbs End Here --> 
<!-- * ======== Main Content Starts ======== -->
<main id="About">
  <div class="container">
    <div class="row aboutFristRow justify-content-center align-items-center">
      <div class="col-lg-6 col-md-6 col-12">
        <div class="aboutLeft">
          <h1 class="heading text-start">100% Trusted Organic Food Store</h1>
          <p>Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis
          ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare.
          Vivamus ornare commodo ante, at commodo felis congue vitae.
          </p>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-12">
        <div class="aboutRight">
          <img class="img-fluid" src="{{ asset('frontend/images/Image 1.png ') }}" alt="About Image">
        </div>
      </div>
    </div>
  </div>
  <section class="organic-food-section py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="image-container">
            <img src="{{asset('frontend/images/Image m.png' ) }}" alt="Smiling farmer with organic vegetables"
              class="img-fluid rounded-start">
          </div>
        </div>
        <div class="col-lg-6">
          <h1 class="mb-4">100% Trusted Organic Food Store</h1>
          <p class="lead mb-5">Pellentesque a ante vulputate les porttitor luctus sed eget eros. Nulla et rhoncus neque.
            Duis non diam eget est lectus tincidunt a a mi. Nulla eu eros consequat tortor tincidunt feugiat.</p>

          <div class=" row g-4 align-items-center">
            <div class="col-md-6">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bx-leaf'></i>
                </div>
                <div>
                  <h5 class="mb-1">100% Organic food</h5>
                  <p class="text-muted mb-0">100% healthy & Fresh food</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 justify-content-center">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bx-headphone'></i>
                </div>
                <div>
                  <h5 class="mb-1">Great Support 24/7</h5>
                  <p class="text-muted mb-0">Instant access to contact</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bx-star'></i>
                </div>
                <div>
                  <h5 class="mb-1">Customer Feedback</h5>
                  <p class="text-muted mb-0">Our happy customer</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bx-shopping-bag'></i>
                </div>
                <div>
                  <h5 class="mb-1">100% Secure Payment</h5>
                  <p class="text-muted mb-0">We ensure your money is safe</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bxs-truck'></i>
                </div>
                <div>
                  <h5 class="mb-1">Free Shipping</h5>
                  <p class="text-muted mb-0">Free shipping with discount</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bx-box'></i>
                </div>
                <div>
                  <h5 class="mb-1">100% Organic Food</h5>
                  <p class="text-muted mb-0">100% healthy & Fresh food</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- --------------subscription area starts------------------ -->
            <section id="subcribeArea">
              <div class="row align-items-center">
                <div class="subcribe d-none d-md-block col-lg-3 col-12 text-center">
                  <a href="#"><img class="img-fluid" src="{{ asset('frontend/images/Logo .png') }}" alt=""></a>
                </div>
                <div class="subcribecnt col-lg-4">
                  <h2>Subcribe our Newsletter</h2>
                  <p>Pellentesque eu nibh eget mauris congue mattis matti.</p>
                </div>
                <div class="subcribebtn align-items-end col-lg-5">
                  <form action="" class="d-flex">
                    <div class="searchinput">
                      <input type="text" placeholder="Your email address">
                    </div>
                    <button type="submit">Search</button>
                  </form>
                </div>
                <div class="subcribeLogo d-block d-md-none col-lg-3 col-12 text-center">
                  <a href="#"><img class="img-fluid" src="{{ asset('frontend/images/Logo .png') }}" alt=""></a>
                </div>
              </div>
            </div>
        </section>
          <!--  --------------subscription area  Ends Here----------------- -->
 </main>
 <!-- ------------------main section ends here--------------- -->

<!-- ----------------footer starts here--------------- -->
 @push('script')
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  @endpush
@endsection