<?php

namespace App\Http\Middleware;

use Closure;

class RecordMiddleware
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
        //记录每一个请求的 请求路径 requset.log
        //获取路径 
        // $path = $request->path();
        $path =$request->ip() .'+'.$request->get('name');
        file_put_contents('./requset.log',$path."\r\n",FILE_APPEND);
        return $next($request);
    }
}
