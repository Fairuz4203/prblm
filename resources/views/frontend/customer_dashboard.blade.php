@extends('layouts.frontendlayouts')
@section('title', 'Customer Dashboard')
@section('content')

<section class="my-5">
    <div class ="container">
        <div class ="card">
            <div class="row">
               <div class ="col-lg-4 p-4" style="border-right:1px solid #ddd;">
                <ul class="px-3">
                    <li class="pb-3">
                       <a  class="text-dark" href="">Dashboard</a>
                    </li>
                     <li class="pb-3">
                       <a class="text-dark" href="">My Orders</a>
                    </li>
                     <li class="pb-3">
                       <a class="text-dark" href="">Pending Orders</a>
                    </li>
                    <li class="pb-3">
                       <a class="text-dark" href="">Reviews</a>
                    </li>
                     <li class="pb-3">
                       <a class="text-dark" href="{{ route('customer.logout') }}">Logout</a>
                    </li>
                </ul>
             </div>
             
              <div class ="col-lg-8 p-4">
                <h3 class="text-center">Welcome To {{ auth('customer')->user()->name }} Dashboard</h3>
                <p class="text-center"> Choose freshness. Choose health. Choose us! Come and shop with a smile!</p>
              </div>
            </div>
        </div>
    </div>
</section>


@endsection