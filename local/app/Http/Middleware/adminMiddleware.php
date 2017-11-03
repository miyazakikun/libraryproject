<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

use Alert;

class adminMiddleware
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
      if (!(Auth::user()->role == 'admin')) {
          Alert::error('Anda Tidak Memiliki Akses!', 'Oops!');
          return redirect('/homes');
      }
      return $next($request);
    }
}
