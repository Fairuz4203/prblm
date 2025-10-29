<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;        // ✅ import Auth
use Illuminate\Support\Facades\Validator;   // ✅ import Validator
use Illuminate\Support\Facades\Hash;        // ✅ import Hash
use App\Models\Customer; 
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   use RegistersUsers;
    use AuthenticatesUsers;
   protected $redirectTo = '/my-account';

     

  function showLoginForm(){
    return view('auth.customers.login');
  }

    function showRegisterForm(){
    return view('auth.customers.register');
  }

   protected function guard()
    {
        return Auth::guard('customer');
    }

      protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => 'nullable|string',
            'address' =>  'nullable|string',
        ]);
    }


     protected function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone'=> $data['phone'] ?? null,
            'address'=>$data['address'] ?? null,
        ]);
    }


    function viewDashboard(){
      return view('frontend.customer_dashboard');
    }
    
     function googleLogin(){
      return Socialite::driver('google')->stateless()->redirect();
    }
     
      function googleCallback(){
       $user = Socialite::driver('google')->stateless()->user();

       $customer = Customer::updateOrCreate([
        'email' => $user->email,
       ],[
        'name' =>$user->name,
        'email' => $user->email,
        'password' => Hash::make(uniqid())
       ]);

       Auth::guard('customer')->login($customer);
       return to_route('customer.dashboard');
    }
}

