<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('Login.login');
    }

/**
     * logique of login.
     */
    public function login(Request $request)
    {
        $password = $request->password;
        $email = $request -> email;
        // $admintype = User::all();
        $credentials = ['email'=>$email , 'password'=>$password];
        if(Auth::attempt($credentials)){
            if (Auth()->user()->isAdmin == 1) {
                $request->session()->regenerate();
                return to_route('backend.dachboard');
            } elseif (Auth()->user()->isAdmin == 0) {
                //CONNECT
                $request->session()->regenerate();
                return to_route('User.profile');
            }
            // $request->session()->regenerate();
            // return to_route('backend.dachboard');
        }else{
            return back()->withErrors([
                'email' => 'Email or password is incorrect'
            ])->onlyInput('email');
        };
    }

    public function logout()
    {
        FacadesSession::flush();
        Auth::logout();
        return  to_route('login.login');
    }
}
