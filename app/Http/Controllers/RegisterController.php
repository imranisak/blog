<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',//Encrypted via the mutator, in the User class
        ]);
        if(request('picture')) {
            request()->validate(['picture|image']);
            $attributes['picture']=request()->file('picture')->store('profilePictures');
        }
        $user=User::create($attributes);
        auth()->login($user);

        return redirect('/')->with('success', "Congrats, you have successfully created an account!");
    }
}
