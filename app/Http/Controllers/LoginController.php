<?php

namespace App\Http\Controllers;

use App\Mail\forgetPassword;
use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ForgetPasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class LoginController extends Controller

{
    public function login(){
        return view("login");
     }

     public function doLogin(LoginRequest $request){
        // $credentials = $request->only('email', 'password');
        //  if (Auth::guard('web')->attempt($credentials)) {
        //     Session::put('user_id', Auth::id());
        //     Session::put('email', Auth::user()->email);
        //     return redirect()->route("home");
        // } else {
        //     return redirect()->route("login")->with('message', 'Login failed');
        // }
        $user = User::where('email', '=', $request->email)->first();
    if ($user) {
        if (Hash::check($request->password, $user->password)) {

             Session::put('loginId',$user->id);
             return redirect()->route("home");

        } else {
            return redirect()->route("login")->with('message', 'password not matched');
        }
    } else {
        return redirect()->route("login")->with('message', 'mail is not registered');
    }          
         
  }

        public function logout(){
            Session::pull('loginId');
            Session::flush();
            Auth::logout();
            return redirect()->route("login");
            
        }

        public function forgetPassword(){
            return  view("forgetPassword");
        }


        public function doforgetPassword(ForgetPasswordRequest $forgetPasswordRequest){

            $user = User::where("email", $forgetPasswordRequest->email)->first();
            if($user){
                $token = Str::random(120);
                $user->update(["password_reset_token" => $token]);
                Mail::to(request("email"))->send(new forgetPassword($user,$token));
                return redirect()->route("login")->with("message","Please check your inbox");
            }else{
                return redirect()->route("login")->with("message","Invalid user");

            }


        }

        public function resetPassword($token){
            $user = User::where("password_reset_token",$token)->first();
            if($user){
                $user->update(["password_reset_token" => NULL]);
                return view("reset_password",compact("user"));

            }else{
                return redirect()->route("forgetPassword")->with("message","Token Invalid");

            }


        }

        public function doresetPassword(){
            $user = User::where("id",request("id"))->first();
            if($user){
                $user->update(["password" =>bcrypt(request("password"))]);
                return redirect()->route("login")->with("message","Please login with your new password");
            }else{
                return redirect()->route("login")->with("message","something went wrong please try again");
            }
        }
        
}
