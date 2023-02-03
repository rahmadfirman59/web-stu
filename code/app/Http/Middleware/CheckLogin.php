<?php
namespace App\Http\Middleware;

use Closure;
class CheckLogin
{
    public function handle($request, Closure $next){
        if (session('useractive')){
            return $next($request);
        }else{
            return redirect('/admin');
        }
    }

}