<?php
namespace Wpint\Contracts\Middleware;

use Closure;
use Illuminate\Http\Request;

interface MiddlewareContract
{
    
    /**
     * Execute logic of middleware
     *
     * @param Request $request
     * @param Closure $next
     * @return void
     */
    public function handle(Request $request, Closure $next);

}