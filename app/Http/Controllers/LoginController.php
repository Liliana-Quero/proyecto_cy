<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   /* Public function show(){
        return view('auth.login');
    }*/
    public function show()
    {

        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
                       return redirect()->to('/login')->withErrors('USUARIO O CONTRASEÑA INCORRECTOS');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);


        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user)
    {

        if(auth()->user()->role =='admin'){
            return redirect()->route ('admin');

        }
        else {
            return redirect()->to('/home');
        }

    }
    }
