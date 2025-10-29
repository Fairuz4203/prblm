@extends('layouts.frontendlayouts')
@section('title', $category->category_title ?? 'Shop')
@section('content')
@push('css')
<link rel ="stylesheet" href="{{ asset('frontend/css/shop.css') }}">
<link rel ="stylesheet" href="{{ asset('frontend/css/om-javascript-range-slider.css') }}">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
@endpush

  <!------------- Breadcrumbs Start Here ----------->
  <section id="Breadcrumbs">
    <div class="container">
      <ul>
        <li class="d-flex align-items-center">
          <a href="{{ url('/')}}" class="homeIcom">
            <iconify-icon icon="fluent:home-16-regular" width="20" height="22"></iconify-icon>
          </a>
          <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
        </li>
        <li class="d-flex align-items-center">
          <a href="shop.html" class="active">{{$category->category_title ?? 'Shop' }}</a>
        </li>
      </ul>
    </div>
  </section>
  <!-- Breadcrumbs End Hear -->
  <!-- Shop Section Start Here -->
  <section id="allProducts">
    <div class="container">
      <div class="row">
        <div class="filter col-lg-3 d-lg-block d-none">
          <form action = "" method = "get">
          <div class="filterBtn">
            <button type="submit">Filter
            </button>
            <span>
              <iconify-icon icon="rivet-icons:filter" width="20" height="20"></iconify-icon>
            </span>
          </div>
          <!-- filterBtn end -->
          <div class="categories ">
            <div class="row align-items-center categoreBtn">
              <div class="col-6 radioParent">
                <a  class="dropdown-toggle" type="button">All Categories</a>
              </div>
              <div class="col-6 text-end">
                <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
              </div>
            </div>
            <!-- categoreBtn end -->
            <!-- ----------- Categories Start Here ---------- -->
   <li class="shopCollapse"> 
    <ul class="shopOpen active">
    @foreach ($productCategories as $productCategory)
   <li class="d-flex align-items-center All">
     <input type="radio" id="{{ $productCategory->slug }}" name="Category" value ="{{ $productCategory->id }}"
     {{ request('category') == $productCategory->id ? 'checked': '' }}> 
   <label for="{{ $productCategory->slug }}">{{  $productCategory->category_title }}({{ $productCategory->products_count}})</label>
   </li> 
   @endforeach 
  </ul> 
  </li>

            <!-- ------------ Categories End Here ------------ -->
           
             <!-- ------------------ Price Range Start Here ------------ -->
             <div class="row align-items-center priceRange">
              <!-- <input type="range" name="pieces" id="inputPieces" multiple value="50,1500" /> -->
              <div class="priceBox position-relative">
                <div class="col-12 d-flex justify-content-between priceBtn">
                  <span>Price</span>
                  <span>
                    <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                  </span>
                </div>
                <div class="priceRangeWrapper">
                  <div class="priceRangeOpen">
                    <div class="range">
                      <input type="range" name="pieces" id="inputPieces" max="2000" value="50" multiple="">
                    </div>
                    <div class="price-input-container">
                      <div class="price-input">
                        <span>Price :</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ------------------ Price Range Ends Here ------------ -->

            <!-- ------------------ Rating Start Here ------------ -->
            <div class="rating">
              <div class="row align-items-center ratingBtn">
                <div class="col-6 ratingParent"><a type="button">Rating</a></div>
                <div class="col-6 text-end">
                  <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                </div>
              </div>
              <ul class="ratingOpen">
                <li class="d-flex align-items-center">
                  <input type="radio" id="All" name="Categories">
                  <label for="All">
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <span>5.0</span>
                  </label>
                </li>
                <li class="d-flex align-items-center">
                  <input type="radio" id="ForStar" name="Categories">
                  <label for="ForStar">
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                    <span>4.0 &amp; up</span>
                  </label>
                </li>
                <li class="d-flex align-items-center">
                  <input type="radio" id="threeStar" name="Categories">
                  <label for="threeStar">
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                    <span>3.0 &amp; up</span>
                  </label>
                </li>
                <li class="d-flex align-items-center">
                  <input type="radio" id="tweStar" name="Categories">
                  <label for="tweStar">
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                    <span>2.0 &amp; up</span>
                  </label>
                </li>
                <li class="d-flex align-items-center">
                  <input type="radio" id="oneStar" name="Categories">
                  <label for="oneStar">
                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                    <span>1.0 &amp; up</span>
                  </label>
                </li>
              </ul>
            </div>
            <!-- ------------------ Rating End Here ------------ -->
            <!-- ------------------ Popular Start Here ------------ -->
            <div class="popular">
              <div class="row align-items-center popularBtn">
                <div class="col-lg-6 col-8 popularParent"><a type="button">Popular Tag</a></div>
                <div class="col-lg-6 col-4 text-end">
                  <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                </div>
              </div>
              <div class="popularCollapse">
                <div class="popularTagBox active">
                  <a href="#" class="popularTag">Healthy</a>
                  <a href="#" class="popularTag">Low fat</a>
                  <a href="#" class="popularTag active">Vegetarian</a>
                  <a href="#" class="popularTag">Kid foods</a>
                  <a href="#" class="popularTag">Vitamins</a>
                  <a href="#" class="popularTag">Bread</a>
                  <a href="#" class="popularTag">Meat</a>
                  <a href="#" class="popularTag">Snacks</a>
                  <a href="#" class="popularTag">Tiffin</a>
                  <a href="#" class="popularTag">Launch</a>
                  <a href="#" class="popularTag">Dinner</a>
                  <a href="#" class="popularTag">Breackfast</a>
                  <a href="#" class="popularTag">Fruit</a>
                </div>
              </div>
            </div>
            <!-- ------------------ Popular End Here ------------ -->
            <!-- ------------------------ Discount Start Here ------------  -->
            <div class="discount"  >
              <a href="#">
                <img class="img-fluid" src="{{ asset('frontend/images/discount.png') }}" alt="">
              </a>
            </div>
            <!-- ------------------------ Discount End Here ------------  -->
            <!-- ------------------------ Best Sale Products Start Here ------------  -->
            <div class="saleProducts">
              <h3>Sale Products</h3>
              <div class="saleCard">
                <a href="#">
                  <div class="row">
                    <img class="col-4 img-fluid" src="{{ asset('frontend/images/Mango.png') }}" alt="">
                    <div class="col-8">
                      <h4> Fresh Mango</h4>
                      <span>$32.00 <del>$20.99</del></span>
                      <div class="review">
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="saleCard">
                <a href="#">
                  <div class="row">
                    <img class="col-4 img-fluid" src="{{ asset('frontend/images/red capsicum.png') }}" alt="">
                    <div class="col-8">
                      <h4>Red Capsicum</h4>
                      <span>$32.00 <del>$20.99</del></span>
                      <div class="review">
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="saleCard">
                <a href="#">
                  <div class="row">
                    <img class="col-4 img-fluid" src="{{ asset('frontend/images/eggplant.png') }}" alt="">
                    <div class="col-8">
                      <h4>Green Capsicum</h4>
                      <span>$32.00 <del>$20.99</del></span>
                      <div class="review">
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- ------------------------ Best Sale Products End Here ------------  -->

          </div>
</form>
        </div>
        <!-- ============ Right Side Filter Start Here ============ -->
        <!-- ------- Products Start Here ------- -->
        <div class="product col-lg-9">
          <!-- *category Start Here -->
          <section id="category">
            <div class="row">
              <div class="sortBox col-lg-6 col-12">
                <div class="row align-items-center">
                  <div class="col-lg-12 col-8">
                    <span>Sort by :</span>
                    <select>
                      <option value="1">Latest</option>
                    </select>
                  </div>
                  <div class="filterMdBtn text-end d-inline d-lg-none d-block col-4">
                    <button href="#filter" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvasExample" type="button">
                      <span>
                        <iconify-icon icon="rivet-icons:filter" width="20" height="20"></iconify-icon>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <h6 class="text-lg-end text-start mt-2 mt-lg-0"><span>{{  $products->count(0)}}</span>Results Found</h6>
              </div>
            </div>
          </section>
          <!-- ProductCardBox start -->
          <section id="Products">
            <div class="row justify-content-start">
          @forelse ($products as $product)
              <div class="productCard  ">
                <div class="thumbnail">
                  <a href="{{ route('frontend.product.show',$product->slug) }}"><img src="{{ title_img($product->featured_img) }}" alt="{{ $product->title }}" class="img-fluid"></a>
                  <ul class="quickLinks">
                    <li><a href="./product.html"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                    <li><a href="#"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                  </ul>
                </div>
                <div class="content">
                  <a href="{{ route('frontend.product.show',$product->slug) }}">
                    <h6>{{ $product->title }}</h6>
                  </a>
                  @if ($product->selling_price)
                  <strong>{{ number_format($product->selling_price,2) }} ৳ 
                  <span>{{ number_format($product->price,2)}} ৳ </span></strong>
                  @else
                  <strong>{{ number_format($product->price,2)}} ৳ </strong>
                  @endif
                  <span>
                  <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="18" height="18"></iconify-icon>
                  <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="18" height="18"></iconify-icon>
                  <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="18" height="18"></iconify-icon>
                  <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="18" height="18"></iconify-icon>
                  <iconify-icon class="halfStar" icon="material-symbols:star-rounded" width="18" height="18"></iconify-icon>
              
                  <a class="addToCart" href="{{ route('cart.add', $product->id) }}"><iconify-icon icon="heroicons:shopping-bag" width="24" height="24"></iconify-icon></a>

                </div>
              </div>
          @empty
            <h4 class="text-center">No products found !</h4>
          @endforelse
            </div>
                <!-- ====== Pagination Section Start Here ====== -->
<div class="pagination justify-content-center">

  <ul class="d-flex justify-content-center" style="list-style: none; padding: 0; margin: 0;">
    <li>
     <a class="leftPage {{ $products->onFirstPage() ? 'disabled' : '' }}" href="{{ $products->onFirstPage() ? '#' : $products->previousPageUrl() }}">
  <iconify-icon icon="iconamoon:arrow-left-2-light" width="24" height="24"></iconify-icon>
</a>
    </li>

      @foreach ($products->getUrlRange(max(1, $products->currentPage() - 2), min($products->lastPage(), $products->currentPage() + 2)) as $page => $url)
        <li>
        <a href="{{ $url }}" class="next {{ $page == $products->currentPage() ? 'active' : '' }}">{{ $page }}</a>
      </li>
    @endforeach
     @if ($products->lastPage() > $products->currentPage() + 2)
      <li><a class="next" href="#">...</a></li>
      <li><a href="{{ $products->url($products->lastPage()) }}" class="next">{{ $products->lastPage() }}</a></li>
    @endif
     <a class="rightPage {{ $products->currentPage() == $products->lastPage() ? 'disabled' : '' }}" href="{{ $products->currentPage() == $products->lastPage() ? '#' : $products->nextPageUrl() }}">
  <iconify-icon icon="iconamoon:arrow-right-2-light" width="24" height="24"></iconify-icon>
</a>
    </li>
  </ul>
</div>
<!-- ====== Pagination Section End Here ====== -->
</section>
</div>
</div>
</div>

  </section>


@push('script')
<script src ="{{ asset('frontend/js/shop.js') }}"></script>
<script src ="{{ asset('frontend/js/om-javascript-range-slider.js') }}"></script>
<script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>
@endpush

@endsection
