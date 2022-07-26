<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('url', request()->fullUrl()); 
        $updated = DB::table("users")
        ->orderBy("updated_at", "desc")
        ->first();

        $roles = Role::all(); 

        $users = User::all(); 
        return view('admin.user.index', ['users' => $users, 'updated' => $updated, 'roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // returs
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required', 
            'password' => 'required',
            'role' => 'required',
          ]);

        //   $input = $request->all();
        //   $user = User::create($input);
        
        $findrole = Role::where('name',$request->role)->first();
        if(!$findrole){
          return back()->with('fail',"Invalid create user");
        }
        $user = User::create([
          'name' => ucwords($request->name),
          'email' => $request->email, 
          'password' => bcrypt($request->password),
          'role_id' => $findrole->role_id,
        ]);
         
        return back()->with('success',"A new user has been added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required', 
            'role' => 'required',
          ]);
               
        //  $user = User::find($id)->update($request->all()); 
        $findrole = Role::where('name',$request->role)->first();
        if(!$findrole){
          return back()->with('fail',"Invalid update user");
        }
        $user = User::find($id)->update([
            'name' => ucwords($request->name),
            'email' => $request->email, 
            'role_id' => $findrole->role_id,
        ]); 
                
        return back()->with('success',"An user has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return back()->with('success',"An user has been destroyed");
    }
}
