<?php

namespace App\Http\Middleware;

use Closure;

class Checktoken
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
        if($request->header('token')!= null){
            return $next($request);
        }


        return response()->json(['message' => 'no successfully']);
    }
}
