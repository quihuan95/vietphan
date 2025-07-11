<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get locale from URL parameter
        $locale = $request->get('lang');

        // If no locale in URL, check session
        if (!$locale) {
            $locale = session('locale');
        }

        // If no locale in session, use default (en)
        if (!$locale) {
            $locale = 'en';
        }

        // Validate locale
        $availableLocales = ['en', 'vi'];
        if (!in_array($locale, $availableLocales)) {
            $locale = 'en';
        }

        // Set locale
        app()->setLocale($locale);
        session(['locale' => $locale]);

        return $next($request);
    }
}
