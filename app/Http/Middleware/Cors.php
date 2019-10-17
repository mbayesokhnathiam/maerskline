<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        $response = $next($request);
        $IlluminateResponse = 'Illuminate\Http\Response';
        $SymfonyResponse = 'Symfony\Component\HttpFoundation\Response';

        $headers = [
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Methods' => 'GET, POST, PUT, PATCH, OPTIONS, DELETE',
            'Access-Control-Allow-Headers' => 'Content-Type , Authorization'
        ];

        if ($response instanceof $IlluminateResponse)
        {
            foreach($headers as $key => $value)
            {
                $response->headers->set($key, $value);
            }
            return $response;
        }
        else 
        {
            foreach($headers as $key => $value)
            {
                $response->headers->set($key, $value);
            }
        }
        return $response;
    }
}
