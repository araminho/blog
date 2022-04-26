<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TerminateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo "Executing handle method of TerminateMiddleware.";

        return $next($request);
    }

    public function terminate($request, $response)
    {
        $status = $response->status();
        if ( $status !=200) {
            Log::debug("Something wrong happened");
        }

        echo "<br>Executing terminate method of TerminateMiddleware.";
    }

}
