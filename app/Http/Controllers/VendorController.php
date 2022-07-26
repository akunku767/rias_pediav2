<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('url', request()->fullUrl()); 
        $updated = DB::table("vendors")
        ->orderBy("updated_at", "desc")
        ->first();

        $users = User::all(); 

        $vendors = Vendor::all(); 
        return view('admin.vendor.index', ['vendors' => $vendors, 'updated' => $updated, 'users' => $users]);
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
        $request->validate([
            'name' => 'required', 
            'phone' => 'required',
            'user' => 'required',
            'geometry' => 'required|string',
          ]);
        
        // $input = $request->all();
        $finduser = User::where('name',$request->user)->first();
        if(!$finduser){
            return back()->with('fail',"Invalid create vendor");
        }
        if($request->phone=='+62'){
            return back()->with('fail',"Invalid input phone");
        }elseif(strpos($request->phone, "+620")!=""){
            $vendor = Vendor::create([
                'name' => ucwords($request->name),
                'phone' => str_replace("+620","+62",$request->phone), 
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]);
            return back()->with('success',"A new vendor has been added");
        }elseif(strpos($request->phone, "08")=="0"){
            $vendor = Vendor::create([
                'name' => ucwords($request->name),
                'phone' => str_replace("08","+62",$request->phone), 
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]);
            return back()->with('success',"A new vendor has been added");
        }else{
            $vendor = Vendor::create([
                'name' => ucwords($request->name),
                'phone' => $request->phone, 
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]);
        
         
            return back()->with('success',"A new vendor has been added");
        }
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
            'phone' => 'required',
            'user' => 'required',
            'geometry' => 'required',
          ]);
        
        $finduser = User::where('name',$request->user)->first();
        if(!$finduser){
            return back()->with('fail',"Invalid update vendor");
        }
        if($request->phone=='+62'){
            return back()->with('fail',"Invalid input phone");
        }elseif(strpos($request->phone, "+620")!=""){
            $vendor = Vendor::find($id)->update([
                'name' => ucwords($request->name),
                'phone' => str_replace("+620","+62",$request->phone), 
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]); 
            return back()->with('success',"A new vendor has been added");
        }elseif(strpos($request->phone, "08")=="0"){
            $vendor = Vendor::find($id)->update([
                'name' => ucwords($request->name),
                'phone' => str_replace("08","+62",$request->phone), 
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]); 
            return back()->with('success',"A new vendor has been added");
        }else{
            $vendor = Vendor::find($id)->update([
                'name' => ucwords($request->name),
                'phone' => $request->phone, 
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]); 
                
            return back()->with('success',"A vendor has been updated");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();

        return back()->with('success',"A vendor has been destroyed");
    }
}
