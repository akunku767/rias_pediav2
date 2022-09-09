<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session('id')){
            $id = session('id');
            $finduser = User::where('id',$id)->first();
            if($finduser){
                $findrole = Role::where('id',$finduser->role_id)->first();
                Session::put('url', request()->fullUrl());
                Session::put('role', $findrole->name);
                Session::put('google_id', $finduser->id);
                Session::put('name', $finduser->name);
                Session::put('email', $finduser->email);
                Session::put('avatar', $finduser->avatar);

                $lists = DB::table("scrapes")->orderBy("review", "asc")->limit(10)->get();
                return view('index', compact('lists'));
            }else {
                return redirect('auth/logout');
            }

        }else{
            Session::put('url', request()->fullUrl());
            $lists = DB::table("scrapes")->orderBy("review", "asc")->limit(10)->get();
            return view('index', compact('lists'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
