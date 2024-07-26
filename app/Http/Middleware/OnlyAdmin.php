<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Onlyadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        //apa yang harus dilakukan kalo akun yang login bukan admin
        if(Auth::user()->role_id !=1) {
            return redirect('books');
        }
        //apa yang dilakukan kalo akun yang login admin
        return $next($request);
    }
}
