<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch($guard){
            case 'vendor';
            if (Auth::guard($guard)->check()) {
                return redirect('vendor/home');
            }
            break;
            default:
            if (Auth::guard($guard)->check()) {
                return redirect('/account/dashboard');
            }
            break;
        }
        

        return $next($request);
    }
}
