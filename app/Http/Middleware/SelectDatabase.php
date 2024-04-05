<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Config;

class SelectDatabase
{
    public function handle($request, Closure $next)
    {

        $number = 1; 

        $user = $request->user();
        if ($user) {
            $databaseConnection = 'school_' . $number;
        
            Config::set('database.default', $databaseConnection);
        }
        
        return $next($request);
    }
}
