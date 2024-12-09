<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   public function index(){
    return view('auth.register');
   }
   public function store(Request $request){
    $request->request->add(['username'=>Str::slug($request->username)]);
    //validacion
    $this->validate($request,[
      'name'=>'required|min:5',
      'username'=>'required|unique:users|max:20|min:3',
      'email'=>'required|email|unique:users|max:30',
      'password'=>'required|confirmed|min:6'
    ]);
    User::create([
      'name'=>$request->name,
      'username'=>$request->username,
      'email'=>$request->email,
      'password'=>Hash::make($request->password)
    ]);
    //autenticar usuario
    auth()->attempt($request->only('email','password'));
    return redirect()->route('posts.index');
   }
   
}
 