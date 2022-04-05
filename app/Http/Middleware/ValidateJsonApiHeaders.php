<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ValidateJsonApiHeaders
{
    public function handle(Request $request, Closure $next)
    {
        if ( $request->header('Accept') !== 'application/json') {
            throw new HttpException(406, __('Not Aceptable!'));
        }

        if ( ( $request->isMethod('POST') || $request->isMethod('PATCH') )
            && $request->header('Content-Type') !== 'application/json') {
            throw new HttpException(415, _('Unsupported media type!'));
        }

        return $next($request)->withHeaders([
            'Content-Type' => 'application/json'
        ]);
    }
}