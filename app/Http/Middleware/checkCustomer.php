<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        if(auth()->guard('customer')->check())
        {
            // dd('hi');
            return $next($request);
        }
        // dd('bye');
        notify()->error('Please Login first.');
        return redirect()->route('customer.login');
       

    }
}
