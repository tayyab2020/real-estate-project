<?php

namespace App\Http\Middleware;

use Closure;

class UserTypeMiddleware
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
       if($request->user())
       {
           if ($request->user()->usertype == '')
           {
               return redirect('admin/confirm-user-type');
           }
       }

        return $next($request);
    }
}
