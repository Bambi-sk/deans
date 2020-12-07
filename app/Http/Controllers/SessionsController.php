<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SessionsController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }
    public function forb()
    {
        return view('pages.403');
    }
    
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == true) {
            if (auth()->user()->is_admin == 1) {
                return redirect()->to('/indexAdmin');
            }else{
                return redirect()->to('/indexStudent');
            }
        }
        else{
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
       
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/login');
    }
}
