<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\client;

class registerController extends Controller
{
    public function registerController(Request $request){
        $newUser = new client;
        $newUser->user_name = $request->input('user_name');
        $newUser->first_name = $request->input('first_name');
        $newUser->last_name = $request->input('last_name');
        $newUser->email = $request->input('email');
        // Hash::make($request->newPassword)
        $password =  Hash::make($request->input('password'),['rounds' => 12,]);
        $newUser->password = $password;
        $newUser->age = $request->input('age');
        $newUser->save();
        // dd($password);
        return "Correcto";
    }

    public function loginController(Request $request){
        $user = client::where('email',$request->input('email'))->first();
        // dd($user);
        if (Hash::check($request->input('password'), $user->password)) {
            dd($user->session_token);
            return "correcto";
        }else{
            return "incorrecto";
        }
    }
}
