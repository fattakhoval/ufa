<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    // public function login(Request $request){
    //     $request->validate([
    //         'email'=> 'required|email',
    //         'password'=> 'required',
    //     ]);

    //     if(Auth::attempt([
    //         'email'=> $request->email,
    //         'password'=>$request->password,
    //         ])){
    //             $user = Auth::user();

    //             return response()->json([
    //                 'status'=>'success',
    //                 'user'=>$user,
    //                 'role'=>$user->role
    //             ]);
    //         }

    //         return response()->json([
    //             'status'=>'error',
    //             'message'=>'Invalid credentials.'
    //         ], 401);
    // }



    public function show_signin(){
        return view('signin');
    }

    public function signin(Request $request){
        $request->validate([
            'email'=>'required|email|string',
            'password'=>'required|string'
        ]);

        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ])){
            return redirect()->route('account');
        }else{
            return response('НЕ верные данные');
        }
    }


    public function show_signup(){
        return view('signup');
    }

    public function signup(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:6'

        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        // Auth::login($user);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('ourAs');
    }
}
