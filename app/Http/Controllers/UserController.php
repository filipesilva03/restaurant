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
        $data->save();
        return redirect('/');
    }
    public function show($id){
        $data = RegDB::find($id);
        return view('admin.show', compact('data'));
    }
    public function index(){

        $data = RegDB::all();

        return view('admin.index',compact('data'));
    }
    public function update(Request $request, $id){
        $data = RegDB::find($id);
        $data->name = $request['name'];
        $data->email = $request['email'];
        $data->mobile = $request['mobile'];
        $data->gender = $request['gender'];
        $data->city = $request['city'];
        $data->save();
        return redirect("/uc/$id");
    }
    public function edit($id){
        $data = RegDB::find($id);
        return view('admin.edit',compact('data'));
    }
    public function destroy($id){
        //Here with this function I am first finding the id and
        // then I am deleting it. 
        RegDB::find($id)->delete();
        //After deleting it I am going to redirect back to the uc. in my case.
        //this will call the index method of my controller. 
        // Okay lemme show you. 
        return redirect('/uc');
    }
}