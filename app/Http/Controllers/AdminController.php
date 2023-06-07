<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Menu;
// use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function dashboard() {
        return view('admin.admin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/admin/dashboard');
        }
        return redirect('/admin')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout(){
        return redirect('/admin')->with(Auth::logout());
    }
}
