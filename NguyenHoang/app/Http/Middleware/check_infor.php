<?php

namespace App\Http\Middleware;

use App\Models\user_information;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class check_infor
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
        $user_id = Auth::user()->id;

        $user_infor = user_information::where('user_id',$user_id)->first();

        if($user_infor == null){
            return redirect('/user-information');
        }

        return $next($request);
    }
}
