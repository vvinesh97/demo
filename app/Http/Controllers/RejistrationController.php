<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RejistrationController extends Controller
{
    public function Registration(){
        return view("register");
      }


    
    public function save(RegistrationRequest $request){
        $validated = $request->validated(); 

        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'password' => Hash::make($validated['password']), 
        ]);
        if ($user) {
            return redirect()->route('login')->with('message', 'Registration successful. Please log in.');
        } else {
            return back()->withInput()->with('message', 'Registration failed. Please try again.');
        }
    }
    
      
}
