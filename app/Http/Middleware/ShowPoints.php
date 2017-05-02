<?php

namespace App\Http\Middleware;

use Closure;

class ShowPoints
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if (file_exists( storage_path() . '/spfend/end')) {
           $request->request->add(['points' => true]);
        }

        return $next($request);
    }
}
