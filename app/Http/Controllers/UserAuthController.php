<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return ['success' => false,  'msg' => 'User Does not Match!'];
        }
        $success['token'] = $user->createToken('myApp')->plainTextToken;
        $user['name'] = $user->name;
        return ['success' => true, 'token' => $success, 'msg' => 'User Login Successfully!', 'user' => $user];
    }
    public function signUp(Request $request)
    {
        $input = $request->all();
        $input["password"] = bcrypt($input["password"]);
        $user = User::create($input);
        $success['token'] = $user->createToken('myApp')->plainTextToken;
        $user['name'] = $user->name;
        return ['success' => true, 'token' => $success, 'msg' => 'User Register Successfully!', 'user' => $user];
    }
}
