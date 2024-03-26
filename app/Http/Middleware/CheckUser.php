<?php
// app/Http/Middleware/CheckUser.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
{
    public function handle(Request $request, Closure $next)
    {
        // Ellenőrizze, hogy a felhasználó be van-e jelentkezve
        if (auth()->check()) {
            return $next($request);
        }

        abort(403, 'Nincs jogosultságod ehhez az oldalhoz.');

        // Vagy választhatod az alábbi visszatérést is
        // return redirect('/login');
    }
}
