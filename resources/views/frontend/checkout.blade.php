@extends('layouts.frontendlayouts')
@section('content')
@push('css')
<link rel="stylesheet" href="{{ asset('frontend/css/checkout.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/checkoutresponsive.css') }}">

@endpush
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
          <a href="cart.html" class="active">Checkout</a>
        </li>
      </ul>
    </div>
  </section>
  <!-- Breadcrumbs End Hear -->
   <main>
    <div class="container">
      <div class="row">
        <div class="information col-lg-8 col-md-12 col-12">
          <div class="informationHeader">
            <h2>Billing Information</h2>
          </div>
          <div class="informationForm">
            <form action="" class="name row g-3">
              <div class="col-lg-4">
                <label for="inputEmail4" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fName" placeholder="Your first name">
              </div>
              <div class="col-lg-4">
                <label for="inputEmail4" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lName" placeholder="Your last name">
              </div>
              <div class="col-lg-4">
                <label for="inputEmail4" class="form-label">Company Name <span>(optional)</span></label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Company name">
              </div>
            </form>
            <form action="" class="addres row g-3">
              <div class="streetAddress">
                <label for="inputEmail4" class="form-label">Street Address</label>
                <input type="text" class="form-control" id="address" placeholder="Your street address">
              </div>
            </form>
            <form action="" class="country row g-3">
              <div class="col-lg-4 region">
                <label for="Country" class="form-label">Country / Region</label>
                <select name="Country" id="Country">
                  <option value="">Select your country</option>
                  <option value="">Bangladesh</option>
                  <option value="">India</option>
                  <option value="">Pakistan</option>
                  <option value="">Nepal</option>
                </select>
              </div>
              <div class="col-lg-4 states">
                <label for="Country" class="form-label">States</label>
                <select name="States" id="States">
                  <option value="">Select your state</option>
                  <option value="">Dhaka</option>
                  <option value="">Chittagong</option>
                  <option value="">Khulna</option>
                  <option value="">Rajshahi</option>
                </select>
              </div>
              <div class="col-lg-4">
                <label for="inputEmail4" class="form-label">Zip Code</span></label>
                <input type="text" class="form-control" id="zip" placeholder="Zip Code">
              </div>
            </form>
            <form action="" class="contact row g-3">
              <div class="email">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email Address">
              </div>
              <div class="phone">
                <label for="inputEmail4" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="Phone number">
              </div>
            </form>
            <div class="different col-12 d-flex align-items-center">
              <input type="checkbox" id="differentAddress" placeholder="">
              <label for="differentAddress">Ship to a different address</label>
            </div>
          </div>
          <div class="additionalInfo">
            <h2>Additional Info</h2>
            <div class="textarea col-lg-12 col-12">
              <label for="notes">Order Notes (Optional)</label>
              <textarea name="" id="notes" cols="0" rows="0" class="form-control"
                placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
            </div>
          </div>
        </div>
        <div class="summery col-lg-4 col-md-12 col-12">
          <div class="cart-summary">
            <div class="cart-total">
              <h3 class="">Cart Total</h3>
               @php
            $totalPrice = 0
          @endphp
          @foreach ($carts as $cart)

              <div class="orderCart d-flex justify-content-between align-items-center">
                <div class="orderImg">
                  <img src="{{ title_img($cart->product->featured_img) }}" alt="Red Capsicum" class="product-img img-fluid">
                  <span class="ordertext">{{ substr($cart->product->title,0,10).'...' }}<span>x{{ $cart->qty }}</span></span>
                </div>
                 @php
              $price =  $cart->qty * ($cart->product->selling_price ?? $cart->product->price);
              $totalPrice += $price;
            @endphp
                <span>{{ number_format($price) }} ৳</span>
              </div>
              @endforeach

              <div class="subtotal">
                <p>Subtotal:</p>
                <span class="">{{ number_format($totalPrice,2) }}৳</span>
              </div>

              <div class="shipping">
                <p>Shipping:</p>
                <span>Free</span>
              </div>

              <div class=" total">
                <p>Total:</p>
                <span>{{ number_format($totalPrice,2) }}৳</span>
              </div>
              <h3 class="paymentHeading">Payment Method</h3>
             
              <div class="payment">
                <input type="radio" name="Payment" id="ssl" checked >
                <label for="ssl">SSL Commerce</label>
              </div>

          <button id="sslczPayBtn"
        token="if you have any token validation"
        postdata=""
        order="If you already have the transaction generated for current order"
        endpoint="/payment"> Pay Now
       </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
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
 
 <!-- ------------------main section ends here--------------- -->

@push('script')
<script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>
<script src="{{ asset('frontend/js/checkout.js') }}"></script>

<script>
  $('#sslczPayBtn').click(function (e) {

    var obj = {};
    let fullName = $('#fName').val() + ' ' + $('#lName').val();
    obj.cus_name = fullName;
    obj.cus_phone = $('#phone').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    obj.amount = `{{ $totalPrice  }}` ;
     
       $('#sslczPayBtn').prop('postdata', obj);
     });
   
</script>
<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
@endpush
@endsection