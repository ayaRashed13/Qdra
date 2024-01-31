<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect() {
        if (Auth::check()) {
            // User is authenticated, redirect to authenticated page
            return redirect(url("/dashboard")); // Replace 'authenticated.page' with the actual route name
        } else {
            // User is a guest, redirect to home page
            return redirect(url("/")); // Replace 'home' with the actual route name for your home page
        }
    }
}
