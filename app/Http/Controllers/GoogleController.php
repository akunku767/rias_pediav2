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
            $findroleuser = Role::where('name','User')->first();
            Session::put('google_id', $user->getId());
            Session::put('name', $user->getName());
            Session::put('email', $user->getEmail());
            Session::put('avatar', $user->getAvatar());

            if($finduser){
                // dd($finduser->role_id);
                $findrole = Role::where('id',$finduser->role_id)->first();
                Session::put('id', $finduser->id);
                Session::put('role', $findrole->name);
                Auth::login($finduser);
                return redirect(session('url'));
            } else{
                // dd($user);
                $newUser = User::create([
                    'role_id' => $findroleuser->id,
                    'name' => $user->name,
                    'username' => $user->email,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'avatar' => $user->avatar,
                    'password'=> bcrypt('12345678'),
                ]);
                
                $finduser = User::where('google_id',$user->getId())->first();
                if($finduser){
                    Auth::login($newUser);
                    Session::put('id', $finduser->id);
                    Session::put('role', 'User');
                    return redirect(session('url'));
                }
            }
        } catch (\Throwable $th) {
            
        }
    }
}
