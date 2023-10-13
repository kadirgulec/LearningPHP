<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {

        //rules
        $attributes = request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);
        //authentication failed
        if (!auth()->attempt($attributes)) {
            return back()
                ->withInput()
                ->withErrors(['password' => 'Your password is wrong!']);
        }

        //authentication check and welcome message
        session()->regenerate();
        return redirect('/')->with('success', "Welcome back " . auth()->user()->name);

    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'See you soon!');
    }
}
