<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class FacebookAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->user();
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Facebook authentication failed. Please try again.');
        }

        $user = User::where('email', $facebookUser->getEmail())->first();

        if (!$user) {
            // Generate a random password
            $randomPassword = Str::random(12);

            // Create a new user with a random password
            $user = User::create([
                'name' => $facebookUser->getName(),
                'email' => $facebookUser->getEmail(),
                'password' => Hash::make($randomPassword), // Hash the random password
            ]);

            // Send the random password to the user via email (optional)
            // You should implement email sending logic here

            // Redirect the user to set up their password (optional)
            // You should implement a route and view for password setup
        }

        // Log in the user
        Auth::login($user);

        // Redirect to wherever you want
        return redirect()->route('admin.index');
    }
}
