<?php

namespace App\Http\Controllers\Adminauth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers, ThrottlesLogins;
    
    protected $redirectTo   = '/dashboard';
    protected $guard        = 'admin';
    
    public function showLoginForm() {
        if(Auth::guard('admin')->check()) {
            return redirect('/dashboard');
        }
        return view('login');
    }
    
    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
