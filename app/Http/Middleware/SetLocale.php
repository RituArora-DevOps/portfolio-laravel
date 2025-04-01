<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get language prefix from URL like /en/about or /fr/home
        $locale = $request->segment(1);
        Log::info('SetLocale Middleware Fired - Segment: ' . $locale);

        // Allow only valid locales
        if (in_array($locale, ['en', 'fr'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        } else {
            App::setLocale(config('app.locale'));
        }

        return $next($request);
    }
}

