<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
    	return view('home');
    }
    public function create(){
    	return view('register');
    }
    public function contactus(){
    	return view('contactus');
    }
    public function store(){
    	// We are just printing it here. 
    	// in the coming video we will look how to save it in the
    	// database
    	// You may have seen that the request() method actually returns
    	// JSON Value and prints it :)
    	// We will look in video about this a little more :)
    	return request()->all();
    }
}
