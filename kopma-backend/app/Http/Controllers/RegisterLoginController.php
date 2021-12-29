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

        $validationRules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $validate = Validator::make($request->all(), $validationRules);

        if($validate->fails()) {
            return response()->json([
                $validate->errors()
            ], 400);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        if($user->role === 'user') {
            $token = $user->createToken('user_token', ['user'])->plainTextToken;
        } 
        elseif($user->role === 'admin') {
            $token = $user->createToken('admin_token', ['admin'])->plainTextToken;
        }

        return response()
            ->json(['message' => 'login nsuccess',
                    'access_token' => $token,
                    'user' => $user]);

    }


    public function register(Request $request) {
        $validationRules = [
            // 'username' => 'required|unique:users|min:4',
            'name' => 'required|min:6',
            'email' => 'required|unique:users|email',
            'password' => ['required', Password::min(8)->numbers()],
            // 'phone' => 'required|unique:users|numeric',
            // 'birthday' => ['required', 'date_format:Y-m-d'],
            // 'gender' => ['required', Rule::in(['L', 'P'])],
            // 'role' => ['required', Rule::in(['admin', 'user'])]

        ];

        $validate = Validator::make($request->all(), $validationRules);

        if($validate->fails()) {
            return response()->json([
                $validate->errors()
            ], 400);
        }

        $validatedData = $validate->validated();
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['role'] = 'user';

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
}
