<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(); 
        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'role_id' => 'required',
          ]);

        //   $input = $request->all();
        //   $user = User::create($input);
          $user = User::create([
            'name' => ucwords($request->name),
            'email' => $request->email, 
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id,
          ]);
         
          return back()->with('success',' User baru berhasil dibuat.');
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
        $user = User::findOrFail($id);
        return view('user.edit', [
            'user' => $user,
            'email' => $user, 
            'password' => $user,
            'role_id' => $user,
        ]);
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
            'password' => 'required',
            'role_id' => 'required',
          ]);
               
        //  $user = User::find($id)->update($request->all()); 
        $user = User::find($id)->update([
            'name' => ucwords($request->name),
            'email' => $request->email, 
            'role_id' => $request->role_id,
          ]); 
                
         return back()->with('success',' Data telah diperbaharui!');
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

        return back()->with('success',' Penghapusan berhasil.');
    }
}
