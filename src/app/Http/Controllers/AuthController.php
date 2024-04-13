<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\Auth;

class AuthController extends Controller
{
        public function index()
{
  return view('auth.register');
}


    public function index1()
{
  return view('admin');
}

}
