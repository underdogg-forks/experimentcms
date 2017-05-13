<?php

namespace Modules\Auth\Http\Middleware;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Modules\Auth\Contracts\Authentication;

class GuestMiddleware
{
    /**
     * @var Authentication
     */
    //private $auth;

    public function __construct()
    {
        //$this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        if (Auth::guest()) {
            return Redirect::route(config('asgard.user.config.redirect_route_after_login'));
        }

        return $next($request);
    }
}
