<?php

namespace App\Http\Middleware;

use Closure;

use App\Models\Jadwal_line;

class Jadwal
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
        $tanggal = date('Y-m-d');
        $cek = Jadwal_line::where('tanggal',$tanggal)->count();

        if($cek < 1){
            return redirect('/');
        }

        return $next($request);
    }
}
