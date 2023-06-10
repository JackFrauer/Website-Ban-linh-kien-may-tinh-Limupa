<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    //
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $formfield= $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => ['required','min:3','confirmed'],
            'First_name' => ['required','min:3'],
            'Last_name' => ['required','min:3']
        ]);
        //hash password
        $formfield['password']=bcrypt($formfield['password']);
        //create user
        $user = User::create($formfield);
        //login
        auth()->login($user);
        return redirect('/')->with('message','Welcome');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','Goodbye');
    }


    public function login(Request $request)
    {
        $formfield= $request->validate([
            'name' => ['required','min:3'],
            'password' => ['required','min:3']
        ]);
        if(auth()->attempt($formfield)){
            $request -> session()->regenerate();
            return redirect('/')->with('message','Welcome Back');
        }
        return back()->withErrors(['name'=>'Invalid Credentials'])->onlyInput('name');
    }






}
