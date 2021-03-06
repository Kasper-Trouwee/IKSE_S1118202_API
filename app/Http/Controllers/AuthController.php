<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => 'User',
            'password' => bcrypt($request->input('password')),
        ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response([
                'message' => 'Het wachtwoord of email is fout'
            ], Response::HTTP_UNAUTHORIZED);
        }
        $user = Auth::user();

        return ["token" => $user->createToken('token')->plainTextToken]; //Er is een error maar de token wordt wel aangemaakt in postman
    }


    public function user(){ return Auth::user(); }

    public function logout()
    {
        $cookie = Cookie::forget('token');

        return response([
            'message' => 'Success'
        ])->withCookie($cookie);
    }
}
