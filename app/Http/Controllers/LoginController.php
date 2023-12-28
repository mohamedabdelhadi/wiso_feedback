<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Session;
class LoginController extends Controller
{

    public function index(){
        return view('login.signIn');
    }

    public function userhome(){
        
        
        return view('index');
    }
    
    public function dashboard(){
        return view('dashboard');
    }

    public function login(Request $request){

        $validator = $request->validate([
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $id = Auth::id();
            $user = User::find($id);
            session_start();
            $request->session()->put('user_id',$id);
            $request->session()->put('name',$user->name);
            $request->session()->put('email',$user->email);
            return response()->json(['success'=>'User has been get.....']);

        }else{
            return response()->json(['error'=>'Email Or Password is Wrong ']);
        }

       
    }

    // public function logout(Request $request){

    //     \Session::flush();
    //     \Auth::logout();
    //     return Redirect::to('http://localhost:8080/kkia_dashboard/');
    // }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect()->to('https://qltyss.com/matarat_feedback/');
    }
}
