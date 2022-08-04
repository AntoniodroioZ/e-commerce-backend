<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\client;

class testController extends Controller
{
    public function primerPrueba(Request $request){
        $users = client::where('id',$request->input('id'))->get();
        dd($users);
        if($users == "[]"){
            $arr = array("status"=>3);
            return json_encode($arr);
        }else{
            foreach ($users as $user) {
                $arr = array('user_name'=>$user->user_name,'first_name'=>$user->first_name,'last_name'=>$user->last_name,'email'=>$user->email,'age'=>$user->age,'session_token'=>$user->session_token);
            }
            return $arr;
        }
    }
}
