<?php

namespace App\Http\Controllers;

use App\Models\User as User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $users = User::all();
    }

    public function show(int $id) {
        $utilisateur = Utilisateur::all()->where('id', $id)->first();
        return view('Users/show', ['email' => $utilisateur->email]);
    }
}
