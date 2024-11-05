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
    public function show_admin(){
        return view('admin');
    }
    public function show_news(){
        return view('news');
    }
    public function createnews(){
        return view('createnews');
    }

//     public function signin(Request $request){
//         $request->validate([
//             'email'=>'required|email|string',
//             'password'=>'required|string',
//             'role'=>'string'
//         ]);

//         if(Auth::attempt([
//             'email'=>$request->email,
//             'password'=>$request->password,
//             'role'=>$request->role,
//         ])){
//             $user = Auth::user(); // Получаем текущего аутентифицированного пользователя

// if ($user->role == 'Админ') {
//     return redirect()->route('show_admin');
// } else {
//     return redirect()->route('holidays.index');
// }
//         }else{
//             return response('НЕ верные данные');
//         }
//     }

public function signin(Request $request) {
    // Валидация входящих данных
    $request->validate([
        'email' => 'required|email|string',
        'password' => 'required|string',
        // 'role' => 'string' // Роль не обязательна для аутентификации
    ]);

    // Попытка аутентификации пользователя
    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password,
    ])) {
        $user = Auth::user(); // Получаем текущего аутентифицированного пользователя
        // var_dump($user);
        // Проверка роли пользователя
        if ($user->role == "Админ") {
            var_dump($user->role);
            return redirect()->route('index');
        } else {
            return redirect()->route('holidays.index');
        }
    } else {
        // Возвращаем сообщение об ошибке
        return response()->json(['error' => 'Неверные данные'], 401);
    }
}


    public function show_signup(){
        return view('signup');
    }

    public function signup(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:6',
            'role'=>'in:Пользователь'

        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=> 'Пользователь'
        ]);

        return redirect()->route('show_signin');


        // Auth::login($user);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('holidays.index');
    }
}
