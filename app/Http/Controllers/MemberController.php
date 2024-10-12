<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:members',
            'password' => 'required|string|min:6',
        ]);

        $member = Member::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['member' => $member], 201);
    }

    public function login(Request $request)
    {
        // Implement login logic here (e.g., validate credentials)
    }
}