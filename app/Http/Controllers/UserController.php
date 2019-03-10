<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\RegDB;
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
    public function store(Request $request){
        $data = new RegDB;
        $data->name = $request['name'];
        $data->mobile = $request['mobile'];
        $data->email = $request['email'];
        $data->gender = $request['gender'];
        $data->city = $request['city'];
        //return $data; // Just for viewing purpose
        $data->save();
        return redirect('/');
    }
}