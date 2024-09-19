<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        try {
            if (!Hash::check($password, $user->password)) {
                return null;
            } else {
                return view('create-post');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something Went Wrong ,Please Try again');
        }
    }
}
