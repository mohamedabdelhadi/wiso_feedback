<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
class RegisterController extends Controller
{
    public function index(){
        return view('login.register');
    }

    public function chart(){
        return view('chart');
    }

    
    public function register(Request $request){

        if(empty($request->name) || empty($request->email) || empty($request->password)){
            return response()->json(['error'=>'No Field Should be Empty']);
        }else{

            $user = new User;
            $user->name = $request->name ;
            $user->email = $request->email ;
            $user->password = \Hash::make($request->password) ;
            $user->remember_token = $request->token ;
            if($user->save()){
                return response()->json(['success'=>'User has been saved.....']);
            }else{
                return response()->json(['error'=>'Network Error : User Does not Save..']);
            }
        }

    }
}
