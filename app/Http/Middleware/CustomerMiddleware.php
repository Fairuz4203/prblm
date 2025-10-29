<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth('customer')->check()){
             return $next($request);
        }else{
            Auth::guard('customer')->logout();
            return redirect()->route('customer.login')->with('error','You must be logged in as a customer to access this page.');
        }
       
    }
}
