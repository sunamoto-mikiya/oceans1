<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\ErrorHandler\Debug;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }


    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->get();

        if (count($user) === 0) {
            return response()->json(['message' => 'ログインに失敗しました'], 404);
        }

        // 一致
        if (Hash::check($request->password, $user[0]->password)) {
            $userId = $user[0]->id;
            return response()->json(['userId' => $userId], 201);

            // 不一致    
        } else {
            return response()->json(['message' => 'ログインに失敗しました'], 404);
        }
    }
}
