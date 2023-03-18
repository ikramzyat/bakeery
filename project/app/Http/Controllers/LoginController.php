<?php

namespace App\Http\Controllers;

use App\Models\LoginUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function PostRegister(Request $request)
    {
        $validatedData = $request->validate([
            'login' => 'required|string|min:5|max:255|unique:login_users',
            'password' => 'required|string|min:6',
        ],
        [
            'login.unique' => 'Ce nom d\'utilisateur est déjà utilisé.',
        ]
    
    
    
    );
        LoginUser::create([
            'login' => $validatedData['login'],
            'password' => Hash::make($validatedData['password']),
        ]);
        if (Auth::attempt(['login' => $validatedData['login'], 'password' => $validatedData['password']])) {
            return "hi";
        } else {
            return redirect()->route('welcome');
        }
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('welcome');
        } else {
            return "acceder a la page login";
        }
    }
}






