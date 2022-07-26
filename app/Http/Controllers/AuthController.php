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

class AuthController extends Controller
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
                Session::put('statusLogSuccess', "Hi ".session('name')."! Welcome back");
                Auth::login($finduser);
                return redirect(session('url'));
            } else{
                // dd($user);
                $newUser = User::create([
                    'role_id' => $findroleuser->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'avatar' => $user->avatar,
                    'password'=> bcrypt('1qa2ws3ed4rf5tg'),
                ]);
                
                $finduser = User::where('google_id',$user->getId())->first();
                if($finduser){
                    Session::put('id', $finduser->id);
                    Session::put('role', 'User');
                    Session::put('statusLogSuccess', "Hi ".session('name')."! Welcome to Rias Pedia");
                    Auth::login($newUser);
                    return redirect(session('url'));
                }
            }
        } catch (\Throwable $th) {
            
        }
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $finduser = User::where('email',$request->email)->first();
            $findrole = Role::where('id',$finduser->role_id)->first();
            Session::put('id', $finduser->id);
            Session::put('role', $findrole->name);
            Session::put('name', $finduser->name);
            Session::put('email', $finduser->email);
            Session::put('avatar', $finduser->avatar);
            // Auth::login($credentials);
            return redirect(session('url'))->with('statusLogSuccess', "Hi ".session('name')."! Welcome back");
        } else{
            return redirect(session('url'))->with('statusLogFail', "Your email or password is wrong, please try again!");
        }
        
    }
    public function logout(){
        Session::flush();
        Session::put('statusLogSuccess', "Successfully logged out");
        return redirect('/');
    }
}
