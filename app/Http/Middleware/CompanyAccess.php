<?php

namespace App\Http\Middleware;

use App\Services\User\UserService;
use Auth;
use Closure;
use Illuminate\Http\Request;

class CompanyAccess
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!UserService::check_company(Auth::user())) {
            return response()->json([], 403);
        }

        // Store the tenant info into session.
        return $next($request);
    }
}