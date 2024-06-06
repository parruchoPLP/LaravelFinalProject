<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller {

    public function store(Request $request) {
        $validated = $request->validate([
            "name" => ['required', 'min:2'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6'
        ], [
            "name.min" => "The name must be at least 2 characters.",
            "email.unique" => "This email address has already been taken.",
            "password.confirmed" => "The password confirmation does not match."
        ]);
    
        $validated['password'] = Hash::make($validated['password']);
    
        $users = User::create($validated);

        auth()->login($users);
        return Redirect::to('/login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $emailExists = User::where('email', $credentials['email'])->exists();

        if(!$emailExists){
            return redirect('/login')->withErrors(['error' => 'Email does not exist']);
        }
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/homepage')->with('success','Login Successful!');
        } else {
            return back()->withErrors(['password' => 'Wrong password. Please try again.'])->withInput($request->only('email'));
        }
    }  
    public function logout()
    {
        // Log out the user
        Auth::logout();

        // Destroy the session
        Session::flush();

        // Redirect to the login page
        return redirect('/login')->with('logoutsuccess', 'You have been logged out.');
    }
}