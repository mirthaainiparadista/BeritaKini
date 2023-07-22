<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register',[
            'title'=>'Register',
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email:filter|unique:users',
            'password'=>'required|max:255|min:5',
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        
        $request->session()->flash('success','Register Success, Please Login!!!');

        return redirect('/login');
    }
}
