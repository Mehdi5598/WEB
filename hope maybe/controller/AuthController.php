<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            switch ($user->type) {
                case 0: // etudiant
                    return redirect()->intended('etudiant.dashboard')->withSuccess('Signed in');
                    break;
                case 1: // pilote
                    return redirect()->intended('pilote.dashboard')->withSuccess('Signed in');
                    break;
                case 2: // admin
                    return redirect()->intended('admin.dashboard')->withSuccess('Signed in');
                    break;
                default:
                    return redirect('login')->withSuccess('Invalid user type');
        }
    }
        return redirect("login")->withSuccess('Login details are not valid');
    }


    public function registration()
    {
        return view('auth.register');
    }
    
    public function dashboard()
    {
        if (Auth::check()) {
            return view('auth.dashboard');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }}
