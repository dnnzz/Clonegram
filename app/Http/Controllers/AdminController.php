<?php

namespace App\Http\Controllers;

use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $user = User::all();
       // dd($user);
        return view('admin',compact('user'));
    }
}
