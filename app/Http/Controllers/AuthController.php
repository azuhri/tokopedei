<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function loginView() {
        return view("app.signin");
    }

    function loginPost(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $findUser = User::where("email",$email)->first();
        if(!$findUser) {
            return \redirect()->back()->with("error", "email atau password salah!");
        }
        $checkPassword = Hash::check($password, $findUser->password);
        if(!$checkPassword) {
            return \redirect()->back()->with("error", "email atau password salah!");
        }
        $auth = Auth::loginUsingId($findUser->id);
        return \redirect()->intended("app/seller/home");
    }

    function logout() {
        \session()->flush();
        return \redirect()->route("login");
    }
}
