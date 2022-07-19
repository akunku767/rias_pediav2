<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleToGoogleCallback(){
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id',$user->getId())->first();
            $findrole = Role::where('id',$finduser->role_id)->first();
            Session::put('google_id', $user->getId());
            Session::put('name', $user->getName());
            Session::put('email', $user->getEmail());
            Session::put('avatar', $user->getAvatar());

            if($finduser){
                // dd($finduser->role_id);
                Session::put('roles', $findrole->name);
                Auth::login($finduser);
                return redirect(session('url'));
            } else{
                // dd($user);
                Session::put('roles', 'User');
                $newUser = User::create([
                    'role_id' => '2',
                    'name' => $user->name,
                    'username' => $user->email,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'avatar' => $user->avatar,
                    'password'=> bcrypt('12345678'),
                ]);
                
                Auth::login($newUser);
                return redirect(session('url'));
            }
        } catch (\Throwable $th) {
            
        }
    }
}
