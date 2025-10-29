@extends('layouts.frontendlayouts')
@section('title','Customer Login')
@section('content')

@push('css')
 <style>
    .socialLogin{
        display:flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 5px;
        margin-top: 20px;
        text-decoration:none;
        color:#000;
        font-weight: 500;
    }
    .socialLogin:hover{
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        transition: all 0.3s ease-in-out;

    }
 </style>
@endpush

<div class = "mt-5 mb-5">
    <div class="col-lg-5 mx-auto">
    <div class = "card">
        <div class ="card-body">
             @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror
      @error('email')
    <div class="text-danger">{{ $message }}</div>
    @enderror
     @error('phone')
    <div class="text-danger">{{ $message }}</div>
    @enderror
     @error('address')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    @error('password')
    <div class="text-danger">{{ $message }}</div>
    @enderror

            <form action = "{{ route('customer.register.confirm') }}"  method = "post">
    @csrf
    <div class ="form-group my-3">
        <label for = "name" class="mb-2">Your Name <b class = "text-danger">*</b></label>
        <input type ="text" name ="name" class ="form-control" placeholder =" Write Your Name">
    </div>
   
     <div class ="form-group my-3">
        <label for = "phone" class="mb-2">Your Phone Number <b class = "text-danger">*</b></label>
        <input type ="text" name ="phone" class ="form-control" placeholder ="Write Your phone number">
    </div>
     <div class ="form-group my-3">
        <label for = "email" class="mb-2">Your Email <b class = "text-danger">*</b></label>
        <input type ="email" name ="email" class ="form-control" placeholder ="Enter Your Email">
    </div>
     <div class ="form-group my-3">
        <label for = "address" class="mb-2">Your Address <b class = "text-danger">*</b></label>
        <input type ="text" name ="address" class ="form-control" placeholder ="Enter Your Address">
    </div>
     <div class ="form-group my-3">
        <label for = "password" class="mb-2">Your Password <b class = "text-danger">*</b></label>
        <input type ="password" name ="password" class ="form-control" placeholder ="*********" required>
        <a href="#" class="text-secondary">Forget Password !</a>
    </div>
   
    <button type="submit" class ="btn btn-primary" style="background-color: #1aa71aff !important; color:white; padding:14px; border-radius: 5px; width:100%; margin:0 auto; ">Register</button>
    <div class="row">
    <div class="col-lg-6"> 
    <a href ="#" class="socialLogin">
        <img  width="25px" src ="{{ asset('auth/images/google.png') }}" alt="">
        <span> Continue with Google</span>
    </a>
</div>

 <div class="col-lg-6"> 
    <a href ="#" class="socialLogin">
        <img  width="25px" src ="{{ asset('auth/images/facebook.png') }}" alt="">
        <span> Continue with Facebook</span>
    </a>
</div>
<div class="col-lg-12 text-center mt-3">
    <a  class="text-success" href="{{ route('customer.login') }}">Already have an account? Please Sign In !</a>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

@endsection