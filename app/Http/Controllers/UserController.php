<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    public function login(){
        return view ('login');
    }

    public function register(){
        return view ('signup');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "name" => ['required', 'min:2'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed'
        ], [
            "name.min" => "The name must be at least 2 characters.",
            "email.unique" => "This email address has already been taken.",
            "password.confirmed" => "The password confirmation does not match."
        ]);
    
        $validated['password'] = Hash::make($validated['password']);
    
        $user = User::create($validated);
    
        auth()->login($user);
    }
    

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $emailExists = User::where('email', $credentials['email'])->exists();
    
        if (Auth::attempt($credentials)) {
            return redirect('/register');
        } else {
            if (!$emailExists) {
                return back()->withErrors(['email' => 'No account registered with this email.'])->withInput($request->only('email'));
            } else {
                return back()->withErrors(['password' => 'Wrong password. Please try again.'])->withInput($request->only('email'));
            }
        }
    }  
}