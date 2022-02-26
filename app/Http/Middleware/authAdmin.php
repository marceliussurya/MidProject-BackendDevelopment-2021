<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class authAdmin
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
        $currentRouteName=Route::currentRouteName();$userLevel=auth()->user()->level;
            if(in_array($currentRouteName,$this->userAccessRole()[$userLevel])){
                return $next($request);
            }else{
                abort(403,'berhasil login');
            }

    }

    private function userAccessRole(){
        return [
        'admin'=>[
            'home',
            'siswa',
            'about'
            ],
        'pengguna'=>[
            'home',
            'siswa',
            'about'
            ],
        ];
    }
}
