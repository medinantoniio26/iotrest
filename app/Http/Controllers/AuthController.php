<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Firebase\JWT\JWT;

use function Laravel\Prompts\password;

class AuthController extends Controller
{
    public function login(Request $request){
        $user = User::where('username', $request->username)->first();
        //if(!user) return response('', 404);
        if(!password_verify($request->password, $user->password)) return response('', 401);
        $payload = [
            'sub' => $user->id,
            'iat' => time(),
            'nbf' => time() + 60*60*24*30
        ];
        $jwt = JWT::encode($payload, env('JWT_SECRET'), 'HS256');
        return $jwt;
    }
}
