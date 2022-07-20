<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $roles = DB::table("roles")->get();
        $users = DB::table("users")->get(); 
        $vendors = DB::table("vendors")->get(); 
        return view('admin.index', ['roles' => $roles, 'users' => $users, 'vendors' => $vendors], );
    }
}
