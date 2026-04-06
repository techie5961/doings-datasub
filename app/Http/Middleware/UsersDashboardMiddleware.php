<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UsersDashboardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('users')->check()){
            return redirect('users/login');
        }
        $name=Auth::guard('users')->user()->name;
        $name=explode(' ',$name);
        $inititals='';
        foreach($name as $data){
        $inititals.=substr($data,0,1);
        }
        View::share('currency',Auth::guard('users')->user()->currency);
        View::share('inititals',strtoupper($inititals));
        return $next($request);
    }
}
