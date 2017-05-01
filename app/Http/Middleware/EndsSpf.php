<?php

namespace App\Http\Middleware;

use Closure;

class EndsSpf
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

        if (!file_exists( storage_path() . '/spfend/end')) {
            flash()->error('Aguarde o encerramento da SPF para ver o resultado final');
            return redirect('/');
        }

        return $next($request);
    }
}
