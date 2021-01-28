<?php

namespace App\Http\Controllers\Admin;

use App\post;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }   
    
    public function index()
    {

        User::create(['email' => 'test@test.fr', 'password' => Hash::make('0000')]);
        Auth::attempt(['email' => 'test@test.fr', 'password' => '0000']);
    }

    public function update()
    {
        
    }
}
