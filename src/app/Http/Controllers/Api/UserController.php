<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skill;
use Illuminate\Contracts\Database\Eloquent\Builder;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show(int $id)
    {
        $user = User::find($id);
        // $skills = User::with('skills')->get();
        $skills = Skill::whereHas('Users', function (Builder $q) use ($id) {
            $q->where('user_id', $id);
        })->get();
        
        return response()->json(['user' => $user, 'skills' => $skills]);
    }
}
