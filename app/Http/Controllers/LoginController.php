<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
    	return view('admin.login');
    }

    public function authenticate()
    {

    	$credentials = request()->only(['username','password']);

    	if(Auth::guard('account')->attempt($credentials))
    	{
    		return $this->userPage();
    	}
    	else
    	{
    		return redirect('/login');
    	}
    
    }

    public function userPage()
    {
    	if(auth('account')->user()->role == "admin")
    	{
    		return view('admin.page');
    	}
    }

}
