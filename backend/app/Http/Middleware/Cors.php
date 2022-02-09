<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle( $request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set("Access-Control-Allow-Origin","*");
        $response->headers->set("Access-Control-Allow-Headers","Content-type, X-Auth-Token, Authorization, Origin");
        /*$response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods','GET, PUT, POST, DELETE, HEAD, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application');
        $response->headers->set('Cache-Control', 'must-revalidate, no-cache, no-store, private');
        $response->headers->set('Strict-Transport-Security', "max-age=31536000; includeSubDomains; preload;");
        $response->headers->set('Pragma', "no-cache");
        $response->headers->set('X-Frame-Options', "SAMEORIGIN");
        $response->headers->set('X-Content-Type-Options', "nosniff");
        $response->headers->set('X-Xss-Protection', "1; mode=block");
        $response->headers->set('Permissions-Policy', "fullscreen=none ,accelerometer=none, battery=none, camera=none, geolocation=none, gyroscope=none, magnetometer=none, microphone=none");
        */
        return $response;
    }
}
