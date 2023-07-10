<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class is_Admin
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
        if (Auth::user()->hak_akses == "Admin") {
            return $next($request);
        }else {
            if (Auth::user()->hak_akses == "Kemahasiswaan") {
                return redirect('/kemahasiswaan/home');
            }else if (Auth::user()->hak_akses == "Skretariat Musik") {
                return redirect('/UKM-Musik/home');
            }else if (Auth::user()->hak_akses == "Mahasiswa") {
                return redirect('/mahasiswa/home');
            }
        }
    }
}
