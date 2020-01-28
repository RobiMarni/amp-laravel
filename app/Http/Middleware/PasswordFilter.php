<?php

namespace App\Http\Middleware;

use Closure;

class PasswordFilter
{

    public function enter($request, Closure $next)
    {
        if(!empty($request->header('X-Password')))
	{
            if($request->header('X-Password') === 'Fortuna Major')
	    {
                return $next($request);
            }
            return response()->json(['message'=>'Incorrect Password | 401'],401);
        }
        return response()->json(['message'=>'Incorrect Password | 401'],401);
    }
}