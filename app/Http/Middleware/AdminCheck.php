<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AdminCheck
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
        if(Auth::check()){
            if(Auth::user()->checkRole()) {
                return $next($request);
            }else{
                return redirect()->route('admin.login')->with('loi','Bạn không phải là admin.');
            }
        }else{
            return redirect()->route('admin.login');
        }
    }
}
