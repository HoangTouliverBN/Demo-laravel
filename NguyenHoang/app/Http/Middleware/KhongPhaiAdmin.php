<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KhongPhaiAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        if(Auth::user()->id_phanquyen==1){
            return redirect('home')->with('message','Bạn không có quyền truy cập vào chức năng này');
        }

        return $next($request);
    }
}
