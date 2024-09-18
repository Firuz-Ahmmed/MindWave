<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class UserController extends Controller
{

    public function register(Request $request)
    {
        return view('register');
    }
    public function registerDataSave(Request $request)
    {
        $user = new User();
        $request->validate([
            'name' => 'required|max:15|unique:users',
            'email' => 'bail|required|email|unique:users',
            'password' => 'required|min:8',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240|min:1',
        ]);
        try {
            if ($request->input('checkbox')) {
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->password = bcrypt($request->input('password'));
                $fileName=$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move(public_path('uploads/images'), $fileName);
                if (($request->input('confirm-password')) == ($request->input('password'))) {
                    $user->save();
                    return redirect()->route('login');
                } else {
                    return redirect()->back()->with('error', 'Passwords do not match');
                }

            }
        } catch (\Exception $e) {
            dd("Errors Found");
        }






    }
}
