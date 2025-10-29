@extends('layouts.frontendlayouts')
@section('content')
<!-- ------------------main section starts here--------------- -->

    <!-- =================Banner Section Starts================ -->
    <section id="banners">
        <div class="container position-relative">
          <div class="slidebar">
            <div class="slider">

              <div class="row align-items-center h-100">
                <div class="col-lg-7 bannerimg">
                  <img src="{{ asset('frontend/images/page4.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5">
                  <h6>Welcome to shopery</h6>
                  <h2>Fresh & Healthy
                    Organic Food</h2>
                    <p>Free shipping on all your order. we deliver, you enjoy</p>
                    <a class="btn1 btn-primary lh-0" href="../Shop/shop.html">Shop now <i class="bi bi-arrow-right"></i>
                    
                  </a>
                </div>
              </div>
         </div>
         <div class="slider">

            <div class="row align-items-center h-100">
              <div class="col-lg-7 bannerimg">
                <img src="{{ asset('frontend/images/page5.png') }}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-5">
                <h6>Welcome to shopery</h6>
                <h2>Fresh & Healthy
                  Organic Food</h2>
                  <h5> Sale up to <span>30% OFF</span></h5>
                  <p>Free shipping on all your order. we deliver, you enjoy</p>

                  <a class="btn1 btn-primary lh-0" href="../Shop/shop.html">Shop now <i class="bi bi-arrow-right"></i>
                      
                  </a>
              </div>
            </div>
       </div>
       <div class="slider">

        <div class="row align-items-center h-100">
          <div class="col-lg-7 bannerimg">
            <img src="{{ asset('frontend/images/page3.png ') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5">
            <h6>Welcome to shopery</h6>
            <h2>Fresh & Healthy
              Organic Food</h2>
              <h5> Sale up to <span>30% OFF</span></h5>
              <p>Free shipping on all your order. we deliver, you enjoy</p>
              <a class="btn1 btn-primary lh-0" href="../Shop/shop.html"> Shop now  <i class="bi bi-arrow-right"></i>
                  
              </a>
          </div>
        </div>
   </div>
          </div>
          <div class="lh-0 leftArrow"><i class="bi bi-arrow-left"></i></div>
          <div class="lh-0 rightArrow"><i class="bi bi-arrow-right"></i></div>
        </div>
    </section>


      <!-- =================Banner Section Ends================ -->
       <!-- ====================== Card Section Starts ============ -->
<section id="card">
  <div class="container">
    <div class="row gx-4 gy-4 justify-content-center">

      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card-box text-center">
          <img src="{{ asset ('frontend/images/Icon (1).png') }}" class="img-fluid" alt="">
          <h5>Free Shipping</h5>
          <p>Free shipping with discount</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card-box text-center">
          <img src="{{ asset ('frontend/images/Icon (2).png') }}" class="img-fluid" alt="">
          <h5>Great Support 24/7</h5>
          <p>Instant access to Contact</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card-box text-center">
          <img src="{{ asset ('frontend/images/Icon (3).png') }}" class="img-fluid" alt="">
          <h5>100% Secure Payment</h5>
          <p>We ensure your money is safe</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card-box text-center">
          <img src="{{ asset ('frontend/images/Icon (4).png') }}" class="img-fluid" alt="">
          <h5>Money-Back Guarantee</h5>
          <p>30 days money-back guarantee</p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ====================== Card Section Ends ============ -->
         <!-- ======================Product Section Starts============= -->
         <section id="products">
            <div class="container">
              <h2 class="heading">Introducing Our Products</h2>
    
              <ul class="d-flex justify-content-center" id="productNav">
                <li class="active"><a href="#">All</a></li>
                <li><a href="#">Vegetable</a></li>
                <li><a href="#">Fruits</a></li>
                <li><a href="#">Meat & Fish </a></li>
                <li><a href="#">View All</a></li>
              </ul>
    
              <div class="row">
                <div class="col-lg-3 col-md-4 col-6 productcard ">
                  <div class="thumbnail">
                    <a href="#" >
                      <img  src="{{ asset('frontend/images/green apple.png') }}" alt="" class="img-fluid"  />
                      
                  </a>
                  <a  class="discount" href="#">Sale 50% </a>
                    <ul class="quicklinks">
                       
                      <li>
                        <a href="#">
                            <i class="fa-regular fa-heart"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#"><i class="bi bi-eye"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="content">
                    <a href="#">Green Apple</a>
                    <strong>$14.99 <span>$20.99</span></strong>
                    <span>
                        <iconify-icon
                    class="fullStar"
                    icon="material-symbols:star-rounded"
                    width="16"
                    height="16"
                  ></iconify-icon>
                  <iconify-icon
                    class="fullStar"
                    icon="material-symbols:star-rounded"
                    width="16"
                    height="16"
                  ></iconify-icon>
                  <iconify-icon
                    class="fullStar"
                    icon="material-symbols:star-rounded"
                    width="16"
                    height="16"
                  ></iconify-icon>
                  <iconify-icon
                    class="fullStar"
                    icon="material-symbols:star-rounded"
                    width="16"
                    height="16"
                  ></iconify-icon>
                  <iconify-icon
                    class="halfStar"
                    icon="material-symbols:star-rounded"
                    width="16"
                    height="16"
                  ></iconify-icon>
                    </span>
                    <a href="#" class="addToCard">
                        <i class="bi bi-handbag"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 productcard ">
                    <div class="thumbnail">
                      <a href="#" >
                        <img  src="{{ asset('frontend/images/mango.png') }}" alt="" class="img-fluid"/>
                        
                    </a>
                    
                      <ul class="quicklinks">
                         
                        <li>
                          <a href="#">
                              <i class="fa-regular fa-heart"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#"><i class="bi bi-eye"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="content">
                      <a href="#">Surjapur Mango</a>
                      <strong>$14.99 <span>$20.99</span></strong>
                      <span>
                          <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="halfStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                      </span>
                      <a href="#" class="addToCard">
                          <i class="bi bi-handbag"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 productcard ">
                    <div class="thumbnail">
                      <a href="#" >
                        <img  src="{{ asset('frontend/images/tomato.png') }}" alt="" class="img-fluid"  />
                        
                    </a>
                    
                      <ul class="quicklinks">
                         
                        <li>
                          <a href="#">
                              <i class="fa-regular fa-heart"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#"><i class="bi bi-eye"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="content">
                      <a href="#">Red Tomatos</a>
                      <strong>$14.99 <span>$20.99</span></strong>
                      <span>
                          <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="halfStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                      </span>
                      <a href="#" class="addToCard">
                          <i class="bi bi-handbag"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 productcard ">
                    <div class="thumbnail">
                      <a href="#" >
                        <img  src="{{ asset('frontend/images/cauliflower.png') }}" alt="" class="img-fluid"  />
                        
                    </a>
                    
                      <ul class="quicklinks">
                         
                        <li>
                          <a href="#">
                              <i class="fa-regular fa-heart"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#"><i class="bi bi-eye"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="content">
                      <a href="#">Fresh Cauliflower</a>
                      <strong>$14.99 <span>$20.99</span></strong>
                      <span>
                          <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="halfStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                      </span>
                      <a href="#" class="addToCard">
                          <i class="bi bi-handbag"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 productcard ">
                    <div class="thumbnail">
                      <a href="#" >
                        <img  src="{{ asset('frontend/images/lettuce.png') }}" alt="" class="img-fluid"  />
                        
                    </a>
                    
                      <ul class="quicklinks">
                         
                        <li>
                          <a href="#">
                              <i class="fa-regular fa-heart"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#"><i class="bi bi-eye"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="content">
                      <a href="#">Green Lettuce</a>
                      <strong>$14.99 <span>$20.99</span></strong>
                      <span>
                          <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="halfStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                      </span>
                      <a href="#" class="addToCard">
                          <i class="bi bi-handbag"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 productcard ">
                    <div class="thumbnail">
                      <a href="#" >
                        <img  src="{{ asset('frontend/images/eggplant.png') }}" alt="" class="img-fluid"  />
                        
                    </a>
                    
                      <ul class="quicklinks">
                         
                        <li>
                          <a href="#">
                              <i class="fa-regular fa-heart"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#"><i class="bi bi-eye"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="content">
                      <a href="#">Eggplant</a>
                      <strong>$14.99 <span>$20.99</span></strong>
                      <span>
                          <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="halfStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                      </span>
                      <a href="#" class="addToCard">
                          <i class="bi bi-handbag"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 productcard ">
                    <div class="thumbnail">
                      <a href="#" >
                        <img  src="{{ asset('frontend/images/chilli.png') }}" alt="" class="img-fluid"  />
                        
                    </a>
                    
                      <ul class="quicklinks">
                         
                        <li>
                          <a href="#">
                              <i class="fa-regular fa-heart"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#"><i class="bi bi-eye"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="content">
                      <a href="#">Green Chilli</a>
                      <strong>$14.99 <span>$20.99</span></strong>
                      <span>
                          <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="halfStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                      </span>
                      <a href="#" class="addToCard">
                          <i class="bi bi-handbag"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 productcard ">
                    <div class="thumbnail">
                      <a href="#" >
                        <img  src="{{ asset('frontend/images/Eggplant1.png') }}" alt="" class="img-fluid"  />
                        
                    </a>
                    
                      <ul class="quicklinks">
                         
                        <li>
                          <a href="#">
                              <i class="fa-regular fa-heart"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#"><i class="bi bi-eye"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="content">
                      <a href="#">Eggplant</a>
                      <strong>$14.99 <span>$20.99</span></strong>
                      <span>
                          <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="fullStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                    <iconify-icon
                      class="halfStar"
                      icon="material-symbols:star-rounded"
                      width="16"
                      height="16"
                    ></iconify-icon>
                      </span>
                      <a href="#" class="addToCard">
                          <i class="bi bi-handbag"></i>
                      </a>
                    </div>
                  </div>
                 
            </section>
          <!-- ======================Product Section Ends============= -->
           <!-- =========================drink section starts============== -->
           <section id="drink">
            <div class="container">
              <div class="row d-flex">
                <div class="col-lg-4">
                  <div class="milk">
                    <h3>100% Fresh <br>
                      Cow Milk</h3>
                      <p>Starting at<span> $14.99</span></p>
                      <a class="btn btn-secondary" href="#">Shop Now <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="coke">
                    <h6>Drink Sale</h6>
                    <h3>Water &amp; <br>
                        Soft Drink </h3>
                     
                      <a class="btn btn-secondary" href="#">Shop Now <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="breakfast">
                    <h6>100% Organic</h6>
                    <h3>Quick <br>
                       Breakfast </h3>
                     
                      <a class="btn btn-secondary" href="#">Shop Now <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </section>
            <!-- =========================drink section ends============== -->
             <!-- ========================Special Product Section Starts======== -->
             <section id="bestDeal">
              <div class="container">
                <p>Best Deal</p>
                <h2>Our Special Products Deal <br> of the Month</h2>
                <ul class="timer" data-date="2025/04/15" >
                  <li>
                    <p>
                      <span class="days">00</span>
                      Days
                    </p>
                  </li>
                  <li>
                    <p>
                      <span class="hrs">00</span>
                      Hours
                    </p>
                  </li>
                  <li>
                    <p>
                      <span class="mins">00</span>
                                   Mins
                    </p>
                  </li>
                  <li>
                    <p>
                      <span class="secs">00</span>
                      Secs
                    </p>
                  </li>
                </ul>
               
                <a class="btn1 btn-primary lh-0" href="#">Shop now <i class="bi bi-arrow-right"></i>
                  
                </a>
               
      
      
              </div>
             </section>
              
              <!-- ========================Special Product Section Ends======== -->
               <!-- =================feature products starts here============== -->
               <section id="products">
                <div class="container">
                  <h2 class="heading-2">Featured Products</h2>
                  <div class="slideshow">
                    <!-- Slides Start -->
                    <div class="slides">
                      <div class="productcard">
                        <div class="thumbnail">
                          <a href="#"><img src="{{ asset('frontend/images/green apple.png') }}" alt="" class="img-fluid"></a>
                          <a class="discount" href="#">Sale 50%</a>
                          <ul class="quicklinks">
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="bi bi-eye"></i></a></li>
                          </ul>
                        </div>
                        <div class="content">
                          <a href="#">Green Apple</a>
                          <strong>$14.99 <span>$20.99</span></strong>
                          <span>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="halfStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                          </span>
                          <a href="#" class="addToCart"><i class="bi bi-handbag"></i></a>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Repeat other slides below similarly -->
                    <!-- Example for Orange -->
                    <div class="slides">
                      <div class="productcard">
                        <div class="thumbnail">
                          <a href="#"><img src="{{ asset('frontend/images/orange.png') }}" alt="" class="img-fluid"></a>
                          <ul class="quicklinks">
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="bi bi-eye"></i></a></li>
                          </ul>
                        </div>
                        <div class="content">
                          <a href="#">Fresh Indian Malta</a>
                          <strong>$20.00</strong>
                          <span>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="halfStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                          </span>
                          <a href="#" class="addToCart"><i class="bi bi-handbag"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="slides">
                      <div class="productcard">
                        <div class="thumbnail">
                          <a href="#"><img src="{{ asset('frontend/images/cabbage.png') }}" alt="" class="img-fluid"></a>
                          <ul class="quicklinks">
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="bi bi-eye"></i></a></li>
                          </ul>
                        </div>
                        <div class="content">
                          <a href="#">Chinese cabbage</a>
                          <strong>$12.00</strong>
                          <span>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="halfStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                          </span>
                          <a href="#" class="addToCart"><i class="bi bi-handbag"></i></a>
                        </div>
                      </div>
                    </div>
              

                    <div class="slides">
                      <div class="productcard">
                        <div class="thumbnail">
                          <a href="#"><img src="{{ asset('frontend/images/lettuce.png') }}" alt="" class="img-fluid"></a>
                          <ul class="quicklinks">
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="bi bi-eye"></i></a></li>
                          </ul>
                        </div>
                        <div class="content">
                          <a href="#">Green Lettuce</a>
                          <strong>$9.00</strong>
                          <span>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="halfStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                          </span>
                          <a href="#" class="addToCart"><i class="bi bi-handbag"></i></a>
                        </div>
                      </div>
                    </div>
              

                    <div class="slides">
                      <div class="productcard">
                        <div class="thumbnail">
                          <a href="#"><img src="{{ asset('frontend/images/Eggplant1.png') }}" alt="" class="img-fluid"></a>
                          <ul class="quicklinks">
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="bi bi-eye"></i></a></li>
                          </ul>
                        </div>
                        <div class="content">
                          <a href="#">Eggplant</a>
                          <strong>$34.00</strong>
                          <span>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="halfStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                          </span>
                          <a href="#" class="addToCart"><i class="bi bi-handbag"></i></a>
                        </div>
                      </div>
                    </div>
              

                    <div class="slides">
                      <div class="productcard">
                        <div class="thumbnail">
                          <a href="#"><img src="{{ asset('frontend/images/chilli.png') }}" alt="" class="img-fluid"></a>
                          <ul class="quicklinks">
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="bi bi-eye"></i></a></li>
                          </ul>
                        </div>
                        <div class="content">
                          <a href="#">Green Chilli</a>
                          <strong>$14.99</strong>
                          <span>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                            <iconify-icon class="halfStar" icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon>
                          </span>
                          <a href="#" class="addToCart"><i class="bi bi-handbag"></i></a>
                        </div>
                      </div>
                    </div>
              
              
                    <!-- Add all other product slides similarly -->
              
                    <!-- Slides End -->
                  </div>
              
                  <!-- Left and Right Arrows -->
                  <div class="lh-0 leftArrow"><i class="bi bi-arrow-left"></i></div>
                  <div class="lh-0 rightArrow"><i class="bi bi-arrow-right"></i></div>
              
                </div> <!-- container -->
              </section>
              
              <!-- =================feature products ends here============== --> 
                <!--===================== TESTIMONIAL Section Starts Here=============  -->
       <section id="testimonial">
        <div class="container">
          <h2 class="heading-2">What our Clients Says</h2>
          <div class="testimonialSlider">
            <div class="testimonySlide">
              <div class="testimonyContent">
                <img src="{{ asset('frontend/images/quote.png') }}" alt="">
                <p>
                  “Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”
                </p>
              </div>
              <div class="avatar">
                <img src="{{ asset('frontend/images/reivew.png') }}" alt="">
                <p>Jenny Wilson</p>
                <span>Customer</span>
              </div>
            </div>
            <div class="testimonySlide">
              <div class="testimonyContent">
                <img src="{{ asset('frontend/images/quote.png') }}" alt="">
                <p>
                  “Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”
                </p>
              </div>
              <div class="avatar">
                <img src="{{ asset('frontend/images/review2.png') }}" alt="">
                <p>Guy Hawkins</p>
                <span>Customer</span>
              </div>
            </div>
            <div class="testimonySlide">
              <div class="testimonyContent">
                <img src="{{ asset('frontend/images/quote.png') }}" alt="">
                <p>
                  “Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”
                </p>
              </div>
              <div class="avatar">
                <img src="{{ asset('frontend/images/review3.png') }}" alt="">
                <p>Kathryn Murphy</p>
                <span>Customer</span>
              </div>
            </div>
            <div class="testimonySlide">
              <div class="testimonyContent">
                <img src="{{ asset('frontend/images/quote.png') }}" alt="">
                <p>
                  “Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”
                </p>
              </div>
              <div class="avatar">
                <img src="{{ asset('frontend/images/reivew.png') }}" alt="">
                <p>Jenny Wilson</p>
                <span>Customer</span>
              </div>
            </div>
            <div class="testimonySlide">
              <div class="testimonyContent">
                <img src="{{ asset('frontend/images/quote.png') }}" alt="">
                <p>
                  “Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”
                </p>
              </div>
              <div class="avatar">
                <img src="{{ asset('frontend/images/review2.png') }}" alt="">
                <p>Guy Hawkins</p>
                <span>Customer</span>
              </div>
            </div>
            <div class="testimonySlide">
              <div class="testimonyContent">
                <img src="{{ asset('frontend/images/quote.png') }}" alt="">
                <p>
                  “Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”
                </p>
              </div>
              <div class="avatar">
                <img src="{{ asset('frontend/images/review3.png') }}" alt="">
                <p>Kathryn Murphy</p>
                <span>Customer</span>
              </div>
            </div>
            <div class="testimonySlide">
              <div class="testimonyContent">
                <img src="{{ asset('frontend/images/quote.png') }}" alt="">
                <p>
                  “Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”
                </p>
              </div>
              <div class="avatar">
                <img src="{{ asset('frontend/images/reivew.png') }}" alt="">
                <p>Jenny Wilson</p>
                <span>Customer</span>
              </div>
            </div>
          </div>
          <div class="lh-0 leftArrow"><i class="bi bi-arrow-left"></i></div>
          <div class="lh-0 rightArrow"><i class="bi bi-arrow-right"></i></div>
        </div>
       </section>
      <!--====================== TESTIMONIAL Section ENDS Here=============== -->
      <!-- ==================== Video Section Starts Here================ -->
       <section id="Video">
        <div class="container">
          <div class="row">
         
          <a class="videoHome vbox-item" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=sB2MVRraMwg">
          <img class="img-fluid" src="{{ asset('frontend/images/video.png') }}" alt="">
          </a>
          </div>
        </div>
       </section>
       <!-- ==================== Video Section Ends Here================ -->
        <!-- -----------------News Section Starts Here----------------- -->
        <section id="latestnews">
          <div class="container">
            <div class="latestnewsCnt">
              <h2 class="heading-3">Latest News</h2>
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="latestnewscard">
                    <img class="img-fluid" src="{{ asset('frontend/images/news2.png') }}" alt="">
                    <h3>Curabitur porttitor orci eget neque accumsan venenatis.</h3>
                    <p>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue, malesuada et
                      pulvinar at,
                      posuere
                      eu neque.</p>
                    <a href="#">Read More<span><iconify-icon icon="basil:arrow-right-outline" width="25" height="25"></iconify-icon></span></a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="latestnewscard">
                    <img class="img-fluid" src="{{ asset('frontend/images/news3.png') }}" alt="">
                    <h3>Curabitur porttitor orci eget neque accumsan venenatis.</h3>
                    <p>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue, malesuada et
                      pulvinar at,
                      posuere
                      eu neque.</p>
                    <a href="#">Read More <span><iconify-icon icon="basil:arrow-right-outline" width="25" height="25"></iconify-icon></span></a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="latestnewscard">
                    <img class="img-fluid" src="{{ asset('frontend/images/news.png') }}" alt="">
                    <h3>Curabitur porttitor orci eget neque accumsan venenatis.</h3>
                    <p>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue, malesuada et
                      pulvinar at,
                      posuere
                      eu neque.</p>
                    <a href="#">Read More<span><iconify-icon icon="basil:arrow-right-outline" width="25" height="25"></iconify-icon></span></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
           <!-- -----------------News Section Ends Here----------------- -->
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
@endsection