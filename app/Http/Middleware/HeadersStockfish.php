<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HeadersStockfish
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        header('Cross-Origin-Embedder-Policy: require-corp');
        header('Cross-Origin-Opener-Policy: same-origin');

        /*
         * Cross-Origin-Embedder-Policy: require-corp
Cross-Origin-Opener-Policy: same-origin
         * */
        return $next($request);
    }
}
