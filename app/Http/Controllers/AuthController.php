<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $r)
    {
        return view('login');
    }
    
    public function register(Request $r)
    {
        return view('register');
    }
}
