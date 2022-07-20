<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){
        if(Session::get('id')){
        $id = Session::get('id');
        $finduser = User::where('id',$id)->first();
            if($finduser){
                $findrole = Role::where('id',$finduser->role_id)->first();
                Session::put('role', $findrole->name);
                $roles = DB::table("roles")->get();
                $users = DB::table("users")->get(); 
                $vendors = DB::table("vendors")->get(); 
                return view('admin.index', ['roles' => $roles, 'users' => $users, 'vendors' => $vendors], ); 
            }else{
                return redirect('auth/logout');
            }
        }else{
            return redirect('/');
        }

        
    }
}
