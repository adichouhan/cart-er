<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;


class ApiAuthController extends ApiController
{
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {

        $credentials = request(['email', 'password']);

        if (! auth('web')->attempt($credentials)) {
            return $this->responseUnauthorized();
        }

        // Get the user data.
        $user = auth('web')->user();
        $token = $user->createToken('myApp')-> accessToken;
        return response()->json([
            'status' => 200,
            'message' => 'Authorized.',
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => array(
                'id' => $user->id,
                'name' => $user->name
            )
        ], 200);
    }
}
