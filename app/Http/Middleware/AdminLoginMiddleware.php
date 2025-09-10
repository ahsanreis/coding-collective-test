<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $admin = User::select('email', 'password')->where('email', 'admin@admin.com')->first();
        if (password_verify($request->password, $admin->password)) {
            $request->session()->put('admin', $admin->email);
            return redirect()->route('admin.panel');
        }
        return redirect()->route('home');
    }
}
