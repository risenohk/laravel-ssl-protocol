<?php
/**
 * Created by PhpStorm.
 * User: ryanchan
 * Date: 18/5/2016
 * Time: 12:46 PM.
 */

namespace Riseno\SSLProtocol;

use Closure;

class SSLMiddleware
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
        $request->setTrustedProxies([$request->getClientIp()]);

        if (!$request->secure() && env('APP_ENV') === 'production') {
            return redirect()->secure($request->path());
        }

        return $next($request);
    }
}