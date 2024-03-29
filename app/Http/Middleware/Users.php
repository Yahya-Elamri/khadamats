<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\UserCreation;

class Users
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = $request->session()->get('id');
        $UserData = UserCreation::select('*')->where('id',$id)->get();
        $request->attributes->add(['UserData' => $UserData]);
        if ($id != NULL) {
            return redirect("/home");
        }
        return $next($request);
    }
}
