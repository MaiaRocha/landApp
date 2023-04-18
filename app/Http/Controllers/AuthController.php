<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use Exception;

class AuthController extends Controller
{
    public function login(LoginRequest $request) {
        //validação
        try {
            $data = $request->all();

            $token = auth()->attempt([  //autenticação
                'email' => $data['email'],
                'password' => $data['password']
            ]);
            
            if(!$token){
                throw new Exception;
            }

            $tokenResponse = $this->respondWithToken($token);

            return $tokenResponse;

        } catch (Exception $e) {
            return response()->json(['errors' => ['Erro no login']], 401);
        }



    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 3600
        ]);
    }
}
