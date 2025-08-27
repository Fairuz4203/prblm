@extends('layouts.frontendlayouts')
@section('content')


@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Boxicons CSS -->
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">



@endpush

       
       
             <!------------- Breadcrumbs Start Here ----------->
  <section id="Breadcrumbs">
    <div class="container">
      <ul>
        <li class="d-flex align-items-center">
          <a href=".index.html" class="homeIcom">
            <iconify-icon icon="fluent:home-16-regular" width="20" height="22"></iconify-icon>
          </a>
          <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
        </li>
        <li class="d-flex align-items-center">
          <a href="./cart.html" class="active">Cart</a>
        </li>
      </ul>
    </div>
  </section>
  <!-- Breadcrumbs End Hear -->
   <main>
     <section class="mainProduct">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-6 productImg ">
            <div class="row justify-content-center align-items-center">
              <div class="position-relative d-lg-block d-none col-lg-3">
               
                <div class="minibannerSlider mt-5">
                  <div class="slide">
                    <div class="row align-items-center h-100">
                      <div class="">
                        <div class="bannerImg">
                          <img class="img-fluid" src="{{ title_img($product->featured_img) }}" alt="{{ $product->title }}">
                        </div>
                      </div>
                    </div>

                  </div>
                  @if(count(json_decode($product->gall_img ?? []))>0)
                  @foreach (json_decode($product->gall_img ?? []) as $gallImg)
                  <div class="slide">
                    <div class="row align-items-center h-100">
                      <div class="">
                        <div class="bannerImg">
                          <img class="img-fluid" src="{{ title_img($gallImg) }}" alt="{{ $product->title }}">
                        </div>
                      </div>
                    </div>
                   
                  </div>
                  @endforeach
                @endif
                </div>
                <div class="lh-0 slick-prev ">
                  <i class='bx bx-chevron-up bx-fade-down'></i>
                </div>
                <div class="lh-0 slick-next ">
                  <i class='bx bx-chevron-down bx-fade-down'></i>  
                </div>
              </div>
              <div class="col-lg-9">
                <div class="bannerSlider">
                
                  <div class="slide">
                    <div class="row align-items-center h-100">
                      <div class="">
                        <div class="bannerImg">
                          <img class="img-fluid" src="{{ title_img($product->featured_img) }}" alt="{{ $product->title }}">
                        </div>
                      </div>
                    </div>
                  
                  </div>
                  @if(count(json_decode($product->gall_img ?? []))>0)
                  @foreach (json_decode($product->gall_img ?? []) as $gallImg)
                  <div class="slide">
                    <div class="row align-items-center h-100">
                      <div class="">
                        <div class="bannerImg">
                          <img class="img-fluid" src="{{ title_img($gallImg) }}" alt="{{ $product->title }}">
                        </div>
                      </div>
                    </div>

                  </div>
                @endforeach
                @endif
                </div>
              </div>
            </div>

             <div class="slick-prev"><i class='bx bx-chevron-up bx-fade-down'></i></div>
  <div class="slick-next"><i class='bx bx-chevron-down bx-fade-down'></i></div>
          </div>
          <!-- // Product Details Section -->
          <div class="col-lg-6 productCnt">
            <!-- Product Heading -->
            <div class="productHeading d-flex align-items-center mb-2">
              <h2 class="mb-0 me-2">{{ $product->title }}</h2>
              @if( $product->stock)
              <span class="in-stock">In Stock</span>
              @else
              <span class="out-of-stock">Out of Stock</span>
              @endif
            </div>
            <!-- Review Section -->
            <div class="productRating d-flex mb-2">
              <div class="rating-stars">
                <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                <span class="reviews">4 Reviews</span>
              </div>
              <span>.</span>
              @if( $product->sku )
              <small class="text-muted">SKU: {{ $product->sku }}</small>
              @endif
            </div>
            <!-- Price Section -->
<div class="productPrice mb-3">
   @if ($product->selling_price) 
   <span class="original-price">{{ number_format($product->selling_price,2) }}৳</span> 
   <span class="current-price ms-2">{{ number_format ($product->price) }}৳</span>
       @php
            $discount = round((($product->selling_price - $product->price) / $product->selling_price) * 100);
        @endphp 
      
            <span class="discount-badge ms-2">{{ $discount }}% OFF</span>
      
     @else
      <span class="original-price">{{ number_format ($product->price) }}৳</span>
      @endif 
</div>


            <!-- Navigation and Social Icons -->
            <div class="mb-3 navigation row">
              <div class="col-6 d-flex align-items-center">
                <span class="me-2">Brand:</span>
                <a href=""><img class="img-fluid" src="./images/Group 19.png"></a>
              </div>
              <div class="col-6 social-icons text-end">
                <a href="https://www.facebook.com"><iconify-icon icon="ri:facebook-fill" width="20"
                    height="20"></iconify-icon></a>
                <a href="#"><iconify-icon icon="ri:twitter-fill" width="20"
                    height="20"></iconify-icon></a>
                <a href="#"><iconify-icon icon="jam:pinterest" width="20"
                    height="20"></iconify-icon></a>
                <a href="www.instagram.com"><iconify-icon icon="mdi:instagram" width="20"
                    height="20"></iconify-icon></a>
              </div>
            </div>
            <!-- Product Description -->
            <div class="text mb-4">
            {!! $product->short_details !!}</p>
            </div>

            <!-- Cart Button  -->
            <div class="cartBtn mb-4 ">
              <div class="d-flex align-items-center">
                <!-- <div class="quantity-selector me-3">
                  <button class="quantity-btn decrease-btn">-</button>
                  <input type="text" class="quantity-input" value="1" readonly>
                  <button class="quantity-btn increase-btn">+</button>
                </div> -->
                <div class="quantity-control">
                  <button class="quantity-btn decrease-btn quantityDecrement">-</button>
                  <input type="number" class="quantity-input" value="1">
                  <button class="quantity-btn increase-btn quantityIncrement">+</button>
                </div>

                <a href="cart.html"
   class="add-to-cart-btn d-flex justify-content-center gap-4 btn flex-grow-1 me-2">
   Add to Cart
   <iconify-icon class="d-none d-lg-block" icon="gala:bag" width="20" height="20"></iconify-icon>
</a>

                <button class="wishlist-btn">
                  <iconify-icon icon="iconamoon:heart" width="23" height="23"></iconify-icon>
                </button>
              </div>
            </div>
            <!-- Tag and Category -->
            <div class="category mb-3">
              <div>Category: <a href="#" class="">Vegetables</a></div>
              <div>
                Tag:
                <a href="#" class="">Vegetables</a>
                <a href="#" class="">Healthy</a>
                <a href="#" class="">Chinese Cabbage</a>
                <a href="#" class="">Green Cabbage</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="productDetail">
      <div class="container">
        <div class="col-lg-12 ">
          <ul class="navigation justify-content-center nav nav-tabs mb-4" id="productTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description"
                type="button" role="tab" aria-controls="description" aria-selected="true">Descriptions</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="additional-tab" data-bs-toggle="tab" data-bs-target="#additional"
                type="button" role="tab" aria-controls="additional" aria-selected="false">Additional
                Information</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="feedback-tab" data-bs-toggle="tab" data-bs-target="#feedback" type="button"
                role="tab" aria-controls="feedback" aria-selected="false">Customer
                Feedback</button>
            </li>
          </ul>
          <!-- navigation tab -->
          <div class="tab-content" id="productTabsContent" class="productTabsContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">

             {!! $product->long_details !!}
            </div>
            <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
             {!!$product->additional_info!!}
              </div>
            </div>
            <div class="tab-pane fade" id="feedback" role="tabpanel" aria-labelledby="feedback-tab">
              <div class="row">
                <div class=" @if($hasReview) col-md-12 @else col-md-8 @endif">
                  <div class="mb-4">
                    <h5>Customer Reviews ({{ count ($product->reviews)}})</h5>
                  </div>
                  @forelse ($product->reviews as $review )
                  <!-- Review 1 -->
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between mb-2">
                        <div>
                          <h6 class="mb-0">{{ $review->user_name ?? 'Guest' }}</h6>
                          <div class="rating-stars">
                            <div class ="fill position-absolute">
                           
                            <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                            <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                            <iconify-icon icon="prime:star-half-fill" width="15" height="16"style="color: rgba(236, 186, 6, 1)" ></iconify-icon>
                            </div>  
                           
                            <div class="empty">
                            <iconify-icon icon="codicon:star-empty" width="15" height="16"  style="color:rgba(236, 186, 6, 1)"></iconify-icon>
                            <iconify-icon icon="codicon:star-empty" width="15" height="16"  style="color: rgba(236, 186, 6, 1)"></iconify-icon>
                            <iconify-icon icon="codicon:star-empty" width="15" height="16"  style="color: rgba(236, 186, 6, 1)"></iconify-icon>
                            <iconify-icon icon="codicon:star-empty" width="15" height="16"  style="color: rgba(236, 186, 6, 1)"></iconify-icon>
                            <iconify-icon icon="codicon:star-empty" width="15" height="16"  style="color:rgba(236, 186, 6, 1)"></iconify-icon>
                            


                            </div>


                          </div>
                        </div>
                        <small class="text-muted">{{ carbon\carbon::parse($review->created_at)->diffForHumans() }}</small>
                      </div>
                      <p>{{ $review->message }}.</p>
                    </div>
                  </div>
                  @empty
                  <p> No reviews found !</p>
                  @endforelse
               </div>
                
               
              @if (!$hasReview)
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Write a Review</h5>
                      <form id="review-form" method = "post" action = "{{ route('frontend.review.submit') }}">
                      @csrf
                        <div class="mb-3">
                          <label class="form-label">Rating</label>
                          <input name="rating" type ="number"  step="0.01" class = "form-control" placeholder = "Give your ratings " required min="0" max="5">
                          <div class="rating-select">
                            <i class='bx bxs-star' data-rating="1"></i>
                            <i class='bx bxs-star' data-rating="2"></i>
                            <i class='bx bxs-star' data-rating="3"></i>
                            <i class='bx bxs-star' data-rating="4"></i>
                            <i class='bx bxs-star' data-rating="5"></i>
                          </div>
                           <input type="hidden" id="rating-value" value="{{ $product->id }}" name="product_id">
                          <input type="hidden" id="rating-value" value="0">
                        </div>
                        <div class="mb-3">
                          <label for="reviewText" class="form-label">Your Review</label>
                          <textarea class="form-control" id="reviewText"name="message" rows="4" ></textarea>
                        </div>
                        <div class="d-flex justify-content-center review ">
                        <button type="submit" class="btn btn-success w-100 ">Submit Review</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
             @endif
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
              <!-- =================feature products starts here============== -->
           <section id="products">
    <div class="container">
        <h2 class="heading-2">Related Products</h2>
        <div class="slideshow">
            @foreach ($relatedProducts as $relatedProduct)
            <div class="slides">
                <div class="productcard">
                    <div class="thumbnail">
                        <a href="{{ route('frontend.product.show', $relatedProduct->slug) }}">
                            <img src="{{ title_img($relatedProduct->featured_img) }}" alt="{{ $relatedProduct->title }}" class="img-fluid">
                        </a>

                        @if($relatedProduct->selling_price && $relatedProduct->selling_price > $relatedProduct->price)
                            @php
                                $discount = round((($relatedProduct->selling_price - $relatedProduct->price) / $relatedProduct->selling_price) * 100);
                            @endphp
                            <a class="discount" href="#">{{ $discount }}% OFF</a>
                        @endif

                        <ul class="quicklinks">
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="bi bi-eye"></i></a></li>
                        </ul>
                    </div>

                    <div class="content">
                        <a href="{{ route('frontend.product.show', $relatedProduct->slug) }}">{{ $relatedProduct->title }}</a>
                        <strong>
                            {{ number_format($relatedProduct->price, 2) }} 
                            @if($relatedProduct->selling_price && $relatedProduct->selling_price > $relatedProduct->price)
                                <span class="text-decoration-line-through">{{ number_format($relatedProduct->selling_price, 2) }}</span>
                            @endif
                        </strong>
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
            @endforeach
        </div>
    </div>
</section>

                  
                     
                  <!-- Left and Right Arrows -->
                  <div class="lh-0 leftArrow"><i class="bi bi-arrow-left"></i></div>
                  <div class="lh-0 rightArrow"><i class="bi bi-arrow-right"></i></div>
              
                </div> <!-- container -->
              </section>
              
              <!-- =================feature products ends here============== --> 
                    <!-- --------------subscription area starts------------------ -->
            <section id="subcribeArea">
              <div class="row align-items-center">
                <div class="subcribe d-none d-md-block col-lg-3 col-12 text-center">
                  <a href="#"><img class="img-fluid" src="./images/Logo .png" alt=""></a>
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
                  <a href="#"><img class="img-fluid" src="./images/Logo .png" alt=""></a>
                </div>
              </div>
            </div>
        </section>
          <!--  --------------subscription area  Ends Here----------------- -->
        </main>
         <!-- ------------------main section ends here--------------- -->
@push('script')
<script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>
@endpush

@endsection