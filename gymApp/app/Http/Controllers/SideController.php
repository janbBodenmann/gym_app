<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SideController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }
    public function settings()
    {
        return view('settings');
    }
    public function profile()
    {
        return view('profile');
    }
}
