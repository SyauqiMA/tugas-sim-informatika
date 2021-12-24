<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterLoginController extends Controller
{
    public function login(Request $request) {

        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(! Auth::attempt($validatedData)) {

            return response()->json([
                'status' => 'login failed'
            ], 400);
        }

        $user = User::where('username', $request['username'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['message' => 'Hi '.$user->name.', welcome to home', 'access_token' => $token, 'token_type' => 'Bearer', ]);

    }


    public function register(Request $request) {
        $validationRules = [
            'username' => 'required|unique:users|min:4',
            'name' => 'required|min:6',
            'email' => 'required|unique:users|email',
            'password' => ['required', Password::min(8)->numbers()],
            'phone' => 'required|unique:users|numeric',
            'birthday' => ['required', 'date_format:Y-m-d'],
            'gender' => ['required', Rule::in(['L', 'P'])],
            'role' => ['required', Rule::in(['admin', 'user'])]

        ];

        $validate = Validator::make($request->all(), $validationRules);

        if($validate->fails()) {
            return response()->json([
                $validate->errors()
            ], 400);
        }

        $validatedData = $validate->validated();
        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);

        return response()->json([
            'message' => 'register success',
            'user' => $user,
        ]);

    }

    public function logout(Request $request){
        // auth()->user()->tokens->delete();
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'logout success'
        ]);
    }

    // public function notAuthenticated() {
    //     return response()->json([
    //         'message' => 'unauthenticated boiiiiiii'
    //     ], 401);
    // }
}