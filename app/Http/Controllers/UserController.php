<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
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

        return Redirect::to('/login')->with('signupsuccess','Signup Successful!');
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

        $remember = $request->has('remember');
    
        if (Auth::attempt($credentials)) {
            if($remember){
                $request->session()->regenerate();
                $request->session()->put('last_user_email', $request->input('email'));
            }
            return redirect()->intended('/homepage')->with('loginsuccess','Login Successful!');
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

    public function update(Request $request)
    {
        $user = Auth::user();
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'contact_number' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'current_password' => 'nullable|string',
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        if (!empty($validatedData['current_password'])) {
            if (Hash::check($validatedData['current_password'], $user->password)) {
                // Update user data
                /** @var \App\Models\User $user **/
                $user->update([
                    'name' => $validatedData['name'],
                    'email' => $validatedData['email'],
                ]);
                /** @var \App\Models\User $user **/
                $user->save();
                if(!empty($validatedData['contact_number'] && !empty($validatedData['address']))) {
                    UserDetail::updateOrCreate(
                        ['user_id' => $user->id],
                        [
                            'mobile_number' => $validatedData['contact_number'],
                            'address' => $validatedData['address'],
                        ]
                    );
                }
                if(!empty($validatedData['password'])) {
                    $user->password = Hash::make($validatedData['password']);
                    /** @var \App\Models\User $user **/
                    $user->save();
                }
                if ($user->details) {
                    $user->details->save();
                }
            } else {
                return back()->withErrors(['current_password' => 'Current password is incorrect']);
            }

            return back()->with('success', 'Profile updated successfully');
        }else {
            return back()->withErrors(['current_password'=> 'Current password cannot be empty!']);
        }
    }

}