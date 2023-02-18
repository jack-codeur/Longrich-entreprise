<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'nmeroTel' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
        ]);


        $user = new User();

        $user->nom = $request->nom;
        $user->nmeroTel = $request->nmeroTel;
        $user->email = $request-> email;
        $user->password = Hash::make($request['password']);

        $user->save();

        // return redirect('accueil');
        return redirect()->route('login');
    }

}
