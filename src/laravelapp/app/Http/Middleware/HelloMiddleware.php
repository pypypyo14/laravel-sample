<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = [
            ['name'=> 'taro', 'mail'=>'taro@aaa'],
            ['name'=> 'hanako', 'mail'=>'hanako@aaa'],
            ['name'=> 'sachiko', 'mail'=>'sachiko@aaa'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
