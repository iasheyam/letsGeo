<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class QuestionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->types()->count() == 0) {
            return redirect()->route('questions.index');
        }
        return $next($request);
    }
}
