<?php

namespace App\Http\Middleware;

use Closure;

class CheckEmail
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
        if(request()->has('email')){
           if(request('email')=='admin@gmail.com'){
               return redirect('cannot');
           }
        
    }
    return $next($request);
    }
}
