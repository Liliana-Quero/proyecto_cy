<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;

class LogoutController extends Controller
{
    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
