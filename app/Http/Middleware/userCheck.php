<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class userCheck
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

        if (Auth::check()){
            $user= Auth::user();

            if ($user->flag != 'admin'){
                return $next($request);
            }
            else{
                return redirect('/dashboard');
            }
        }
        else
        {
            return redirect('/login');
        }

        //return $next($request);
    }
}
