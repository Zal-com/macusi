<?php

namespace App\Http\Middleware;

use App\View\Components\construction;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Determine default language based on client
        //Fallback on english if language not available
        //To add a language, add the locale in config/custom.php file

        \App::setLocale($request->lang);

        return $next($request);
    }
}
