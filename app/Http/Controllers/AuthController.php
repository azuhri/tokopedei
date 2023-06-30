<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function loginView() {
        return view("app.signin");
    }
}
