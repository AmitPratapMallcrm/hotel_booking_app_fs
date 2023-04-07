<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function store(Request $request)
    {
        $input = $request->all();

        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role_id'=>$input['role_id'],
            'api_token'=> Str::random(60),
        ]);

        return response()->json([
            'status' => true,
            'message' => "Registation Success"

        ]);
    }
}
