<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class IsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->user()->verified){
            Session::flush();
            return redirect(route('login'))->withAlert('لطفا حساب کاربری خود را تایید کنید.');
        }else{
            return $next($request);
        }
    }
}
