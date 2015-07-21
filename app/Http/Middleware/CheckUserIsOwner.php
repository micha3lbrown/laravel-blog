<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckUserIsOwner
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
        if ($request->locations->user_id !== Auth::id()) {
            return redirect('/locations');
        }
        return $next($request);
    }
}
