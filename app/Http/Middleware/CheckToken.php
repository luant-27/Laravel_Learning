<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
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
        if ($request->header('token')) {
            return $next($request);
        } else {
            // return redirect('login');
            return response()->json(['status'=>'error'],403);
        }    
    }
}
