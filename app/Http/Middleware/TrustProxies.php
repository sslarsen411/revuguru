<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Http\Request;
use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Symfony\Component\HttpFoundation\Request;


class TrustProxies
{
    // Use env to keep it simple; tighten to CF ranges later if you want
    protected mixed $proxies = null;

    protected int $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO;

    public function __construct()
    {
        $this->proxies = config('app.trusted_proxies', env('TRUSTED_PROXIES', '*'));
    }

}
