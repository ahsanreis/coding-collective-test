<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            return redirect()->route('admin.panel');

        }
        return view('pages.admin-panel.login');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
    }
}
