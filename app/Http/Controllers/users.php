<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use DB;

class users extends Controller
{
    public function index(){
        $utilisateurs = User::all();

        return view('view_profile' , [
            'utilisateur' => $utilisateurs
            ]);
    }

    public function adduser(){
        request()->validate([
            'useremail' =>['required'],
            'username' =>['required'],
            'usermdp' => ['required'],
        ]);

        $utilisateurs = User::create([ 
            'email' => request('useremail'),
            'name' => request('username'), 
            'password' => request('usermdp'), 
            'photo' => cloudinary()->upload(request()->file('gamepic')->getRealPath())->getSecurePath(),
        ]);
        return view('view_profile');
    }
    
}