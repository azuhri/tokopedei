<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function createUser(Request $request) {
        $name = $request->username;
        $email = $request->email;
        $password = $request->password;
        $typeUserRole = 1;
        $newUser = new User();
        $newUser->name = $name;
        $newUser->email = $email;
        $newUser->password = $password;
        $newUser->user_type_role = $typeUserRole;
        $newUser->save();

        return \response()->json([
            "data" => $newUser,
            "message" => "Berhasil buat user baru",
            "status" => true,
        ]);
    }
}
