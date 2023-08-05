<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\LoginFormRequest;

class LoginController extends Controller
{

    // Login:

    public function index()
    {
        return view('login.index');
    }


    public function login(Request $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))){

            return redirect()->back()->withErrors('Email ou senha inválidos');
        }

        return to_route('saldo.index');
        
    }

    public function logout()
    {
        
        Auth::logout();

        return to_route('login');

    }

    // Users Creation:

    public function create()
    {
        return view('login.create');
    }

    public function store(LoginFormRequest $request)
    {
       $data = $request->except(['_token']);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        Auth::login($user);


        return to_route('saldo.index');
    }


}
