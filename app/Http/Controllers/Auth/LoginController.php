<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm(){
        return view("Auth.login");
    }
    public function login(Request  $request){
        $userRequest = $request->validate([
            "email" => "required|email",
            "password"=>"required|string|min:8",

        ]);
        //$user = User::where('email', $userRequest['email'])->first();

        //if ($user && $userRequest['password'] == $user->password) {
        //    return redirect(url('/dashboard'));
        //} else {
        //    return redirect(url('login'))->withErrors(['message' => 'Credentials not correct']);
        //}
        Auth::attempt(["email"=>$userRequest['email'],"password"=>$userRequest['password']]);
        return redirect(url("/dashboard"));
    }
}
