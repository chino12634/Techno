<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if(Auth::user()->is_locked) {
                Auth::logout();
                return redirect()->route('login')->withErrors([
                    'account' => 'Your account is not enabled',
                ]);;
            }
            else {
                return $next($request);
            }
        }
        return redirect()->route('login');
    }
}
