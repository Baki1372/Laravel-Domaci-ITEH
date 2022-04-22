<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class AuthentificationController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('R_TOKEN')->plainTextToken;

        $res = [
            'USER - ' => $user,
            'TOKEN - ' => $token,
        ];

        return response()->json($res);
    }





    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['MESSAGE' => 'PLEASE TRY AGAIN']);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('L_TOKEN')->plainTextToken;

        $res = [
            'USER - ' => $user,
            'TOKEN - ' => $token,
        ];

        return response()->json($res);
    }



    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('LOGOUT');
    }
}
