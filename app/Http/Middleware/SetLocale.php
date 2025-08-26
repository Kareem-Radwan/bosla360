<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = session('locale', config('app.locale'));
        if (! in_array($locale, ['en', 'ar'])) {
            $locale = config('app.locale');
        }
        app()->setLocale($locale);
        return $next($request);
    }
}
